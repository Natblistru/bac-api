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


    public function show($id) {
        return Topic::find($id); 
    }

}
