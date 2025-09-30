<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\StudentEvaluationAnswer;

class StudentEvaluationAnswerController extends Controller
{
    public static function index() {
        return StudentEvaluationAnswer::all();
    }

    public static function show($id) {
        return StudentEvaluationAnswer::find($id); 
    }

    public function storeBulk(Request $req)
    {
        $data = $req->validate([
            'items' => ['required','array','min:1'],
            'items.*.points' => ['required','integer','min:0'],
            'items.*.student_id' => ['required','integer','exists:students,id'],
            'items.*.evaluation_answer_option_id' =>
                ['required','integer','exists:evaluation_answer_options,id'],
            'items.*.content_student' => ['nullable','array'],
            'items.*.status' => ['nullable','integer','between:0,9'],
        ]);

        $now = now();

        // 1) Map: option_id -> answer_id
        $optionIds = collect($data['items'])
            ->pluck('evaluation_answer_option_id')->unique()->values();

        $optToAns = DB::table('evaluation_answer_options')
            ->whereIn('id', $optionIds)
            ->pluck('evaluation_answer_id', 'id'); // [option_id => answer_id]

        // 2) Îmbogățim item-urile cu evaluation_answer_id și păstrăm
        // o singură alegere per (student_id, evaluation_answer_id). Ultima câștigă.
        $filtered = collect($data['items'])
            ->map(function ($it) use ($optToAns) {
                $ansId = $optToAns[$it['evaluation_answer_option_id']] ?? null;
                if (!$ansId) return null; // safety
                $it['evaluation_answer_id'] = (int)$ansId;
                return $it;
            })
            ->filter()
            ->groupBy('student_id')
            ->flatMap(function ($itemsByStudent) {
                // keyBy answer_id => păstrează ultima intrare pentru același răspuns
                return collect($itemsByStudent)
                    ->keyBy('evaluation_answer_id')
                    ->values();
            })
            ->values();

        if ($filtered->isEmpty()) {
            return response()->json(['ok' => true, 'count' => 0]);
        }

        // 3) Construim rândurile finale
        $rows = $filtered->map(function ($it) use ($now) {
            return [
                'points' => (int)$it['points'],
                'student_id' => (int)$it['student_id'],
                'evaluation_answer_option_id' => (int)$it['evaluation_answer_option_id'],
                'content_student' => isset($it['content_student'])
                    ? json_encode($it['content_student'], JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES)
                    : null,
                'status' => $it['status'] ?? 0,
                'created_at' => $now,
                'updated_at' => $now,
                // avem și evaluation_answer_id, dar tabela actuală nu o stochează
                '___evaluation_answer_id' => (int)$it['evaluation_answer_id'], // doar pentru uz temporar la delete
            ];
        });

        // 4) Tranzacție: ștergem vechile alegeri ale acestor studenți pentru aceleași răspunsuri,
        // apoi inserăm/upsertăm selecțiile noi.
        DB::transaction(function () use ($rows) {

            // grupăm pe student => listă answer_id
            $byStudent = $rows->groupBy('student_id');

            foreach ($byStudent as $studentId => $itemsForStudent) {
                $ansIds = $itemsForStudent
                    ->pluck('___evaluation_answer_id')
                    ->unique()
                    ->filter()   // evită NULL
                    ->values();

                if ($ansIds->isEmpty()) {
                    continue;
                }

                // delete: toate rândurile studentului pentru acele evaluation_answer_id
                DB::table('student_evaluation_answers')
                    ->where('student_id', $studentId)
                    ->whereIn('evaluation_answer_option_id', function ($q) use ($ansIds) {
                        $q->select('id')
                        ->from('evaluation_answer_options')
                        ->whereIn('evaluation_answer_id', $ansIds->all());
                    })
                    ->delete();
            }

            // curățăm câmpul temporar
            $finalRows = $rows->map(function ($r) {
                unset($r['___evaluation_answer_id']);
                return $r;
            })->values()->all();

            // opțional: dacă ai UNIQ pe (student_id, evaluation_answer_option_id)
            // poți folosi upsert; altfel, insert simplu.
            DB::table('student_evaluation_answers')->upsert(
                $finalRows,
                ['student_id', 'evaluation_answer_option_id'],
                ['points', 'content_student', 'status', 'updated_at']
            );
        });

        return response()->json([
            'ok' => true,
            'count' => $rows->count(),
        ]);
    }
}

