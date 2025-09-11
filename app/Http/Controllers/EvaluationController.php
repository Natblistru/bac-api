<?php

namespace App\Http\Controllers;

use App\Models\Evaluation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EvaluationController extends Controller
{

    public function index(Request $request)
    {
        $q = trim((string) $request->query('q', ''));

        // Construim forma pentru BOOLEAN MODE: "cuvant*" (doar pentru termeni >= 4)
        $prefixQ = '';
        if ($q !== '') {
            $tokens  = preg_split('/\s+/u', $q, -1, PREG_SPLIT_NO_EMPTY);
            $prefixQ = implode(' ', array_map(function ($t) {
                // curățăm caractere speciale din boolean mode
                $t = preg_replace('/[+\-@~><\(\)"*]/u', '', $t);
                return mb_strlen($t, 'UTF-8') >= 4 ? ($t.'*') : $t;
            }, $tokens));
        }

        // Fallback cu LIKE doar dacă nu avem termeni utili pt FULLTEXT
        $doLike = ($q !== '' && $prefixQ === '');

        $query = Evaluation::query()
            ->leftJoin('evaluation_sources as es', 'es.evaluation_id', '=', 'evaluations.id')
            ->leftJoin('evaluation_items   as ei', 'ei.evaluation_source_id', '=', 'es.id')
            ->when($q !== '', function ($w) use ($prefixQ, $q, $doLike) {
                $w->where(function ($x) use ($prefixQ, $q, $doLike) {
                    if ($prefixQ !== '') {
                        $x->whereRaw("MATCH (es.content_text) AGAINST (? IN BOOLEAN MODE)", [$prefixQ])
                        ->orWhereRaw("MATCH (ei.task_text)  AGAINST (? IN BOOLEAN MODE)", [$prefixQ]);
                    }
                    if ($doLike) { // substring fallback (mai lent)
                        $like = '%'.$q.'%';
                        $x->orWhereRaw("es.content_text LIKE ?", [$like])
                        ->orWhereRaw("ei.task_text  LIKE ?", [$like]);
                    }
                });
            })
            ->select('evaluations.*')
            ->distinct()
            ->orderByDesc('evaluations.id');

        return $query->paginate(24); // sau ->get()
    }

    public static function show($id) {
        return Evaluation::find($id); 
    }

    public function tree(int $id)
    {
        // 1) Mega-join PLAT
        $sql = <<<SQL
        SELECT
        e.id  AS e_id, e.name AS e_name, e.year AS e_year,
        e.subject_id AS e_subject_id, e.profil AS e_profil, e.type AS e_type,

        es.id AS es_id, es.order_number AS es_order, es.content AS es_content,

        ei.id AS ei_id, ei.order_number AS ei_order, ei.task AS ei_task, ei.subtopic_id AS ei_topic_id,

        eq.id AS eq_id, eq.order_number AS eq_order, eq.task AS eq_task, eq.hint AS eq_hint,
        eq.content_settings AS eq_content_settings, eq.placeholder AS eq_placeholder, eq.type AS eq_type,

        ea.id AS ea_id, ea.task AS ea_task, ea.content AS ea_content, ea.max_points AS ea_max_points,

        eao.id AS eao_id, eao.evaluation_option_id AS eao_option_id

        FROM evaluations e
        JOIN evaluation_sources es ON es.evaluation_id = e.id AND es.status = 0
        JOIN evaluation_items ei  ON ei.evaluation_source_id = es.id AND ei.status = 0
        JOIN evaluation_questions eq ON eq.evaluation_item_id = ei.id AND eq.status = 0
        JOIN evaluation_answers ea ON ea.evaluation_question_id = eq.id AND ea.status = 0
        JOIN evaluation_answer_options eao ON eao.evaluation_answer_id = ea.id AND eao.status = 0
        WHERE e.status = 0 AND e.id = ?
        ORDER BY es.order_number, ei.order_number, eq.order_number, ea.id, eao.id
        SQL;

        $rows = DB::select($sql, [$id]);
        if (empty($rows)) {
            return response()->json(['message' => 'Not found'], 404);
        }

        // helper pt. JSON sigur
        $decode = function ($v) {
            if ($v === null || $v === '') return null;
            if (is_array($v) || is_object($v)) return $v;
            $t = @json_decode($v, true);
            return (json_last_error() === JSON_ERROR_NONE) ? $t : $v;
        };

        // 2) Transformare PLAT → ARBORE cu groupBy
        $col = collect($rows);

        $first = $col->first();
        $tree = [
            'id'         => $first->e_id,
            'name'       => $first->e_name,
            'year'       => $first->e_year,
            'subject_id' => $first->e_subject_id,
            'profil'     => $first->e_profil,
            'type'       => $first->e_type,
            'sources'    => [],
        ];

        // group pe SOURCE
        $bySource = $col->groupBy('es_id')
            ->sortBy(fn($g) => $g->first()->es_order);

        foreach ($bySource as $esId => $srcGroup) {
            $sf = $srcGroup->first();

            $sourceNode = [
                'id'           => $sf->es_id,
                'order_number' => $sf->es_order,
                'content'      => $decode($sf->es_content), // JSON
                'items'        => [],
            ];

            // group pe ITEM în cadrul sursei
            $byItem = $srcGroup->groupBy('ei_id')
                ->sortBy(fn($g) => $g->first()->ei_order);

            foreach ($byItem as $eiId => $itemGroup) {
                $itf = $itemGroup->first();

                $itemNode = [
                    'id'           => $itf->ei_id,
                    'order_number' => $itf->ei_order,
                    'topic_id'     => $itf->ei_topic_id,
                    'task'         => $decode($itf->ei_task), // JSON
                    'questions'    => [],
                ];

                // group pe QUESTION în cadrul item-ului
                $byQuestion = $itemGroup->groupBy('eq_id')
                    ->sortBy(fn($g) => $g->first()->eq_order);

                foreach ($byQuestion as $eqId => $qGroup) {
                    $qf = $qGroup->first();

                    $questionNode = [
                        'id'               => $qf->eq_id,
                        'order_number'     => $qf->eq_order,
                        'task'             => $decode($qf->eq_task),             // JSON
                        'hint'             => $qf->eq_hint,
                        'content_settings' => $decode($qf->eq_content_settings), // JSON
                        'placeholder'      => $qf->eq_placeholder,
                        'type'             => $qf->eq_type,
                        'answers'          => [],
                    ];

                    // group pe ANSWER în cadrul întrebării
                    $byAnswer = $qGroup->groupBy('ea_id');

                    foreach ($byAnswer as $eaId => $aGroup) {
                        $af = $aGroup->first();

                        $answerNode = [
                            'id'         => $af->ea_id,
                            'task'       => $decode($af->ea_task),    // JSON
                            'content'    => $decode($af->ea_content), // JSON
                            'max_points' => $af->ea_max_points,
                            'options'    => [],
                        ];

                        // OPTIONS (pot lipsi → filtrăm null)
                        $options = $aGroup
                            ->filter(fn($r) => !is_null($r->eao_id))
                            ->map(fn($r) => [
                                'id'                  => $r->eao_id,
                                'evaluation_option_id'=> $r->eao_option_id,
                            ])
                            ->values()
                            ->all();

                        $answerNode['options'] = $options;
                        $questionNode['answers'][] = $answerNode;
                    }

                    $itemNode['questions'][] = $questionNode;
                }

                $sourceNode['items'][] = $itemNode;
            }

            $tree['sources'][] = $sourceNode;
        }

        return response()->json($tree);
    }
}
