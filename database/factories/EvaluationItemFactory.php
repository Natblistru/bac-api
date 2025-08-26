<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EvaluationItem>
 */
class EvaluationItemFactory extends Factory
{
    private $index = 0;
    public function definition(): array
    {
        $task1 = <<<'HTML'
<p style="line-height:1.6">
  Rescrie, din lista propusă, un sinonim contextual adecvat pentru
  lexemul <em><b>interes</b> (Îmi petreceam timpul liber citind, iar interesul
  pentru astronomie, fizică și matematică deviase într-o obsesie cronică, ...)</em>,
  argumentându-ți alegerea într-un enunț.
</p>
<p class="indent">
  <em>Preocupare, avantaj, înclinație, grijă, atracție, câștig, curiozitate, beneficiu.</em>
</p>
HTML;

        $task2 = <<<'HTML'
<p style="line-height:1.6">
  Alcătuiește câte un enunț, ilustrând sensuri figurate ale cuvintelor:
  <b>școală, a citi, inimă.</b>
</p>
HTML;

        $task3 = <<<'HTML'
<p style="line-height:1.6">
  Identifică tipul uman reprezentat de personajul-narator, susținându-ți
  afirmația cu două citate din fragment, comentate în câte un enunț.
</p>
HTML;

        $task4 = <<<'HTML'
<p style="line-height:1.6">
  Comentează, în text coerent de 6–7 rânduri, sugestia unei figuri de stil
  din fragmentul subliniat. (Rescrie și numește figura de stil.)
</p>
HTML;

        $task5 = <<<'HTML'
<p style="line-height:1.6">
  Schițează, în text coerent de 7–8 rânduri, portretul moral al <b>tatălui</b>,
  numind două trăsături, susținute cu exemple din fragmentul analizat.
</p>
HTML;

        $task6 = <<<'HTML'
<p style="line-height:1.6">
  Analizează motivul literar al <b>pasiunii pentru cunoaștere</b> în textul dat,
  în raport cu același motiv dintr-un alt text din literatura română
  (numește textul și autorul; citează/prezintă o situație din textul ales).
</p>
HTML;

        $task7 = <<<'HTML'
<p style="line-height:1.6">
  Determină, în text coerent de 5–6 rânduri, atitudinea personajului-narator
  față de profesorul Hilbert, angajând două citate din fragmentul propus.
</p>
HTML;

        $task8 = <<<'HTML'
<p style="line-height:1.6">
  Interpretează valoarea stilistică a punctelor de suspensie din secvența:
</p>
<p style="line-height:1.6">
  <em>– Între timp te mai deprinzi și cu gospodăria. Eu, mâine-poimâine, ies din luptă.
  Se cuvine să moștenești tu afacerile. Până faci facultatea, găsești și-o fată bună...
  Trebuie și asta.</em>
</p>
HTML;

        $task9 = <<<'HTML'
<p style="line-height:1.6">
  Prezintă două argumente, ilustrate cu câte o secvență din text,
  care califică fragmentul dat ca pe o narațiune.
</p>
HTML;


        $tasks = [$task1, $task2, $task3, $task4, $task5, $task6, $task7, $task8, $task9];
        $taskContent = $tasks[$this->index];
        $this->index++;

        return [
            'task' => [
                'html'   => $taskContent, // șirul HTML
            ],
            'order_number' => $this->index,
            'topic_id' => 1,
            'evaluation_source_id'=> 1,
        ];
    }
}
