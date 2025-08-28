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

        $content4 = <<<'HTML'
<p>Cursurile lui Hilbert au fost pentru tânăr o școală de rigoare și curaj.</p>
HTML;

        $content5 = <<<'HTML'
<p>Profesorul i-a citit pe chip emoția, înainte ca el să rostească un cuvânt.</p>
HTML;

        $content6 = <<<'HTML'
<p>Plimbându-se prin inima urbei universitare, se simțea la miezul științei.</p>        
HTML;

        $content7 = <<<'HTML'
Tânărul studios
HTML;

        $content8 = <<<'HTML'
<p>„Îmi petreceam timpul liber citind… interesul… deviase într-o obsesie cronică.” — Evidențiază pasiunea constantă pentru științe, definitorie unui tânăr studios.</p>
HTML;

        $content9 = <<<'HTML'
<p>„Va veni numaidecât o zi când… va fi și o tăbliță cu numele meu!” — Arată ambiția și proiectul de carieră, proprii aspirantului intelectual.</p>
HTML;

        $content10 = <<<'HTML'
„inima mi se zbătea ca peștele în năvod” - comparație
HTML;

        $content11 = <<<'HTML'
<p>Figura se construiește astfel: termenul comparat „inima”, asociat verbului „se zbătea”, este pus în relație, prin marcatorul „ca”, cu comparantul „peștele în năvod”. Imaginea sugerează un ritm precipitat, sentimentul de captivitate și pierderea controlului. În context, înaintea întâlnirii cu Hilbert, emoția îl copleșește pe narator. Efectul constă în a-i dezvălui vulnerabilitatea și a sublinia intensitatea aspirației care îl însuflețește.</p>
HTML;

        $content12 = <<<'HTML'
<p>Tatăl apare ca un om <b>grijuliu și responsabil</b>: vrea binele fiului, oferă „tot de ce era nevoie, dar cu măsură” și îl sfătuiește realist: „Rămâi acasă, lângă noi”, „contează cine învață, nu unde”.</p>
HTML;

        $content13 = <<<'HTML'
<p>Totodată, e <b>chibzuit și rațional</b>: privește pragmatic visul de matematician — „Ai să mori de foame cu linii și cifre” — și predică cumpătarea: „Nimic nu corupe mai tare un suflet fraged decât banii”. Dilema lui arată experiență și luciditate.</p>        
HTML;

        $content14 = <<<'HTML'
<p>Coerența textului se datorează unității tematice (portretul moral al tatălui), progresiei logice susținute de citate și folosirii conectorilor (totodată) care marchează trecerea între idei.</p>       
HTML;

        $content15 = <<<'HTML'
<p>În fragment, motivul pasiunii pentru cunoaștere îi definește identitatea naratorului: „interesul… deviase într-o obsesie cronică”, iar întâlnirea cu Hilbert, „instanța supremă”, devine prag inițiatic; imaginile „inima mi se zbătea ca peștele în năvod” și „pulsa ca un vulcan” traduc febra aspirației spre științele reale, iar tensiunea cu tatăl (pragmatismul lui) accentuează vocația cognitivă. </p>
HTML;

        $content16 = <<<'HTML'
<p>Enigma Otiliei de George Călinescu</p>
HTML;

        $content17 = <<<'HTML'
<p>În paralel, în romanul „Enigma Otiliei” de George Călinescu, motivul pasiunii pentru cunoaștere se conturează în figura lui Felix Sima, pentru care studiul medicinei devine calea afirmării personale.</p>
HTML;

        $content18 = <<<'HTML'
<p>Pregătirea intensă pentru examene, reușita strălucită și debutul carierei medicale arată că tocmai cunoașterea îi ordonează viața și îi structurează destinul.</p>
HTML;

        $content19 = <<<'HTML'
<p>Atitudinea naratorului față de Hilbert este de venerație.</p>
HTML;

        $content20 = <<<'HTML'
<p>Îl numește „instanța supremă”, semn al recunoașterii autorității absolute.</p>
HTML;

        $content21 = <<<'HTML'
<p>Îl vede „o zeitate academică dezarmant de umană”, hiperbolă ce exprimă admirația emoționată și respectul profund.</p>
HTML;

        $content22 = <<<'HTML'
<p>Coerența textului rezultă din succesiunea logică a ideilor și din unitatea tematică (venerația față de Hilbert).</p>
HTML;

        $content23 = <<<'HTML'
<p>Gramatical, punctele de suspensie marchează întreruperea voită a vorbirii și o pauză retorică, indicând omisiunea unui segment al enunțului.</p>
HTML;

        $content24 = <<<'HTML'
<p>Stilistic, în replica tatălui, ele redau ezitarea și cumpănirea cu care formulează așteptările („găsești și-o fată bună...”), atenuând tonul imperativ și lăsând să se subînțeleagă presiunea tradiției, alături de grijă și prudență.</p>
HTML;

        $content25 = <<<'HTML'
<p>Fragmentul se califică drept narațiune deoarece are un narator-personaj și pune în scenă relații între personaje: relatarea la persoana I („Îmi petreceam timpul liber citind…”) implică dialogul cu tata și întâlnirea cu Hilbert („i-am trimis o telegramă profesorului Hilbert”).</p>
HTML;

        $content26 = <<<'HTML'
<p>Textul urmărește un fir narativ clar, cu succesiune de evenimente și coordonate spațio-temporale: „Ajuns la Viena, i-am trimis o telegramă… Mi-a răspuns două zile mai târziu… am convenit să ne vedem peste câteva zile… Am ieșit din Institutul de matematică…”. Aceste indicii confirmă caracterul narativ al fragmentului.</p>
HTML;


        $answers = [
            ["task" => "Sinonimul acceptabil:",  "content" => $content1,    "max_points" => 1, "evaluation_question_id" => 1], 

            ["task" => "Argumentarea accepatbilă:",  "content" => $content2, "max_points" => 2, "evaluation_question_id" => 2], 
            ["task" => "Referință la text:",  "content" => $content3, "max_points" => 1, "evaluation_item_id" => 1, "evaluation_question_id" => 3], 

            ["task" => "Enunt 1 (școala)",  "content" => $content4,    "max_points" => 2, "evaluation_question_id" => 4], 

            ["task" => "Enunt 2 (a citi)",  "content" => $content5,    "max_points" => 2, "evaluation_question_id" => 5], 

            ["task" => "Enunt 3 (inimă)",  "content" => $content6,    "max_points" => 2, "evaluation_question_id" => 6], 

            ["task" => "Tipul uman:",  "content" => $content7,    "max_points" => 1, "evaluation_question_id" => 7], 

            ["task" => "Citat 1 cu comentarii:",  "content" => $content8,    "max_points" => 2, "evaluation_question_id" => 8],

            ["task" => "Citat 2 cu comentarii:",  "content" => $content9,    "max_points" => 2, "evaluation_question_id" => 9],

            ["task" => "Figura de stil:",  "content" => $content10,    "max_points" => 2, "evaluation_question_id" => 10],

            ["task" => "Comentariu:",  "content" => $content11,    "max_points" => 3, "evaluation_question_id" => 11],

            ["task" => "Trăsătura 1:",  "content" => $content12,    "max_points" => 2, "evaluation_question_id" => 12],

            ["task" => "Trăsătura 2:",    "content" => $content13,    "max_points" => 2, "evaluation_question_id" => 13], 

            ["task" => "Coerența textului",    "content" => $content14,    "max_points" => 1, "evaluation_question_id" => 14], 

            ["task" => "Semnificația motivului",    "content" => $content15,    "max_points" => 2, "evaluation_question_id" => 15], 

            ["task" => "Referire la alt text",    "content" =>$content16,    "max_points" => 1, "evaluation_question_id" => 16], 

            ["task" => "Semnificația motivului din alt text",    "content" => $content17,    "max_points" => 2, "evaluation_question_id" => 17], 

            ["task" => "Prezentarea situației din alt text",   "content" => $content18,    "max_points" => 1, "evaluation_question_id" => 18], 

            ["task" => "Determinarea atitudinii",   "content" => $content19,    "max_points" => 1, "evaluation_question_id" => 19],  

            ["task" => "Citat 1 cu comentarii",    "content" => $content20,    "max_points" => 2, "evaluation_question_id" => 20],  

            ["task" => "Citat 2 cu comentarii",    "content" => $content21,    "max_points" => 2, "evaluation_question_id" => 21],  

            ["task" => "Coerența textului",    "content" => $content22,    "max_points" => 1, "evaluation_question_id" => 22],  

            ["task" => "Interpretarea valorii stilistice",    "content" => $content23,    "max_points" => 1, "evaluation_question_id" => 23],  

            ["task" => "Explicarea valenței stilistice",    "content" => $content24,    "max_points" => 2, "evaluation_question_id" => 24],  

            ["task" => "Argumentul 1 cu exemple din text",    "content" => $content25,    "max_points" => 2, "evaluation_question_id" => 25],  

            ["task" => "Argumentul 2 cu exemple dint text",    "content" => $content26,    "max_points" => 2, "evaluation_question_id" => 26],
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
