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


        $task14 = <<<'HTML'
<p style="text-align:center;">INVITAȚIE</p>
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

$hint26 = <<<'HTML'
Indică formula de adresare
HTML;

$hint27 = <<<'HTML'
Nominalizează organizatorii
HTML;

$hint28 = <<<'HTML'
Denumește evenimentul și menționează genericul
HTML;

$hint29 = <<<'HTML'
Precizează scopul activității
HTML;

$hint30 = <<<'HTML'
Specifică data și ora desfășurării
HTML;

$hint31 = <<<'HTML'
Indică locul desfășurării
HTML;

$hint32 = <<<'HTML'
Respectă marginea și alineatele
HTML;

$hint33 = <<<'HTML'
Adaugă semnătura
HTML;

$hint34 = <<<'HTML'
Formulează clar punctul tău de vedere
HTML;

$hint35 = <<<'HTML'
Argumentează plauzibil punctul tău de vedere (motive logice și realiste)
HTML;

$hint36 = <<<'HTML'
Oferă un exemplu concret din experiența ta
HTML;

$hint37 = <<<'HTML'
Păstrează coerența textului (ordine logică, conectori)
HTML;

$hint38 = <<<'HTML'
Exprimă clar opinia
HTML;

$hint39 = <<<'HTML'
Formulează teza 1
HTML;

$hint40 = <<<'HTML'
Formulează teza 2
HTML;

$hint41 = <<<'HTML'
Formulează un argument pentru teza 1
HTML;

$hint42 = <<<'HTML'
Formulează un argument pentru teza 2
HTML;

$hint43 = <<<'HTML'
Menționează un text din literatura română care să confirme teza 1
HTML;

$hint44 = <<<'HTML'
Menționează un text din literatura română care să confirme teza 2
HTML;

$hint45 = <<<'HTML'
Respectă structura argumentativă a eseului.
HTML;

$hint46 = <<<'HTML'
Utilizează conectori specifici/logici
HTML;

$hint47 = <<<'HTML'
Asigură un aspect grafic îngrijit și lizibil (scriere clară, margini și spațiere corecte)
HTML;  

$hint48 = <<<'HTML'
Respectă limita de întindere
HTML; 

$hint49 = <<<'HTML'
Expune ideile clar și în ordine logică
HTML;                   

$hint50 = <<<'HTML'
Respectă limita de întindere
HTML;   

$hint51 = <<<'HTML'
Identifică aspectele definitorii ale sarcinilor de realizat.
HTML;

$hint52 = <<<'HTML'
Utilizează date, informaţii, fapte elocvente
HTML; 

$hint53 = <<<'HTML'
Interpretează critic informația, formulează constatări și ilustrează fenomenele literare relevante
HTML;

$hint54 = <<<'HTML'
Respectă normele stilistice ale limbii române.
a limbii.
HTML; 

$hint55 = <<<'HTML'
Respectă normele ortografice şi gramaticale
HTML;

$hint56 = <<<'HTML'
Respectă normele de punctuaţie
HTML;


        $nr_rand13 = 7;

        $questions = [
/*1*/            ["task" => $task1,  "type" => "Input",    "order_number" => 1, "evaluation_item_id" => 1, "content_settings"=> null,"placeholder"=> "scrie sinonimul aici…", "hint"=> null],  // 1

/*2*/            ["task" => $task2,  "type" => "Textarea", "order_number" => 2, "evaluation_item_id" => 1, "content_settings"=> ['nr_rand'=>$nr_rand2], "placeholder"=> null, "hint"=> $hint2],  //2

/*3*/            ["task" => null,  "type" => "Virtual", "order_number" => 3, "evaluation_item_id" => 1, "content_settings"=> null, "placeholder"=> null, "hint"=> null],   //3 

/*4*/            ["task" => $task3,  "type" => "Textarea", "order_number" => 1, "evaluation_item_id" => 2, "content_settings"=> ['nr_rand'=> 2], "placeholder"=> null, "hint"=> $hint4],  //4

/*5*/            ["task" => $task31,  "type" => "Textarea", "order_number" => 2, "evaluation_item_id" => 2, "content_settings"=> ['nr_rand'=> 2], "placeholder"=> null, "hint"=> $hint5],  //5

/*6*/             ["task" => $task32,  "type" => "Textarea", "order_number" => 3, "evaluation_item_id" => 2, "content_settings"=> ['nr_rand'=> 2], "placeholder"=> null, "hint"=> $hint6],  //6

/*7*/            ["task" => $task4,  "type" => "Input",    "order_number" => 1, "evaluation_item_id" => 3, "content_settings"=>null,"placeholder"=> "scrie tipul uman aici…", "hint"=> null],  //7

/*8*/            ["task" => $task5,  "type" => "Textarea", "order_number" => 2, "evaluation_item_id" => 3, "content_settings"=> ['nr_rand'=> 4], "placeholder"=> null, "hint"=> $hint8],  //8

/*9*/            ["task" => $task51,    "type" => "Textarea", "order_number" => 3, "evaluation_item_id" => 3, "content_settings"=> ['nr_rand'=> 3], "placeholder"=> null, "hint"=> null],  //9

/*10*/            ["task" => $task6,  "type" => "Input",    "order_number" => 1, "evaluation_item_id" => 4, "content_settings"=> null,"placeholder"=> "scrie figura de stil aici…", "hint"=> $hint10], //10

/*11*/            ["task" => $task7,  "type" => "Textarea", "order_number" => 2, "evaluation_item_id" => 4, "content_settings"=> ['nr_rand'=>$nr_rand7], "placeholder"=> null, "hint"=> $hint11], //11

/*12*/            ["task" =>  $task8,    "type" => "Textarea", "order_number" => 1, "evaluation_item_id" => 5, "content_settings"=> ['nr_rand'=> 4], "placeholder"=> null, "hint"=> $hint12], //12

/*13*/            ["task" =>  $task9,    "type" => "Textarea", "order_number" => 2, "evaluation_item_id" => 5, "content_settings"=> ['nr_rand'=> 4], "placeholder"=> null, "hint"=> null], //13

/*14*/            ["task" => null,    "type" => "Virtual", "order_number" => 3, "evaluation_item_id" => 5, "content_settings"=> null, "placeholder"=> null, "hint"=> $hint14], //14

/*15*/            ["task" => null,    "type" => "Textarea", "order_number" => 1, "evaluation_item_id" => 6, "content_settings"=> ['nr_rand'=> 14], "placeholder"=> null, "hint"=> null], //15

/*16*/            ["task" => null,    "type" => "Virtual", "order_number" => 2, "evaluation_item_id" => 6, "content_settings"=> null, "placeholder"=> null, "hint"=> null], //16

/*17*/             ["task" => null,    "type" => "Virtual", "order_number" => 3, "evaluation_item_id" => 6, "content_settings"=> null, "placeholder"=> null, "hint"=> null], //17

/*18*/             ["task" => null,    "type" => "Virtual", "order_number" => 4, "evaluation_item_id" => 6, "content_settings"=> null, "placeholder"=> null, "hint"=> null], //18

/*19*/            ["task" => null,    "type" => "Textarea", "order_number" => 1, "evaluation_item_id" => 7, "content_settings"=> ['nr_rand'=>6],"placeholder"=> null, "hint"=> $hint19], //19

/*20*/            ["task" => null,    "type" => "Virtual", "order_number" => 2, "evaluation_item_id" => 7, "content_settings"=> null,"placeholder"=> null, "hint"=> null], //20

/*21*/            ["task" => null,    "type" => "Virtual", "order_number" => 3, "evaluation_item_id" => 7, "content_settings"=> null,"placeholder"=> null, "hint"=> null], //21

/*22*/            ["task" => null,    "type" => "Virtual", "order_number" => 4, "evaluation_item_id" => 7, "content_settings"=> null,"placeholder"=> null, "hint"=> null], //22

/*23*/            ["task" => null,    "type" => "Textarea", "order_number" => 1, "evaluation_item_id" => 8, "content_settings"=> ['nr_rand'=>$nr_rand11],"placeholder"=> null, "hint"=> $hint23], //23

/*24*/            ["task" => null,    "type" => "Virtual", "order_number" => 1, "evaluation_item_id" => 8, "content_settings"=> ['nr_rand'=>$nr_rand11],"placeholder"=> null, "hint"=> null], //24

/*25*/            ["task" => $task12, "type" => "Textarea", "order_number" => 1, "evaluation_item_id" => 9, "content_settings"=> ['nr_rand'=> 7],"placeholder"=> null, "hint"=> $hint25], //25

/*26*/            ["task" => $task13, "type" => "Textarea", "order_number" => 2, "evaluation_item_id" => 9, "content_settings"=> ['nr_rand'=> 7],"placeholder"=> null, "hint"=> null], //26
        
/*27*/            ["task" => $task14, "type" => "Textarea", "order_number" => 1, "evaluation_item_id" => 10, "content_settings"=> ['nr_rand'=> 25],"placeholder"=> null, "hint"=> null], //27

/*28*/           ["task" => null, "type" => "Virtual", "order_number" => 2, "evaluation_item_id" => 10, "content_settings"=> null, "placeholder"=> null, "hint"=> $hint26], //28

/*29*/            ["task" => null, "type" => "Virtual", "order_number" => 3, "evaluation_item_id" => 10, "content_settings"=> null, "placeholder"=> null, "hint"=> $hint27], //29

/*30*/            ["task" => null, "type" => "Virtual", "order_number" => 4, "evaluation_item_id" => 10, "content_settings"=> null, "placeholder"=> null, "hint"=> $hint28], //30

/*31*/            ["task" => null, "type" => "Virtual", "order_number" => 5, "evaluation_item_id" => 10, "content_settings"=> null, "placeholder"=> null, "hint"=> $hint29], //31

/*32*/            ["task" => null, "type" => "Virtual", "order_number" => 6, "evaluation_item_id" => 10, "content_settings"=> null, "placeholder"=> null, "hint"=> $hint30], //32

/*33*/            ["task" => null, "type" => "Virtual", "order_number" => 7, "evaluation_item_id" => 10, "content_settings"=> null, "placeholder"=> null, "hint"=> $hint31], //33

/*34*/            ["task" => null, "type" => "Virtual", "order_number" => 8, "evaluation_item_id" => 10, "content_settings"=> null, "placeholder"=> null, "hint"=> $hint32], //34
  
/*35*/            ["task" => null, "type" => "Virtual", "order_number" => 9, "evaluation_item_id" => 10, "content_settings"=> null, "placeholder"=> null, "hint"=> $hint33], //35
 
/*36*/            ["task" => null, "type" => "Textarea", "order_number" => 1, "evaluation_item_id" => 11, "content_settings"=> ['nr_rand'=> 8],"placeholder"=> null, "hint"=> null], //36

/*37*/            ["task" => null, "type" => "Virtual", "order_number" => 2, "evaluation_item_id" => 11, "content_settings"=> null,"placeholder"=> null, "hint"=> $hint34], //37

/*38*/            ["task" => null, "type" => "Virtual", "order_number" => 3, "evaluation_item_id" => 11, "content_settings"=> null,"placeholder"=> null, "hint"=> $hint35], //38

/*39*/            ["task" => null, "type" => "Virtual", "order_number" => 4, "evaluation_item_id" => 11, "content_settings"=> null,"placeholder"=> null, "hint"=> $hint36], //39

/*40*/            ["task" => null, "type" => "Virtual", "order_number" => 5, "evaluation_item_id" => 11, "content_settings"=> null,"placeholder"=> null, "hint"=> $hint37], //40

/*41*/            ["task" => null, "type" => "Textarea", "order_number" => 1, "evaluation_item_id" => 12, "content_settings"=> ['nr_rand'=>57],"placeholder"=> null, "hint"=> null], //41

/*42*/            ["task" => null, "type" => "Virtual", "order_number" => 2, "evaluation_item_id" => 12, "content_settings"=> null,"placeholder"=> null, "hint"=> $hint38], //42

/*43*/            ["task" => null, "type" => "Virtual", "order_number" => 3, "evaluation_item_id" => 12, "content_settings"=> null,"placeholder"=> null, "hint"=> $hint39], //43

/*44*/            ["task" => null, "type" => "Virtual", "order_number" => 4, "evaluation_item_id" => 12, "content_settings"=> null,"placeholder"=> null, "hint"=> $hint40], //44

/*45*/            ["task" => null, "type" => "Virtual", "order_number" => 5, "evaluation_item_id" => 12, "content_settings"=> null,"placeholder"=> null, "hint"=> $hint41], //45

/*46*/            ["task" => null, "type" => "Virtual", "order_number" => 6, "evaluation_item_id" => 12, "content_settings"=> null,"placeholder"=> null, "hint"=> $hint42], //46

/*47*/            ["task" => null, "type" => "Virtual", "order_number" => 7, "evaluation_item_id" => 12, "content_settings"=> null,"placeholder"=> null, "hint"=> $hint43], //47

/*48*/            ["task" => null, "type" => "Virtual", "order_number" => 8, "evaluation_item_id" => 12, "content_settings"=> null,"placeholder"=> null, "hint"=> $hint44], //48

/*49*/            ["task" => null, "type" => "Virtual", "order_number" => 9, "evaluation_item_id" => 12, "content_settings"=> null,"placeholder"=> null, "hint"=> $hint45], //49                                        

/*50*/            ["task" => null, "type" => "Virtual", "order_number" => 10, "evaluation_item_id" => 12, "content_settings"=> null,"placeholder"=> null, "hint"=> $hint46], //50

/*51*/            ["task" => null, "type" => "Virtual", "order_number" => 11, "evaluation_item_id" => 12, "content_settings"=> null,"placeholder"=> null, "hint"=> $hint47], //51

/*52*/            ["task" => null, "type" => "Virtual", "order_number" => 12, "evaluation_item_id" => 12, "content_settings"=> null,"placeholder"=> null, "hint"=> $hint48], //52     

/*53*/            ["task" => null, "type" => "Virtual", "order_number" => 1, "evaluation_item_id" => 13, "content_settings"=> null,"placeholder"=> null, "hint"=> $hint49], //53

/*54*/            ["task" => null, "type" => "Virtual", "order_number" => 2, "evaluation_item_id" => 13, "content_settings"=> null,"placeholder"=> null, "hint"=> $hint50], //54

/*55*/            ["task" => null, "type" => "Virtual", "order_number" => 3, "evaluation_item_id" => 13, "content_settings"=> null,"placeholder"=> null, "hint"=> $hint51], //55                

/*56*/            ["task" => null, "type" => "Virtual", "order_number" => 4, "evaluation_item_id" => 13, "content_settings"=> null,"placeholder"=> null, "hint"=> $hint52], //56

/*57*/            ["task" => null, "type" => "Virtual", "order_number" => 5, "evaluation_item_id" => 13, "content_settings"=> null,"placeholder"=> null, "hint"=> $hint53], //57

/*58*/            ["task" => null, "type" => "Virtual", "order_number" => 6, "evaluation_item_id" => 13, "content_settings"=> null,"placeholder"=> null, "hint"=> $hint54], //58

/*59*/            ["task" => null, "type" => "Virtual", "order_number" => 7, "evaluation_item_id" => 13, "content_settings"=> null,"placeholder"=> null, "hint"=> $hint55], //59

/*60*/            ["task" => null, "type" => "Virtual", "order_number" => 8, "evaluation_item_id" => 13, "content_settings"=> null,"placeholder"=> null, "hint"=> $hint56], //60         

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
