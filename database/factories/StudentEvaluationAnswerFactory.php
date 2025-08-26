<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StudentEvaluationAnswer>
 */
class StudentEvaluationAnswerFactory extends Factory
{
    protected static int $i = 0;
    public function definition(): array
    {
        $content1 = <<<'HTML'
        înclinație.
HTML;

        $content2 = <<<'HTML'
<p>Am ales „înclinație”, deoarece contextul indică o orientare constantă și puternică spre științele reale („îmi petreceam timpul liber citind”), care „deviase într-o obsesie cronică”, iar naratorul afirmă explicit „<b>patima</b> mea erau științele reale”, marcând o predispoziție, nu un avantaj/beneficiu.</p>
HTML;

        $content3 = <<<'HTML'
<ul><li>„îmi petreceam timpul liber citind”</li><li>„patima mea erau științele reale”</li></ul>
HTML;

        $answers_opt = [
            ["answerId" => 2,  "content" => $content1, "points" => 1],
            ["answerId" => 5,  "content" => $content2, "points" => 2],
            ["answerId" => 7,  "content" => $content3, "points" => 1],
        ];
        $a = $answers_opt[ static::$i % count($answers_opt) ];
        static::$i++;

        return [
            'student_id' => 1,
            'evaluation_answer_option_id' => $a['answerId'],
            'points' => $a['points'],
            'content_student' => $a['content'] === null ? null : ['html' => $a['content']],
        ];
    }
}
