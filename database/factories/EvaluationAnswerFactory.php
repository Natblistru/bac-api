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

        $content27 = <<<'HTML'
<p>Dragi colegi,</p>
<p>
  Clubul „Quo vadis” al Liceului Teoretic „Mihai Eminescu” din Nisporeni vă invită la un atelier de informare cu genericul „Învață în Moldova!”. Evenimentul are ca scop promovarea studiilor universitare din Republica Moldova: admitere, specializări, burse, viață de campus și oportunități pentru absolvenți.
</p>
<p>
  Vă așteptăm pe 19 iunie 2025, la ora 14:00, în incinta liceului. Vino cu întrebări și curiozități – vom discuta exemple concrete și trasee posibile după Bac.
</p>
<p>Cu prietenie,</p>
<p>
  Alexandra Baciu, clasa a XII-a<br>
  Membră, Clubul „Quo vadis”
</p>
HTML;     

        $content28 = <<<'HTML'
<p>Formula de adresare: Dragi colegi,</p>
HTML; 

        $content29 = <<<'HTML'
<p>Nominalizarea organizatorilor: Clubul „Quo vadis” al Liceului Teoretic „Mihai Eminescu” din Nisporeni</p>
HTML;   

        $content30 = <<<'HTML'
<p>Denumirea evenimentului și a genericului: atelier de informare cu genericul „Învață în Moldova!”</p>
HTML;

        $content31 = <<<'HTML'
<p>Scopului activității: promovarea studiilor universitare din Republica Moldova: admitere, specializări, burse, viață de campus și oportunități pentru absolvenți</p>
HTML;

        $content32 = <<<'HTML'
<p>Timpul desfășurării: 19 iunie 2025, la ora 14:00</p>
HTML;

        $content33 = <<<'HTML'
<p>Locul desfășurării: în incinta liceului</p>
HTML;

        $content34 = <<<'HTML'
<p> Respectarea marginii şi alineatelor: textul este structurat în paragrafe, cu aliniate la începutul paragrafelor.</p>
HTML;

        $content35 = <<<'HTML'
<p>Semnătura: Cu prietenie, Alexandra Baciu, clasa a XII-a Membră, Clubul „Quo vadis”</p>
HTML;

        $content36 = <<<'HTML'
<p>Consider că învățarea limbilor străine te ajută decisiv să înțelegi cultura altor țări, fiindcă limba poartă valori, norme și moduri de a vedea lumea. Din experiența mea cu engleza, idiomurile mi-au clarificat umorul și regulile conversației; materialele autentice, sensul sărbătorilor și al referințelor istorice. Interacțiunile cu nativi m-au învățat coduri de politețe. Deși nu e suficientă singură, limba deschide ușa către contexte și întărește dialogul intercultural.</p>
HTML;

        $content37 = <<<'HTML'
<p>Formularea punctului de vedere: învățarea limbilor străine te ajută decisiv să înțelegi cultura altor țări</p>
HTML;

        $content38 = <<<'HTML'
<p>Dovezile din text care fac punctul de vedere plauzibil:
<ul>
  <li>Afirmația de principiu: limba „poartă valori, norme și moduri de a vedea lumea” — argument cauză-efect între limbă și cultură.</li>
  <li>Concesia nuanțată („singură, nu e suficientă, dar deschide ușa…”) crește credibilitatea argumentului.</li>
</ul>
</p>
HTML;

        $content39 = <<<'HTML'
<p>Exemplele din experiența personală:
<ul>
  <li>Engleza: „abia prin expresii și idiomuri am înțeles umorul și regulile conversației informale”; „urmărind materiale autentice, am descifrat sensul sărbătorilor și al referințelor istorice din spațiul anglofon.”</li>
  <li>Interacțiuni cu vorbitori nativi: „mi-au arătat coduri de politețe și așteptări sociale diferite.”</li>
</ul>
</p>
HTML;

        $content40 = <<<'HTML'
<p>Dovezi ale coerenței textului:</p>       
<ul>
  <li>Unitate tematică: toate alineatele tratează aceeași idee – legătura limbă–cultură.</li>
  <li>Progresie logică: teză → exemple personale (idiomuri, materiale autentice, interacțiuni) → concluzie.</li>
  <li>Conectori/coezive: „fiindcă”, „Evident”, „Astfel” marchează cauză, nuanțare și concluzie.</li>
  <li>Perspectivă constantă: persoana I („din experiența mea”, „mi-au arătat”).</li>
  <li>Relații teză–argument: fiecare exemplu explică afirmația inițială.</li>
  <li>Închidere circulară: concluzia reia și sintetizează ideea de pornire.</li>
</ul>  
HTML;

        $content41 = <<<'HTML'
<p>Consider că afirmația lui Oscar Wilde este adevărată: valoarea unui om nu stă în ceea ce posedă, ci în ceea ce devine prin caracter, cultură morală și fapte. Bunurile pot ușura viața, dar nu pot înlocui integritatea, luciditatea și responsabilitatea – criterii după care îi judecăm pe cei din jur și care rămân relevante indiferent de timp.</p>
<p>În primul rând, valoarea autentică se întemeiază pe caracter, nu pe avere. Posesiunea este aleatorie, supusă norocului și conjuncturilor, pe când tăria de caracter se clădește prin alegeri repetate și costisitoare. Un om bogat poate fi în același timp lipsit de onestitate, iar un om fără resurse materiale poate avea autoritate morală și credibilitate. Aici funcționează un raport cauză–efect: caracterul produce încredere, iar încrederea produce valoare socială.</p>
<p>Exemplară este nuvela <em>Moara cu noroc</em> de <em>Ioan Slavici</em>. Ghiță pornește cu intenția de a-și întemeia gospodăria, dar, fascinat de câștigul rapid, face un pact tacit cu Lică Sămădăul. Etapă după etapă, cedează la presiunea banului, devine duplicitar și își risipește libertatea interioară. Situația-cheie este momentul în care preferă tăcerea complice în fața abuzurilor lui Lică: exact clipa în care „are” mai mult, „este” tot mai puțin. Finalul tragic confirmă că acumularea fără criterii morale erodează însăși ființa, deci valoarea.</p>
<p>În al doilea rând, identitatea se confirmă prin grija pentru oameni și asumarea consecințelor acțiunilor. Identitatea nu se reduce la statut, ci se verifică în acțiune: curaj, luciditate, perseverență, compasiune. Aceste calități creează sens și dau măsura unui destin; ele rezistă schimbărilor economice și sociale.</p>
<p>Această idee străbate romanul <em>Baltagul</em> de <em>Mihail Sadoveanu</em>. <strong>Vitoria Lipan</strong> nu are bogății ieșite din comun, dar are o energie morală neobișnuită: își asumă drumul anevoios prin iarnă, reconstituie logic faptele, descoperă ucigașii și împlinește rânduiala. Situația investigației pas cu pas – dialogurile cu oamenii din hanuri, verificarea urmelor, confruntarea finală – arată că demnitatea, credința și dreptatea dau valoare persoanei mai mult decât orice bun material.</p>
<p>Se poate obiecta că bunăstarea e necesară pentru demnitate. Admit: lipsa cronică de resurse poate limita libertatea. Totuși, tocmai în condiții precare devine vizibil ce este omul: dacă rămâne drept când ar fi mai comod să cedeze, dacă împarte când ar putea să strângă doar pentru sine, dacă spune adevărul când tăcerea l-ar avantaja. Posesiunea facilitează, dar nu fundamentează valoarea; fundamentul este etic.</p>
<p>Prin urmare, tezele se susțin reciproc: (1) caracterul, nu averea, asigură valoarea durabilă; (2) valoarea se dovedește în fapte de responsabilitate și adevăr. Literatura noastră, de la <em>Slavici</em> la <em>Sadoveanu</em>, confirmă că ceea ce „ai” poate spori sau diminua confortul, dar ceea ce „ești” hotărăște destinul. Iar în viața de zi cu zi, oamenii pe care îi urmăm sau pe care îi regretăm nu sunt cei mai bogați, ci cei mai demni.</p>
HTML;

        $content42 = <<<'HTML'
<p>Exprimarea clară a opiniei: „Consider că afirmația lui Oscar Wilde este adevărată: valoarea unui om nu stă în ceea ce posedă, ci în ceea ce devine prin caracter, cultură morală și fapte.”</p>
HTML;

        $content43 = <<<'HTML'
<p>Formularea tezei 1: „În primul rând, valoarea autentică se întemeiază pe caracter, nu pe avere.”</p>
HTML;
        $content44 = <<<'HTML'
<p>Formularea tezei 2: „În al doilea rând, identitatea se confirmă prin grija pentru oameni și asumarea consecințelor acțiunilor.”</p>
HTML;

        $content45 = <<<'HTML'
<p>Formularea unui argument pentru teza 1: „Posesiunea este aleatorie, supusă norocului și conjuncturilor, pe când tăria de caracter se clădește prin alegeri repetate și costisitoare.”</p>
HTML;

        $content46 = <<<'HTML'
<p>Formularea unui argument pentru teza 2: „Identitatea nu se reduce la statut, ci se verifică în acțiune: curaj, luciditate, perseverență, compasiune.”</p>
HTML;

        $content47 = <<<'HTML'
<p>Mențiunea unui text din literatura română care să confirme teza 1: nuvela „Moara cu noroc” de Ioan Slavici.</p>
HTML;

        $content48 = <<<'HTML'
<p>Mențiunea unui text din literatura română care să confirme teza 2: romanul „Baltagul” de Mihail Sadoveanu.</p>
HTML;

        $content49 = <<<'HTML'
<p>Textul respectă structura argumentativă:</p>
<ol>
  <li><strong>Teza</strong> este formulată clar: „Consider că afirmația lui Oscar Wilde este adevărată…”.</li>
  <li><strong>Justificarea</strong> se articulează în două trepte:
    <ul>
      <li>(1) „valoarea se întemeiază pe caracter, nu pe avere”, susținută de ideea că „posesiunea e aleatorie…”, cu proba din <em>Moara cu noroc</em> (Slavici);</li>
      <li>(2) „ceea ce ești se probează prin răspundere față de ceilalți”, sprijinită de „identitatea se verifică în acțiune…”, cu exemplul din <em>Baltagul</em> (Sadoveanu).</li>
    </ul>
  </li>
  <li><strong>Concluzia</strong> închide demonstrația: „Prin urmare… ceea ce «ești» hotărăște destinul.”</li>
</ol>
HTML;

        $content50 = <<<'HTML'
<p>Utilizarea conectorilor specifici/logici: „În primul rând”, „În al doilea rând”, „Prin urmare”</p>
HTML;

        $content51 = <<<'HTML'
<p>Respectarea aspectului grafic îngrijit/lizibil: </p>
<ul>
  <li>Textul este structurat în paragrafe, cu aliniate la începutul paragrafelor.</li>
  <li>Sunt folosite diacritice corecte (fără abrevieri).</li>
</ul>
HTML;

        $content52 = <<<'HTML'
<p>Respectarea limitei de întindere: 2946 simboluri (cu maximum 3400 permise)</p>  
HTML;

        $content53 = <<<'HTML'
<p>Exprimarea clară si consecutivă a ideilor: „Consider că afirmația lui Oscar Wilde este adevărată: ...”, „Consider că învățarea limbilor străine te ajută decisiv să înțelegi cultura altor țări...” </p>        
HTML;

        $content54 = <<<'HTML'
<p>Respectarea limitei de întindere: </p>
<ul>
  <li>continutul textului argumentativ din punctul 11 - 395 simboluri (cu maximum 420-480 permise)</li>
  <li>continutul eseului din punctul 12 - 2500 simboluri (cu maximum 3400 permise)</li>
</ul>
HTML;

        $content55 = <<<'HTML'
<p>Constatarea aspectelor definitorii ale sarcinilor: scrie explicit raspunsul cu indicarea indicilor din text. De exemplu este identificat motivul pasiunii pentru cunoaștere și este demonstrat prin doi indici din text (obsesia studiului; întâlnirea cu Hilbert ca „instanță supremă”).”</p>      
HTML;

        $content56 = <<<'HTML'
<p>Utilizarea de date/informații/fapte elocvente: sunt alese citate scurte, semnificative din probele textuale.</p>         
HTML;

        $content57 = <<<'HTML'
<p>Interpretarea critică a informației, constatarea fenomenelor literare: după fiecare citat, este scris 1–2 enunțuri de analiză/interpretare. De exemplu, pentru citatul „inima mi se zbătea ca peștele în năvod” este oferită interpretarea: „Metafora/comparația sugerează tensiunea inițiatică și capturarea de către vocație.”</p>      
HTML;

        $content58 = <<<'HTML'
<p>Respectarea normelor stilistice:</p>
<ul>
  <li>Este utilizat un limbaj formal și termeni specifici: „teze”, „argument”, „concluzie”.</li>
  <li>Sunt utilizați conectori logici și coerenți: „În primul rând…”, „În al doilea rând…”, „Se poate obiecta…”, „Prin urmare…”</li>
  <li>Coerență de persoană și timp: balanță între persoana I („Consider că…”) și formulări impersonale în analiză.</li>
</ul>
HTML;

        $content59 = <<<'HTML'
<p>Respectarea normelor de punctuație și ortografie: textul este redactat corect, fără greșeli de ortografie, cu diacritice adecvate.</p>
HTML;

        $content60 = <<<'HTML'
<p>Respectarea normelor de punctuaţie:</p>
  <li>Virgule corecte în enumerări: „curaj, luciditate, perseverență, compasiune”; „valori, norme și moduri”.</li>
  <li>Fără virgulă între subiect și predicat: „Posesiunea este aleatorie…” (nu apare virgulă după „Posesiunea”).</li>
  <li>Ghilimele pentru citate: „Moara cu noroc”, „Baltagul”.</li>
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
            
            ["task" => "Invitație",    "content" => $content27,    "max_points" => 0, "evaluation_question_id" => 27], 
        
            ["task" => "Invitație",    "content" => $content28,    "max_points" => 1, "evaluation_question_id" => 28], 
                    
            ["task" => "Invitație",    "content" => $content29,    "max_points" => 1, "evaluation_question_id" => 29], 
        
            ["task" => "Invitație",    "content" => $content30,    "max_points" => 2, "evaluation_question_id" => 30], 
        
            ["task" => "Invitație",    "content" => $content31,    "max_points" => 1, "evaluation_question_id" => 31], 
        
            ["task" => "Invitație",    "content" => $content32,    "max_points" => 2, "evaluation_question_id" => 32], 
        
            ["task" => "Invitație",    "content" => $content33,    "max_points" => 1, "evaluation_question_id" => 33], 
        
            ["task" => "Invitație",    "content" => $content34,    "max_points" => 1, "evaluation_question_id" => 34], 
        
            ["task" => "Invitație",    "content" => $content35,    "max_points" => 1, "evaluation_question_id" => 35], 
        
            ["task" => "Invitație",    "content" => $content36,    "max_points" => 0, "evaluation_question_id" => 36], 
        
            ["task" => "Invitație",    "content" => $content37,    "max_points" => 2, "evaluation_question_id" => 37], 
        
            ["task" => "Invitație",    "content" => $content38,    "max_points" => 2, "evaluation_question_id" => 38], 
        
            ["task" => "Invitație",    "content" => $content39,    "max_points" => 1, "evaluation_question_id" => 39], 
        
            ["task" => "Invitație",    "content" => $content40,    "max_points" => 1, "evaluation_question_id" => 40],
                
            ["task" => "Invitație",    "content" => $content41,    "max_points" => 0, "evaluation_question_id" => 41], 
            
            ["task" => "Invitație",    "content" => $content42,    "max_points" => 2, "evaluation_question_id" => 42],

            ["task" => "Invitație",    "content" => $content43,    "max_points" => 2, "evaluation_question_id" => 43], 
            
            ["task" => "Invitație",    "content" => $content44,    "max_points" => 2, "evaluation_question_id" => 44], 
            
            ["task" => "Invitație",    "content" => $content45,    "max_points" => 2, "evaluation_question_id" => 45], 
            
            ["task" => "Invitație",    "content" => $content46,    "max_points" => 2, "evaluation_question_id" => 46], 
            
            ["task" => "Invitație",    "content" => $content47,    "max_points" => 3, "evaluation_question_id" => 47], 
            
            ["task" => "Invitație",    "content" => $content48,    "max_points" => 3, "evaluation_question_id" => 48], 
            
            ["task" => "Invitație",    "content" => $content49,    "max_points" => 1, "evaluation_question_id" => 49], 
            
            ["task" => "Invitație",    "content" => $content50,    "max_points" => 1, "evaluation_question_id" => 50], 
            
            ["task" => "Invitație",    "content" => $content51,    "max_points" => 1, "evaluation_question_id" => 51], 
            
            ["task" => "Invitație",    "content" => $content52,    "max_points" => 1, "evaluation_question_id" => 52], 
            
            ["task" => "Invitație",    "content" => $content53,    "max_points" => 1, "evaluation_question_id" => 53], 
            
            ["task" => "Invitație",    "content" => $content54,    "max_points" => 1, "evaluation_question_id" => 54], 
            
            ["task" => "Invitație",    "content" => $content55,    "max_points" => 1, "evaluation_question_id" => 55], 
            
            ["task" => "Invitație",    "content" => $content56,    "max_points" => 1, "evaluation_question_id" => 56],
                
            ["task" => "Invitație",    "content" => $content57,    "max_points" => 1, "evaluation_question_id" => 57], 
                
            ["task" => "Invitație",    "content" => $content58,    "max_points" => 5, "evaluation_question_id" => 58], 
                
            ["task" => "Invitație",    "content" => $content59,    "max_points" => 5, "evaluation_question_id" => 59], 
                
            ["task" => "Invitație",    "content" => $content60,    "max_points" => 5, "evaluation_question_id" => 60],

            

                
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
