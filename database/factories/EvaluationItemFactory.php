<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EvaluationItem>
 */
class EvaluationItemFactory extends Factory
{
    protected static int $i = 0;
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

        $source3 = <<<'HTML'
  <p style= "text-indent: 2em">
    Primii ani de după război au fost grei... Îmi petreceam timpul liber
    citind, iar interesul pentru astronomie, fizică și
    matematică deviase într-o obsesie cronică, așa încât pot zice că
    mi-am trăit adolescența într-o lume de cifre, legi și formule. Am
    continuat să învăț la un liceu german, chiar dacă însușisem româna
    într-atât de temeinic, încât doar cei cu urechea prea fină își
    dădeau seama că nu sunt român. Eram de departe cel mai bun elev
    din clasă la toate limbile, însă patima mea erau științele reale.
    Visam să devin un mare matematician, dar tata, căruia îi mai ofeream
    uneori niște crâmpeie din visurile mele, se uita la mine cu milă.
  </p>
  <p>  [...] </p>
  <p style = "text-indent: 2em">
    Am ieșit din Institutul de matematică cu o inimă care pulsa ca un
    vulcan. Acum pășeam cu încredere pe străzile renumitei urbe
    universitare, citind la fiecare colț plăcuțele comemorative cu nume
    de somități care activaseră ori studiaseră aici cândva. „Va veni
    numaidecât o zi când pe una dintre aceste case va fi și o tăbliță cu
    numele meu!” Eram optimist.
  </p>
HTML;


        $task4 = <<<'HTML'
<p style="line-height:1.6">
  Comentează, în text coerent de 6–7 rânduri, sugestia unei figuri de stil
  din fragmentul subliniat. (Rescrie și numește figura de stil.)
</p>
HTML;

        $source4 = <<<'HTML'
  <p style= "text-indent: 2em">
    Primii ani de după război au fost grei... Îmi petreceam timpul liber
    citind, iar interesul pentru astronomie, fizică și
    matematică deviase într-o obsesie cronică, așa încât pot zice că
    mi-am trăit adolescența într-o lume de cifre, legi și formule. Am
    continuat să învăț la un liceu german, chiar dacă însușisem româna
    într-atât de temeinic, încât doar cei cu urechea prea fină își
    dădeau seama că nu sunt român. Eram de departe cel mai bun elev
    din clasă la toate limbile, însă patima mea erau științele reale.
  </p>
HTML;

        $task5 = <<<'HTML'
<p style="line-height:1.6">
  Schițează, în text coerent de 7–8 rânduri, portretul moral al <b>tatălui</b>,
  numind două trăsături, susținute cu exemple din fragmentul analizat.
</p>
HTML;

        $source5 = <<<'HTML'
  <p style= "text-indent: 2em">
    Visam să devin un mare matematician, dar tata, căruia îi mai ofeream
    uneori niște crâmpeie din visurile mele, se uita la mine cu milă.
  </p>
  <p style = "text-indent: 2em">
    – Ai să mori de foame cu linii și cifre, băiatule. Gândește-te și tu
    la o  școală ceva mai ca lumea și nici n-are rost să te duci
    pentru învățătură tocmai la capătul pământului. O să-ți spun un
    lucru: contează cine învață, nu unde. E foarte bună și universitatea
    noastră. Rămâi acasă, lângă noi, nu duci lipsă de nimic.
  </p>

  <p style = "text-indent: 2em">Apoi adăugă cu oarecare îndoială:</p>
  <p style = "text-indent: 2em">
    – Între timp te mai deprinzi și cu gospodăria. Eu, mâine-poimâine,
    ies din luptă. Se cuvine să moștenești tu afacerile. Până faci
    facultatea, găsești și-o fată bună... Trebuie și asta.
  </p>

  <p style = "text-indent: 2em">
    Era măcinat de niște simțăminte amestecate: pe de o parte, voia
    să-mi fie bine, să fiu îndestulat, iar pe de alta, se despărțea
    întotdeauna cu durere de roadele muncii lui. Pe noi ne asigura cu
    tot de ce era nevoie, dar cu măsură, fără excese. „Nimic nu corupe
    mai tare un suflet fraged decât banii”, îi plăcea să ne zică. […]
  </p>
  HTML;


        $task6 = <<<'HTML'
<p style="line-height:1.6">
  Analizează motivul literar al <b>pasiunii pentru cunoaștere</b> în textul dat,
  în raport cu același motiv dintr-un alt text din literatura română
  (numește textul și autorul; citează/prezintă o situație din textul ales).
</p>
HTML;

        $source6 = <<<'HTML'
  <p style= "text-indent: 2em">
    Primii ani de după război au fost grei... Îmi petreceam timpul
      liber citind, iar interesul pentru astronomie, fizică și
      matematică deviase într-o obsesie cronică, așa încât pot zice că
      mi-am trăit adolescența într-o lume de cifre, legi și formule. Am
      continuat să învăț la un liceu german, chiar dacă însușisem româna
      într-atât de temeinic, încât doar cei cu urechea prea fină își
      dădeau seama că nu sunt român. Eram de departe cel mai bun elev
      din clasă la toate limbile, însă patima mea erau științele reale.
    Visam să devin un mare matematician, dar tata, căruia îi mai ofeream
    uneori niște crâmpeie din visurile mele, se uita la mine cu milă.
  </p>

  <p> [...] </p>

  <p style = "text-indent: 2em">
    Pentru un viitor matematician, întâlnirea cu Hilbert era ceea ce
    pentru un pianist începător ar fi fost un contact direct cu
    Beethoven: era întâlnirea cu „instanța supremă”. Când am ajuns în
    fața ușii, pe care era gravat, pe o placă de bronz, numele
    ilustrului matematician, inima mi se zbătea ca peștele în năvod.
    Amețisem de emoții când am deschis ușa, avansând în acel birou
    sobru, imens, cu tavan înalt. Aveam în față o zeitate academică
    dezarmant de umană. Mi-a dat mai multe sfaturi practice și nume de
    persoane care-mi puteau fi de folos, după care am convenit să ne
    vedem peste câteva zile pentru o discuție mai consistentă.
  </p>

  <p style = "text-indent: 2em">
    Am ieșit din Institutul de matematică cu o inimă care pulsa ca un
    vulcan. Acum pășeam cu încredere pe străzile renumitei urbe
    universitare, citind la fiecare colț plăcuțele comemorative cu nume
    de somități care activaseră ori studiaseră aici cândva. „Va veni
    numaidecât o zi când pe una dintre aceste case va fi și o tăbliță cu
    numele meu!” Eram optimist.
  </p>
HTML;


        $task7 = <<<'HTML'
<p style="line-height:1.6">
  Determină, în text coerent de 5–6 rânduri, atitudinea personajului-narator
  față de profesorul Hilbert, angajând două citate din fragmentul propus.
</p>
HTML;

        $source7 = <<<'HTML'
  <p style = "text-indent: 2em">
    Pentru un viitor matematician, întâlnirea cu Hilbert era ceea ce
    pentru un pianist începător ar fi fost un contact direct cu
    Beethoven: era întâlnirea cu „instanța supremă”. Când am ajuns în
    fața ușii, pe care era gravat, pe o placă de bronz, numele
    ilustrului matematician, inima mi se zbătea ca peștele în năvod.
  </p>

  <p style = "text-indent: 2em">
    Amețisem de emoții când am deschis ușa, avansând în acel birou
    sobru, imens, cu tavan înalt. Aveam în față o zeitate academică
    dezarmant de umană. Mi-a dat mai multe sfaturi practice și nume de
    persoane care-mi puteau fi de folos, după care am convenit să ne
    vedem peste câteva zile pentru o discuție mai consistentă.
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

        $source9 = <<<'HTML'
  <p style= "text-indent: 2em">
    Visam să devin un mare matematician, dar tata, căruia îi mai ofeream
    uneori niște crâmpeie din visurile mele, se uita la mine cu milă.
  </p>
  <p style = "text-indent: 2em">
    – Ai să mori de foame cu linii și cifre, băiatule. Gândește-te și tu
    la o școală ceva mai ca lumea și nici n-are rost să te duci
    pentru învățătură tocmai la capătul pământului. O să-ți spun un
    lucru: contează cine învață, nu unde. E foarte bună și universitatea
    noastră. Rămâi acasă, lângă noi, nu duci lipsă de nimic.
  </p>

  <p style = "text-indent: 2em">Apoi adăugă cu oarecare îndoială:</p>
  <p style = "text-indent: 2em">
    – Între timp te mai deprinzi și cu gospodăria. Eu, mâine-poimâine,
    ies din luptă. Se cuvine să moștenești tu afacerile. Până faci
    facultatea, găsești și-o fată bună... Trebuie și asta.
  </p>

  <p style = "text-indent: 2em">
    Era măcinat de niște simțăminte amestecate: pe de o parte, voia
    să-mi fie bine, să fiu îndestulat, iar pe de alta, se despărțea
    întotdeauna cu durere de roadele muncii lui. Pe noi ne asigura cu
    tot de ce era nevoie, dar cu măsură, fără excese. „Nimic nu corupe
    mai tare un suflet fraged decât banii”, îi plăcea să ne zică. [...]
  </p>

  <p style = "text-indent: 2em">
    Ajuns la Viena, i-am trimis o telegramă profesorului Hilbert, la
    Göttingen, pentru a mă asigura că-mi poate fixa o întrevedere. Mi-a
    răspuns două zile mai târziu, confirmându-mi faptul că mă așteaptă.
  </p>
HTML;

        $task10 = <<<'HTML'
<p style="line-height:1.6">
  INVITAȚIE
</p>
HTML;

        $ev_items = [
            ["order_number" => 1,  "evaluation_source_id" => 1,  "task" => $task1, "short_source_content"  => null, "subtopic_id" => 3],//1
            ["order_number" => 2,  "evaluation_source_id" => 1,  "task" => $task2, "short_source_content"  => null, "subtopic_id" => 1],//2
            ["order_number" => 3,  "evaluation_source_id" => 1,  "task" => $task3, "short_source_content"  => $source3,  "subtopic_id" => 7],//3
            ["order_number" => 4,  "evaluation_source_id" => 1,  "task" => $task4, "short_source_content"  => $source4, "subtopic_id" => 8],//4
            ["order_number" => 5,  "evaluation_source_id" => 1,  "task" => $task5, "short_source_content"  => $source5, "subtopic_id" => 9],//5
            ["order_number" => 6,  "evaluation_source_id" => 1,  "task" => $task6, "short_source_content"  => $source6, "subtopic_id" => 10],//6
            ["order_number" => 7,  "evaluation_source_id" => 1,  "task" => $task7, "short_source_content"  => $source7, "subtopic_id" => 11],//7
            ["order_number" => 8,  "evaluation_source_id" => 1,  "task" => $task8, "short_source_content"  => null, "subtopic_id" => 13],//8
            ["order_number" => 9,  "evaluation_source_id" => 1,  "task" => $task9, "short_source_content"  => $source9, "subtopic_id" => 12],//9
            ["order_number" => 10,  "evaluation_source_id" => 2,  "task" => null, "short_source_content"  => null, "subtopic_id" => 14], //10
            ["order_number" => 11,  "evaluation_source_id" => 3,  "task" => null, "short_source_content"  => null, "subtopic_id" => 15], //11
            ["order_number" => 12,  "evaluation_source_id" => 4,  "task" => null, "short_source_content"  => null, "subtopic_id" => 16], //12    
            ["order_number" => 13,  "evaluation_source_id" => 5,  "task" => null, "short_source_content"  => null, "subtopic_id" => null],//13     
        ];

        $a = $ev_items[ static::$i % count($ev_items) ];
        static::$i++;

        return [
            'task' => [
                'html'   => $a['task'], // șirul HTML
            ],
            'short_source_content' => [
                'html'   => $a['short_source_content'], // șirul HTML
            ],
            'order_number' => $a['order_number'],
            'subtopic_id' => $a['subtopic_id'],
            'evaluation_source_id'=> $a['evaluation_source_id'],
        ];
    }
}
