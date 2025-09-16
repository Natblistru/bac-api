<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

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
        // controle din query string: ?include_videos=1&include_presentations=1
        $includeVideos = $request->boolean('include_videos', true);
        $includePres   = $request->boolean('include_presentations', true);
        $includeBps    = $request->boolean('include_breakpoints', true);
        $includeFlip   = $request->boolean('include_flip_cards', true);

        $includeSubs   = $request->boolean('include_subtopics', true);
        $includeEval   = $includeSubs;

        $with = ['topic_content_unit.topic_domain'];

        if ($includeVideos) {
            $with['videos'] = function ($q) {
                $q->select('id','topic_id','title','source')  // adaugă câmpuri după nevoie
                ->orderBy('id');
            };
            if ($includeBps) {
                // eager-load pentru relația imbricată videos.breakpoints
                $with['videos.breakpoints'] = function ($q) {
                    $q->select('id','topic_video_id','name','time','seconds','status')
                    ->orderBy('seconds');
                    // (opțional, dacă în TopicVideoBreakpoint ai `protected $with = ['topic_video']`)
                    // $q->without('topic_video');
                };
            }
        }

        if ($includePres) {
            $with['presentations'] = function ($q) {
                $q->select('id','topic_id','name','path','content_text','thumbnail_path','thumb_w','thumb_h' )
                ->orderBy('id');
            };
        }

        if ($includeFlip) {
            $with['flipCards'] = function ($q) {
                $q->select('id','topic_id','task','answer','order_number','status')
                ->where('status', 0)                 // dacă vrei doar activele
                ->orderBy('order_number');
            };
        }

        if ($includeSubs) {
            // încărcăm subtopicele, plus count de evaluation_items per subtopic
            $with['subtopics'] = function ($q) use ($includeEval) {
                $q->select('id','topic_id','name','order_number','status')
                ->where('status', 0)
                ->orderBy('order_number')->orderBy('id')
                ->withCount('evaluation_items');

                if ($includeEval) {
                    $q->with(['evaluation_items' => function ($qq) {
                        $qq->select(
                                'id',
                                'subtopic_id',           
                                'evaluation_source_id',
                                'task',
                                'short_source_content',
                                'order_number',
                                'status'
                            )
                            ->where('status', 0)
                            ->orderBy('order_number')->orderBy('id')
                            // COUNT întrebări pe fiecare item
                            ->withCount('evaluation_questions')
                            ->with([
                                'evaluation_source:id,evaluation_id',
                                'evaluation_source.evaluation:id,name,profil',
                            ])
                            // Întrebările propriu-zise:
                            ->with(['evaluation_questions' => function ($q3) {
                                $q3->select(
                                        'id',
                                        'evaluation_item_id',   // FK necesar!
                                        'task',
                                        'type',
                                        'hint',
                                        'placeholder',
                                        'content_settings',
                                        'order_number',
                                        'status'
                                    )
                                    ->where('status', 0)
                                    ->orderBy('order_number')->orderBy('id')

                                    // răspunsurile întrebărilor:
                                    ->withCount('evaluation_answers')
                                    ->with(['evaluation_answers' => function ($q4) {
                                        $q4->select(
                                                'id',
                                                'evaluation_question_id', 
                                                'task',
                                                'content',
                                                'max_points',
                                                'status'
                                            )
                                            ->where('status', 0)
                                            ->orderBy('id')

                                            //  opțiunile răspunsului
                                            ->withCount('evaluation_answer_options')
                                            ->with(['evaluation_answer_options' => function ($q5) {
                                                $q5->select(
                                                        'id',
                                                        'evaluation_answer_id', 
                                                        'evaluation_option_id', 
                                                        'status'
                                                    )
                                                    ->where('status', 0)
                                                    ->orderBy('id')
                                                    ->with(['evaluation_option' => function ($qo) {
                                                        $qo->select('id', 'label', 'points')
                                                        ->where('status', 0);
                                                    }]);
                                            }]);
                                    }]);
                            }]);
                    }]);
                }
            };
        }


        // important: eager loading + 404 dacă nu există
        $topic = Topic::with($with)->findOrFail($id);

        // util: număr total resurse asociate
        $topic->loadCount([
            'videos',
            'presentations',
            'flipCards as flip_cards_count',    
            'subtopics as subtopics_count', 
        ]);

        return $topic;
    }

}
