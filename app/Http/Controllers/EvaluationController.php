<?php

namespace App\Http\Controllers;

use App\Models\Evaluation;
use Illuminate\Http\Request;

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
}
