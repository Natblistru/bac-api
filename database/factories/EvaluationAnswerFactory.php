<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EvaluationAnswer>
 */
class EvaluationAnswerFactory extends Factory
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

        $answers = [
            ["task" => "Sinonimul acceptabil:",  "content" => $content1,    "max_points" => 1, "evaluation_question_id" => 1],

            ["task" => "Argumentarea accepatbilă:",  "content" => $content2, "max_points" => 2, "evaluation_question_id" => 2],
            ["task" => "Referință la text:",  "content" => $content3, "max_points" => 1, "evaluation_item_id" => 1, "evaluation_question_id" => 3],
        ];

        $a = $answers[ static::$i % count($answers) ];
        static::$i++;

        return [
            'task' => $a['task'],
            'content' => $a['content'] === null ? null : ['html' => $a['content']],
            'max_points' => $a['max_points'],
            'evaluation_question_id'=> $a['evaluation_question_id']
        ];
    }
}
