<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;
use App\Models\StudentEvaluationAnswer;
use Illuminate\Support\Facades\DB;

class TopicController extends Controller
{
    public function index(Request $request)
    {
        $q = trim((string) $request->query('q', ''));

        // formăm "cuvant*" pentru BOOLEAN MODE (min 4 litere)
        $prefixQ = '';
        if ($q !== '') {
            $tokens  = preg_split('/\s+/u', $q, -1, PREG_SPLIT_NO_EMPTY);
            $prefixQ = implode(' ', array_map(function ($t) {
                $t = preg_replace('/[+\-@~><\(\)"*]/u', '', $t); // curăță operatori
                return mb_strlen($t, 'UTF-8') >= 4 ? ($t.'*') : $t;
            }, $tokens));
        }
        $doLike = ($q !== '' && $prefixQ === '');

        $query = Topic::query()
            ->leftJoin('topic_videos as tv', 'tv.topic_id', '=', 'topics.id')
            ->leftJoin('topic_presentations as tp', 'tp.topic_id', '=', 'topics.id')
            ->when($q !== '', function ($w) use ($prefixQ, $q, $doLike) {
                $w->where(function ($x) use ($prefixQ, $q, $doLike) {
                    if ($prefixQ !== '') {
                        $x->whereRaw("MATCH (tv.content_text) AGAINST (? IN BOOLEAN MODE)", [$prefixQ])
                        ->orWhereRaw("MATCH (tp.content_text) AGAINST (? IN BOOLEAN MODE)", [$prefixQ]);
                    }
                    if ($doLike) {
                        $like = '%'.$q.'%';
                        $x->orWhereRaw("tv.content_text LIKE ?", [$like])
                        ->orWhereRaw("tp.content_text LIKE ?", [$like]);
                    }
                });
            })
            ->select('topics.*')
            ->distinct()
            ->orderByDesc('topics.id');

        return $query->get(); // sau ->paginate(24)
    }


    public function show(Request $request, $id)
    {
        $includeVideos = $request->boolean('include_videos', true);
        $includePres   = $request->boolean('include_presentations', true);
        $includeBps    = $request->boolean('include_breakpoints', true);
        $includeFlip   = $request->boolean('include_flip_cards', true);

        $includeSubs   = $request->boolean('include_subtopics', true);
        $includeEval   = $includeSubs;

        // student curent
        $studentId = (int) $request->query('student_id', 0);

        // 1) TOPIC + unit + domain + subject (doar DB)
        $topic = DB::table('topics as t')
            ->leftJoin('topic_content_units as tcu', 'tcu.id', '=', 't.topic_content_unit_id')
            ->leftJoin('topic_domains as td', 'td.id', '=', 'tcu.topic_domain_id')
            ->leftJoin('subjects as s', 's.id', '=', 'td.subject_id')
            ->where('t.id', $id)
            ->selectRaw('
                t.id, t.name, t.path, t.content, t.topic_content_unit_id, t.status, t.created_at, t.updated_at,
                tcu.id as tcu_id, tcu.name as tcu_name, tcu.topic_domain_id as tcu_domain_id, tcu.status as tcu_status, tcu.created_at as tcu_created_at, tcu.updated_at as tcu_updated_at,
                td.id as td_id, td.name as td_name, td.subject_id as td_subject_id, td.status as td_status, td.created_at as td_created_at, td.updated_at as td_updated_at,
                s.id as subj_id, s.name as subj_name, s.status as subj_status, s.created_at as subj_created_at, s.updated_at as subj_updated_at
            ')
            ->first();

        if (!$topic) {
            return response()->json(['message' => 'Not found'], 404);
        }

        // 2) COUNT-uri (videos, presentations, flipCards, subtopics)
        //    (dacă vrei tot DB)
        $counts = DB::table('topics as tt')
            ->where('tt.id', $id)
            ->selectRaw('
                (select count(*) from topic_videos where topic_id = tt.id) as videos_count,
                (select count(*) from topic_presentations where topic_id = tt.id) as presentations_count,
                (select count(*) from topic_flip_cards where topic_id = tt.id) as flip_cards_count,
                (select count(*) from subtopics where topic_id = tt.id) as subtopics_count
            ')
            ->first();

        // 3) Asamblăm răspunsul de bază
        $resp = [
            'id'                    => $topic->id,
            'name'                  => $topic->name,
            'path'                  => $topic->path,
            'content'               => $topic->content,
            'topic_content_unit_id' => $topic->topic_content_unit_id,
            'status'                => $topic->status,
            'created_at'            => $topic->created_at,
            'updated_at'            => $topic->updated_at,
            'videos_count'          => (int) ($counts->videos_count ?? 0),
            'presentations_count'   => (int) ($counts->presentations_count ?? 0),
            'flip_cards_count'      => (int) ($counts->flip_cards_count ?? 0),
            'subtopics_count'       => (int) ($counts->subtopics_count ?? 0),
            'cover_url'             => null, // dacă ai separat
            'topic_content_unit'    => [
                'id'             => $topic->tcu_id,
                'name'           => $topic->tcu_name,
                'topic_domain_id'=> $topic->tcu_domain_id,
                'status'         => $topic->tcu_status,
                'created_at'     => $topic->tcu_created_at,
                'updated_at'     => $topic->tcu_updated_at,
                'topic_domain'   => [
                    'id'         => $topic->td_id,
                    'name'       => $topic->td_name,
                    'subject_id' => $topic->td_subject_id,
                    'status'     => $topic->td_status,
                    'created_at' => $topic->td_created_at,
                    'updated_at' => $topic->td_updated_at,
                    'subject'    => [
                        'id'         => $topic->subj_id,
                        'name'       => $topic->subj_name,
                        'status'     => $topic->subj_status,
                        'created_at' => $topic->subj_created_at,
                        'updated_at' => $topic->subj_updated_at,
                    ],
                ],
            ],
            'videos'       => [], // dacă le vrei cu DB aici, poți adăuga select separat
            'flip_cards'   => [],
            'subtopics'    => [],
        ];

        // 4) Dacă nu vrei subtree, returnezi aici
        if (!$includeSubs) {
            return response()->json($resp, 200, [], JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT);
        }

        // 5) SELECT mare pentru subarbore (strict DB) + scorurile studentului
        $rows = DB::select(<<<SQL
            SELECT
                st.id   AS st_id,   st.topic_id AS st_topic_id, st.name AS st_name, st.order_number AS st_order, st.status AS st_status,

                ei.id   AS ei_id,   ei.subtopic_id AS ei_subtopic_id, ei.evaluation_source_id AS ei_source_id,
                ei.task AS ei_task, ei.short_source_content AS ei_short, ei.order_number AS ei_order, ei.status AS ei_status,

                es.evaluation_id      AS e_id,
                e.name                AS e_name,
                e.profil              AS e_profil,

                eq.id   AS eq_id,   eq.evaluation_item_id AS eq_item_id, eq.task AS eq_task, eq.type AS eq_type,
                eq.hint AS eq_hint, eq.placeholder AS eq_placeholder, eq.content_settings AS eq_settings, 
                eq.order_number AS eq_order, eq.status AS eq_status,

                ea.id   AS ea_id,   ea.evaluation_question_id AS ea_qid, ea.task AS ea_task, ea.content AS ea_content,
                ea.max_points AS ea_max_points, ea.status AS ea_status,

                eao.id  AS eao_id,  eao.evaluation_answer_id AS eao_ea_id, eao.evaluation_option_id AS eao_opt_id, eao.status AS eao_status,
                eo.label AS eo_label, eo.points AS eo_points,

                -- scorul studentului (dacă există)
                sea.points AS sea_points

            FROM subtopics st
            JOIN evaluation_items ei ON ei.subtopic_id = st.id AND ei.status = 0
            JOIN evaluation_sources es ON es.id = ei.evaluation_source_id
            JOIN evaluations e ON e.id = es.evaluation_id

            JOIN evaluation_questions eq ON eq.evaluation_item_id = ei.id AND eq.status = 0
            JOIN evaluation_answers   ea ON ea.evaluation_question_id = eq.id AND ea.status = 0
            JOIN evaluation_answer_options eao ON eao.evaluation_answer_id = ea.id AND eao.status = 0
            JOIN evaluation_options eo ON eo.id = eao.evaluation_option_id AND eo.status = 0

            LEFT JOIN student_evaluation_answers sea
                ON sea.evaluation_answer_option_id = eao.id
                AND sea.student_id = ?

            WHERE st.topic_id = ?
            AND st.status = 0

            ORDER BY st.order_number, st.id, ei.order_number, ei.id, eq.order_number, eq.id, ea.id, eao.id
        SQL, [$studentId, $id]);

        // 6) Grupare PLAT → ARBORE (exact ca în "tree")
        $col = collect($rows);

        // subtopics
        $bySub = $col->groupBy('st_id')->sortBy(fn($g) => $g->first()->st_order);

        foreach ($bySub as $stId => $gSub) {
            $sf = $gSub->first();
            $subNode = [
                'id'                    => (int) $sf->st_id,
                'topic_id'              => (int) $sf->st_topic_id,
                'name'                  => $sf->st_name,
                'order_number'          => (int) $sf->st_order,
                'status'                => (int) $sf->st_status,
                'evaluation_items_count'=> 0,   // îl punem corect mai jos
                'evaluation_items'      => [],
            ];

            $byItem = $gSub->groupBy('ei_id')->sortBy(fn($g) => $g->first()->ei_order);
            $subNode['evaluation_items_count'] = $byItem->count();

            foreach ($byItem as $eiId => $gItem) {
                $itf = $gItem->first();
                $itemNode = [
                    'id'                     => (int) $itf->ei_id,
                    'subtopic_id'            => (int) $itf->ei_subtopic_id,
                    'evaluation_source_id'   => (int) $itf->ei_source_id,
                    'task'                   => static::safeJson($itf->ei_task),
                    'short_source_content'   => static::safeJson($itf->ei_short),
                    'order_number'           => (int) $itf->ei_order,
                    'status'                 => (int) $itf->ei_status,
                    'evaluation_questions_count' => 0,
                    'evaluation_source'      => [
                        'id'          => (int) $itf->ei_source_id,
                        'evaluation_id'=> (int) $itf->e_id,
                        'evaluation'  => [
                            'id'     => (int) $itf->e_id,
                            'name'   => $itf->e_name,
                            'profil' => $itf->e_profil,
                            'subject'=> null, // dacă vrei, poți completa separat
                        ],
                    ],
                    'evaluation_questions'   => [],
                ];

                $byQ = $gItem->groupBy('eq_id')->sortBy(fn($g) => $g->first()->eq_order);
                $itemNode['evaluation_questions_count'] = $byQ->count();

                foreach ($byQ as $eqId => $gQ) {
                    $qf = $gQ->first();
                    $qNode = [
                        'id'                 => (int) $qf->eq_id,
                        'evaluation_item_id' => (int) $qf->eq_item_id,
                        'task'               => static::safeJson($qf->eq_task),
                        'type'               => $qf->eq_type,
                        'hint'               => static::safeJson($qf->eq_hint),
                        'placeholder'        => $qf->eq_placeholder,
                        'content_settings'   => static::safeJson($qf->eq_settings),
                        'order_number'       => (int) $qf->eq_order,
                        'status'             => (int) $qf->eq_status,
                        'evaluation_answers_count' => 0,
                        'evaluation_answers' => [],
                    ];

                    $byA = $gQ->groupBy('ea_id');
                    $qNode['evaluation_answers_count'] = $byA->count();

                    foreach ($byA as $eaId => $gA) {
                        $af = $gA->first();
                        $aNode = [
                            'id'                         => (int) $af->ea_id,
                            'evaluation_question_id'     => (int) $af->ea_qid,
                            'task'                       => $af->ea_task, // era string, nu JSON la tine
                            'content'                    => static::safeJson($af->ea_content),
                            'max_points'                 => (int) $af->ea_max_points,
                            'status'                     => (int) $af->ea_status,
                            'evaluation_answer_options_count' => 0,
                            // 1) options (flat) pentru UI
                            'options'                    => [],
                            // 2) evaluare_answer_options (relația clasică, similar cu ce ai în JSON)
                            'evaluation_answer_options'  => [],
                        ];

                        // OPTIONS (map peste gA; fiecare rând e o opțiune)
                        $opts = $gA->map(function($r) {
                            return [
                                'answer_option_id' => (int) $r->eao_id,
                                'option_id'        => (int) $r->eao_opt_id,
                                'label'            => $r->eo_label,
                                'points'           => (int) $r->eo_points,
                                'student_points'   => is_null($r->sea_points) ? null : (int) $r->sea_points,
                                'selected'         => !is_null($r->sea_points), // true dacă există SEA
                            ];
                        })->values()->all();

                        $aNode['options'] = $opts;
                        $aNode['evaluation_answer_options_count'] = count($opts);

                        // Relația evaluare_answer_options (ca în JSON-ul tău)
                        $aNode['evaluation_answer_options'] = $gA->map(function($r) {
                            return [
                                'id'                    => (int) $r->eao_id,
                                'evaluation_answer_id'  => (int) $r->ea_id,
                                'evaluation_option_id'  => (int) $r->eao_opt_id,
                                'status'                => (int) $r->eao_status,
                                'created_at'            => null, // dacă îți trebuie, mai adaugă în SELECT
                                'updated_at'            => null,
                                'student_points'        => is_null($r->sea_points) ? null : (int) $r->sea_points,
                                'selected'              => !is_null($r->sea_points),
                                'evaluation_option'     => [
                                    'id'        => (int) $r->eao_opt_id,
                                    'label'     => $r->eo_label,
                                    'points'    => (int) $r->eo_points,
                                    'status'    => 0,
                                    'created_at'=> null,
                                    'updated_at'=> null,
                                ],
                            ];
                        })->values()->all();

                        $qNode['evaluation_answers'][] = $aNode;
                    }

                    $itemNode['evaluation_questions'][] = $qNode;
                }

                $subNode['evaluation_items'][] = $itemNode;
            }

            $resp['subtopics'][] = $subNode;
        }

        return response()->json($resp, 200, [], JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT);
    }

    /** Helper: JSON sigur (string -> array), altfel returnează null/string */
    protected static function safeJson($v)
    {
        if ($v === null || $v === '') return null;
        if (is_array($v) || is_object($v)) return $v;
        $t = @json_decode($v, true);
        return (json_last_error() === JSON_ERROR_NONE) ? $t : $v;
    }

}
