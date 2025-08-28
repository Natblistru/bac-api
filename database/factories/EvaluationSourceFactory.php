<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EvaluationSource>
 */
class EvaluationSourceFactory extends Factory
{
    public function definition(): array
    {
        $html = <<<'HTML'
          <h2>Citește textul propus și realizează itemii:</h2>
          <p style= "text-indent: 2em">
            <u>Primii ani de după război au fost grei... Îmi petreceam timpul
              liber
              <b> citind</b>, iar interesul pentru astronomie, fizică și
              matematică deviase într-o obsesie cronică, așa încât pot zice că
              mi-am trăit adolescența într-o lume de cifre, legi și formule. Am
              continuat să învăț la un liceu german, chiar dacă însușisem româna
              într-atât de temeinic, încât doar cei cu urechea prea fină își
              dădeau seama că nu sunt român. Eram de departe cel mai bun elev
              din clasă la toate limbile, însă patima mea erau științele reale.
            </u>
            Visam să devin un mare matematician, dar tata, căruia îi mai ofeream
            uneori niște crâmpeie din visurile mele, se uita la mine cu milă.
          </p>

          <p style = "text-indent: 2em">
            – Ai să mori de foame cu linii și cifre, băiatule. Gândește-te și tu
            la o<b> școală</b> ceva mai ca lumea și nici n-are rost să te duci
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

          <p style = "text-indent: 2em">
            Ajuns la Viena, i-am trimis o telegramă profesorului Hilbert, la
            Göttingen, pentru a mă asigura că-mi poate fixa o întrevedere. Mi-a
            răspuns două zile mai târziu, confirmându-mi faptul că mă așteaptă.
            […]
          </p>

          <p style = "text-indent: 2em">
            Pentru un viitor matematician, întâlnirea cu Hilbert era ceea ce
            pentru un pianist începător ar fi fost un contact direct cu
            Beethoven: era întâlnirea cu „instanța supremă”. Când am ajuns în
            fața ușii, pe care era gravat, pe o placă de bronz, numele
            ilustrului matematician,
            <b> inima</b> mi se zbătea ca peștele în năvod.
          </p>

          <p style = "text-indent: 2em">
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

          <p style = "text-align: right;font-weight: 800; margin-top: 1.2em;">
            (Oleg Serebrian. <em>Pe contrasens</em>)
          </p>
        HTML;

        return [
            'order_number'  => 1,
            'evaluation_id' => 1,
            'content'       => [
                'html'   => $html, 
            ],
        ];
    }
}
