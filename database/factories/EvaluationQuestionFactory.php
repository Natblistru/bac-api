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

        $hint2 = <<<'HTML'
Enunț argumentativ cu referire la text.
HTML;

        $task3 = <<<'HTML'
(1)
HTML;

        $task31 = <<<'HTML'
(2)
HTML;

        $task32 = <<<'HTML'
(3)
HTML;

        $nr_rand2 = 4;
        $nr_rand3 = 6;

        $task4 = <<<'HTML'
Tipul uman
HTML;

        $hint4 = <<<'HTML'
Enunț logic, coerent, care ilustrează sensul figurat al cuvântului <b>școala</b>.
HTML;

        $hint5 = <<<'HTML'
Enunț logic, coerent, care ilustrează sensul figurat al cuvântului <b>a citi</b>.
HTML;

        $hint6 = <<<'HTML'
Enunț logic, coerent, care ilustrează sensul figurat al cuvântului <b>inimă</b>.
HTML;


        $task5 = <<<'HTML'
Citate şi comentarii<br>(1)
HTML;

        $task51 = <<<'HTML'
(2)
HTML;

        $nr_rand5 = 7;

        $task6 = <<<'HTML'
Figura de stil
HTML;

        $task7 = <<<'HTML'
Comentariul
HTML;

 $task8 = <<<'HTML'
(1)
HTML;

 $hint8 = <<<'HTML'
Două citate din text, cu comentarii relevante, în sprijinul afirmaţiei iniţiale.
HTML;


 $task9 = <<<'HTML'
(2)
HTML;

$hint10 = <<<'HTML'
Rescrie complet figura de stil cu nominalizarea ei corectă: <em>metaforă</em>, <em>epitet,</em>, <em>enumerație</em>, <em>inversie</em>
HTML;

$hint11 = <<<'HTML'
Indică modului constituirii figurii de stil, semnificația ei cu referire la text.
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

$hint12 = <<<'HTML'
Indică 2 trăsături morale deduse din text (responsabil, harnic/muncitor, chibzuit, cumpănit, așezat, rațional, lucid, ironic, grijuliu) cu exemple din text.
HTML;


        $task13 = <<<'HTML'
Argumentul 2
HTML;

$hint14 = <<<'HTML'
Respecta coerența textului.
HTML;

$hint19 = <<<'HTML'
Determină atitudinea cu citate adecvate comentate.
HTML;

$hint23 = <<<'HTML'
Motivează utilizarea și explică valența stilistică a punctelor de suspensie.
HTML;

$hint25 = <<<'HTML'
Prezită două argumente cu exemple din text.
HTML;

        $nr_rand13 = 7;

        $questions = [
            ["task" => $task1,  "type" => "Input",    "order_number" => 1, "evaluation_item_id" => 1, "content_settings"=> null,"placeholder"=> "scrie sinonimul aici…", "hint"=> null],  // 1

            ["task" => $task2,  "type" => "Textarea", "order_number" => 2, "evaluation_item_id" => 1, "content_settings"=> ['nr_rand'=>$nr_rand2], "placeholder"=> null, "hint"=> $hint2],  //2

            ["task" => null,  "type" => "Virtual", "order_number" => 3, "evaluation_item_id" => 1, "content_settings"=> null, "placeholder"=> null, "hint"=> null],   //3 

            ["task" => $task3,  "type" => "Textarea", "order_number" => 1, "evaluation_item_id" => 2, "content_settings"=> ['nr_rand'=> 2], "placeholder"=> null, "hint"=> $hint4],  //4

            ["task" => $task31,  "type" => "Textarea", "order_number" => 2, "evaluation_item_id" => 2, "content_settings"=> ['nr_rand'=> 2], "placeholder"=> null, "hint"=> $hint5],  //5

             ["task" => $task32,  "type" => "Textarea", "order_number" => 3, "evaluation_item_id" => 2, "content_settings"=> ['nr_rand'=> 2], "placeholder"=> null, "hint"=> $hint6],  //6

            ["task" => $task4,  "type" => "Input",    "order_number" => 1, "evaluation_item_id" => 3, "content_settings"=>null,"placeholder"=> "scrie tipul uman aici…", "hint"=> null],  //7

            ["task" => $task5,  "type" => "Textarea", "order_number" => 2, "evaluation_item_id" => 3, "content_settings"=> ['nr_rand'=> 4], "placeholder"=> null, "hint"=> $hint8],  //8

            ["task" => $task51,    "type" => "Textarea", "order_number" => 3, "evaluation_item_id" => 3, "content_settings"=> ['nr_rand'=> 3], "placeholder"=> null, "hint"=> null],  //9

            ["task" => $task6,  "type" => "Input",    "order_number" => 1, "evaluation_item_id" => 4, "content_settings"=> null,"placeholder"=> "scrie figura de stil aici…", "hint"=> $hint10], //10

            ["task" => $task7,  "type" => "Textarea", "order_number" => 2, "evaluation_item_id" => 4, "content_settings"=> ['nr_rand'=>$nr_rand7], "placeholder"=> null, "hint"=> $hint11], //11

            ["task" =>  $task8,    "type" => "Textarea", "order_number" => 1, "evaluation_item_id" => 5, "content_settings"=> ['nr_rand'=> 4], "placeholder"=> null, "hint"=> $hint12], //12

            ["task" =>  $task9,    "type" => "Textarea", "order_number" => 2, "evaluation_item_id" => 5, "content_settings"=> ['nr_rand'=> 4], "placeholder"=> null, "hint"=> null], //13

            ["task" => null,    "type" => "Virtual", "order_number" => 3, "evaluation_item_id" => 5, "content_settings"=> null, "placeholder"=> null, "hint"=> $hint14], //14

            ["task" => null,    "type" => "Textarea", "order_number" => 1, "evaluation_item_id" => 6, "content_settings"=> ['nr_rand'=> 14], "placeholder"=> null, "hint"=> null], //15

            ["task" => null,    "type" => "Virtual", "order_number" => 2, "evaluation_item_id" => 6, "content_settings"=> null, "placeholder"=> null, "hint"=> null], //16

             ["task" => null,    "type" => "Virtual", "order_number" => 3, "evaluation_item_id" => 6, "content_settings"=> null, "placeholder"=> null, "hint"=> null], //17

             ["task" => null,    "type" => "Virtual", "order_number" => 4, "evaluation_item_id" => 6, "content_settings"=> null, "placeholder"=> null, "hint"=> null], //18

            ["task" => null,    "type" => "Textarea", "order_number" => 1, "evaluation_item_id" => 7, "content_settings"=> ['nr_rand'=>6],"placeholder"=> null, "hint"=> $hint19], //19

            ["task" => null,    "type" => "Virtual", "order_number" => 2, "evaluation_item_id" => 7, "content_settings"=> null,"placeholder"=> null, "hint"=> null], //20

            ["task" => null,    "type" => "Virtual", "order_number" => 3, "evaluation_item_id" => 7, "content_settings"=> null,"placeholder"=> null, "hint"=> null], //21

            ["task" => null,    "type" => "Virtual", "order_number" => 4, "evaluation_item_id" => 7, "content_settings"=> null,"placeholder"=> null, "hint"=> null], //22

            ["task" => null,    "type" => "Textarea", "order_number" => 1, "evaluation_item_id" => 8, "content_settings"=> ['nr_rand'=>$nr_rand11],"placeholder"=> null, "hint"=> $hint23], //23

            ["task" => null,    "type" => "Virtual", "order_number" => 1, "evaluation_item_id" => 8, "content_settings"=> ['nr_rand'=>$nr_rand11],"placeholder"=> null, "hint"=> null], //24

            ["task" => $task12, "type" => "Textarea", "order_number" => 1, "evaluation_item_id" => 9, "content_settings"=> ['nr_rand'=> 7],"placeholder"=> null, "hint"=> $hint25], //25

            ["task" => $task13, "type" => "Textarea", "order_number" => 2, "evaluation_item_id" => 9, "content_settings"=> ['nr_rand'=> 7],"placeholder"=> null, "hint"=> null], //26
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
