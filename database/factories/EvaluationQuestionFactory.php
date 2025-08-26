<?php

namespace Database\Factories;

use App\Models\EvaluationQuestion;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EvaluationQuestion>
 */
class EvaluationQuestionFactory extends Factory
{
    protected $model = EvaluationQuestion::class;
    protected static int $i = 0;

    public function definition(): array
    {
        // ... $task1, $task2, ... $task13 & $nr_randX / $nr_simbolX definite mai sus
        $task1 = <<<'HTML'
        Sinonimul ales
HTML;

        $task2 = <<<'HTML'
Argumentarea
HTML;

        $nr_rand2 = 4;
        $nr_rand3 = 6;

        $task4 = <<<'HTML'
Tipul uman
HTML;

        $task5 = <<<'HTML'
Citate şi comentarii
HTML;

        $nr_rand5 = 7;

        $task6 = <<<'HTML'
Figura de stil
HTML;

        $task7 = <<<'HTML'
Comentariul
HTML;

        $nr_rand7 = 7;
        $nr_rand8 = 8;
        $nr_rand9 = 14;
        $nr_rand10 = 6;
        $nr_rand11 = 7;

        $task12 = <<<'HTML'
Argumentul 1
HTML;

        $nr_rand12 = 7;

        $task13 = <<<'HTML'
Argumentul 2
HTML;

        $nr_rand13 = 7;

        $questions = [
            ["task" => $task1,  "type" => "Input",    "order_number" => 1, "evaluation_item_id" => 1, "content_settings"=> null,                                           "placeholder"=> "scrie sinonimul aici…", "hint"=> null],

            ["task" => $task2,  "type" => "Textarea", "order_number" => 2, "evaluation_item_id" => 1, "content_settings"=> ['nr_rand'=>$nr_rand2], "placeholder"=> null, "hint"=> "argumenteaza cu referință la text"],

            ["task" => null,  "type" => "Virtual", "order_number" => 3, "evaluation_item_id" => 1, "content_settings"=> null, "placeholder"=> null, "hint"=> "trebuie referință la text"],

            ["task" => null,  "type" => "Textarea", "order_number" => 1, "evaluation_item_id" => 2, "content_settings"=> ['nr_rand'=>$nr_rand3], "placeholder"=> null, "hint"=> null],

            ["task" => $task4,  "type" => "Input",    "order_number" => 1, "evaluation_item_id" => 3, "content_settings"=> null,                                           "placeholder"=> "scrie tipul uman aici…", "hint"=> null],

            ["task" => $task5,  "type" => "Textarea", "order_number" => 2, "evaluation_item_id" => 3, "content_settings"=> ['nr_rand'=>$nr_rand5], "placeholder"=> null, "hint"=> null],

            ["task" => $task6,  "type" => "Input",    "order_number" => 1, "evaluation_item_id" => 4, "content_settings"=> null,                                           "placeholder"=> "scrie figura de stil aici…", "hint"=> null],

            ["task" => $task7,  "type" => "Textarea", "order_number" => 2, "evaluation_item_id" => 4, "content_settings"=> ['nr_rand'=>$nr_rand7], "placeholder"=> null, "hint"=> null],

            ["task" => null,    "type" => "Textarea", "order_number" => 1, "evaluation_item_id" => 5, "content_settings"=> ['nr_rand'=>$nr_rand8], "placeholder"=> null, "hint"=> null],

            ["task" => null,    "type" => "Textarea", "order_number" => 1, "evaluation_item_id" => 6, "content_settings"=> ['nr_rand'=>$nr_rand9], "placeholder"=> null, "hint"=> null],

            ["task" => null,    "type" => "Textarea", "order_number" => 1, "evaluation_item_id" => 7, "content_settings"=> ['nr_rand'=>$nr_rand10],"placeholder"=> null, "hint"=> null],

            ["task" => null,    "type" => "Textarea", "order_number" => 1, "evaluation_item_id" => 8, "content_settings"=> ['nr_rand'=>$nr_rand11],"placeholder"=> null, "hint"=> null],

            ["task" => $task12, "type" => "Textarea", "order_number" => 1, "evaluation_item_id" => 9, "content_settings"=> ['nr_rand'=>$nr_rand12],"placeholder"=> null, "hint"=> null],

            ["task" => $task13, "type" => "Textarea", "order_number" => 2, "evaluation_item_id" => 9, "content_settings"=> ['nr_rand'=>$nr_rand13],"placeholder"=> null, "hint"=> null],
        ];

        $q = $questions[ static::$i % count($questions) ];
        static::$i++;

        $settings = $q['content_settings'] ?? null;

        return [
            'task' => $q['task'] === null ? null : ['html' => $q['task']],
            'content_settings' => $settings
                ? [
                    'nr_rand'   => $settings['nr_rand']   ?? null,
                  ]
                : null,
            'hint'               => $q['hint'] === null ? null : ['html' => $q['hint']],
            'type'               => $q['type'],
            'placeholder'        => $q['placeholder'],
            'order_number'       => $q['order_number'],
            'evaluation_item_id' => $q['evaluation_item_id'],
        ];
    }
}
