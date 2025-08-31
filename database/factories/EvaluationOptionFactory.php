<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EvaluationOption>
 */
class EvaluationOptionFactory extends Factory
{
    protected static int $i = 0;
    public function definition(): array  {

    //    $labels = ['0 p. - răspuns greșit/ lipsă',

        $options = [
/*1*/            [   'label' => '0 p. - răspuns greșit/ lipsă',  'points' => 0],
/*2*/            [   'label' => '1 p. - alegerea unui sinonim adecvat',  'points' => 1],//1
/*3*/            [   'label' => '1 p. - enunţul nu este argumentativ','points' => 1,],
/*4*/            [   'label' => '2 p. - enunţul argumentativ construit corect', 'points' => 2,], //2
/*5*/            [   'label' => '0 p. - argumentare parțială, fără referință la text','points' => 0,],
/*6*/            [   'label' => '1 p. - argumentare cu referinţa la text','points' => 1,],      //3
/*7*/            [   'label' => '1 p. - enunț corect construit, dar fără ilustrarea sensului figurat al lexemului','points' => 1,],
/*8*/            [   'label' => '2 p. - enunț logic, coerent, care ilustrează sensul figurat al cuvântului','points' => 2,],     //4 + 5 + 6
/*9*/            [   'label' => '1 p. - identificarea tipului uman','points' => 1,],            //7
/*10*/           [   'label' => '1 p. - citat corect dar fără comentarea acestuia în sprijinul afirmaţiei iniţiale','points' => 1,],     
/*11*/           [   'label' => '2 p. - citat corect cu comentarea acestuia în sprijinul afirmaţiei iniţiale','points' => 2,],   // 8 + 9
/*12*/           [   'label' => '1 p. - rescrierea completă a figurii de stil dar fără nominalizarea corectă a figurii de stil','points' => 1,],
/*13*/           [   'label' => '2 p. - rescrierea completă și nominalizarea corectă a figurii de stil','points' => 2,],      // 10
/*14*/           [   'label' => '1 p. - examinarea modului de constituire a figurii de stil, fără a evidenția semnificația contextuală a ei','points' => 1,], 
/*15*/           [   'label' => '2 p. - examinarea modului de constituire a figurii de stil, semnificației ei contextuale, dar fără referire la text','points' => 2,], 
/*16*/           [   'label' => '3 p. - examinarea modului de constituire a figurii de stil, semnificației ei contextuale cu referire la text','points' => 3,], // 11
/*17*/           [   'label' => '1 p. - identificarea trasaturii morale, dar fără exemple din text', 'points' => 1,],
/*18*/           [   'label' => '2 p. - identificarea trasaturii morale cu exemple din text','points' => 2,],    // 12 + 13
/*19*/           [   'label' => '0 p. - text necoerent', 'points' => 0,],
/*20*/           [   'label' => '1 p. - text coerent', 'points' => 1,], // 14 + 22 + 40
/*21*/           [   'label' => '1 p. - explicarea sensului motivului pasiunii pentru cunoaștere fără referire la text', 'points' => 1,],
/*22*/           [   'label' => '2 p. - explicarea sensului motivului pasiunii pentru cunoaștere cu referire la text', 'points' => 2,],// 15
/*23*/           [   'label' => '0 p. - referință incorectă / lipsa referinței la alt text ales pentru comparație','points' => 0,],
/*24*/           [   'label' => '1 p. - referință exactă (titlul, numele autorului) la alt text ales pentru comparație', 'points' => 1,],// 16
/*25*/           [   'label' => '1 p. - explicarea parțială a sensului motivului în alt text ales pentru comparație', 'points' => 1,],
/*26*/           [   'label' => '2 p. - explicarea sensului motivului în alt text ales pentru comparație', 'points' => 2,],// 17
/*27*/           [   'label' => '0 p. - prezentare incorectă / lipsa prezentării situației din alt text', 'points' => 0,],
/*28*/           [   'label' => '1 p. - citarea/prezentarea unei situații din textul ales pentru comparație', 'points' => 1,],// 18
/*29*/           [   'label' => '0 p. - identificarea incorectă / lipsa identificării atitudinii personajului', 'points' => 0,],
/*30*/           [   'label' => '1 p. - identificarea corectă a atitudinii', 'points' => 1,],// 19
/*31*/           [   'label' => '0 p. - prezentare incorectă / lipsa citatului din text', 'points' => 0,],
/*32*/           [   'label' => '1 p. - citat corect dar fără comentarea acestuia în sprijinul afirmaţiei iniţiale','points' => 1,],
/*33*/           [   'label' => '2 p. - citat corect cu comentarea acestuia în sprijinul afirmaţiei iniţiale', 'points' => 2,],// 20 + 21
/*34*/           [   'label' => '1 p. - motivarea utilizării gramaticale a punctelor de suspensie', 'points' => 1,],// 23
/*35*/           [   'label' => '1 p. - explicarea valenței stilistice a punctelor de suspensie fără referire la text', 'points' => 1,],
/*36*/           [   'label' => '2 p. - explicarea valenței stilistice a punctelor de suspensie cu referire la text', 'points' => 2,],// 24    
/*37*/           [   'label' => '0 p. - formularea incorectă / lipsa argumentelor','points' => 0,],
/*38*/           [   'label' => '0 p. - prezentarea exemplelor fără raționament (argument)','points' => 0,],
/*39*/           [   'label' => '1 p. - argumentare fără referință la text','points' => 1,],
/*40*/           [   'label' => '2 p. - argumentare cu referinţa la text', 'points' => 2,], // 25 + 26      
/*41*/           [   'label' => '0 p. - prezentarea textului compunerii (punct tehnic, de formă)', 'points' => 0,],// 27
/*42*/           [   'label' => '0 p. - lipsa formulei de adresare', 'points' => 0,],
/*43*/           [   'label' => '1 p. - prezența formulei de adresare', 'points' => 1,], //28
/*44*/           [   'label' => '0 p. - lipsa organizatorilor','points' => 0,],
/*45*/           [   'label' => '0 p. - nominalizarea organizatorilor', 'points' => 0,],//29

/*46*/           [   'label' => '0 p. - lipsa denumirii evenimentului și genericului','points' => 0,],
/*47*/           [   'label' => '1 p. - lipsa denumirii evenimentului sau genericului', 'points' => 1,],
/*48*/           [   'label' => '2 p. - prezența denumirii evenimentului și genericului', 'points' => 2,], //30

/*49*/           [   'label' => '0 p. - lipsa scopului activității', 'points' => 0,],
/*50*/           [   'label' => '1 p. - menționarea scopului activității', 'points' => 1,], // 31

/*51*/           [   'label' => '0 p. - lipsa timpului desfășurării', 'points' => 0,],
/*52*/           [   'label' => '2 p. - indicarea timpului desfășurării', 'points' => 2,],// 32

/*53*/           [   'label' => '0 p. - lipsa locului','points' => 0,],
/*54*/           [   'label' => '1 p. - indicarea locului', 'points' => 1,], // 33

/*55*/           [   'label' => '0 p. - nerespectarea marginii şi a alineatelor', 'points' => 0,],
/*56*/           [   'label' => '1 p. - respectarea marginii şi a alineatelor', 'points' => 1,], // 34

/*57*/           [   'label' => '0 p. - lipsa semnăturii', 'points' => 0,],
/*58*/           [   'label' => '1 p. - indicarea semnăturii', 'points' => 1,], // 35

/*59*/           [   'label' => '0 p. - prezentarea textului argumentativ (punct tehnic, de formă)', 'points' => 0,], //36

/*60*/           [   'label' => '0 p. – lipsește punctul de vedere / este nerelevant (doar rezumatul temei, fără poziționare)', 'points' => 0,],
/*61*/           [   'label' => '1 p. – punct de vedere parțial/implicit, vag sau ușor contradictoriu cu restul textului',  'points' => 1,],       
/*62*/           [   'label' => '2 p. - formularea punctului de vedere', 'points' => 2,],// 37  

/*63*/           [   'label' => '0 p. – fără justificare sau neconvingător: argumente eronate/contradictorii, exemple off-topic','points' => 0,],
/*64*/           [   'label' => '1 p. – justificare parțială: motive generale/insuficiente, exemple slab legate de teză, mici erori logice','points' => 1,],
/*65*/           [   'label' => '2 p. - plauzibilitatea punctului de vedere expus', 'points' => 2,],//38

/*66*/           [   'label' => '0 p. - lipsa unui exemplu concret din experiența proprie', 'points' => 0,],
/*67*/           [   'label' => '1 p. - reperarea unui exemplu concret din experiența proprie', 'points' => 1,],// 39

/*19*/           /*'0 p. - text necoerent',  */
/*20*/           /*'1 p. - text coerent',  // 40  */

/*68*/           [   'label' => '0 p. - prezentarea textului argumentativ (punct tehnic, de formă)', 'points' => 0,], // 41

/*69*/           [   'label' => '0 p. - lipsa opiniei','points' => 0,],
/*70*/           [   'label' => '1 p. - opinie superficială, exprimată echivoc','points' => 1,],
/*71*/           [   'label' => '2 p. - exprimarea clară a opiniei', 'points' => 2,],// 42

/*72*/           [   'label' => '0 p. - lipsa tezei','points' => 0,],
/*73*/           [   'label' => '1 p. - teză formulată parțial, cu o premisă ambiguă','points' => 1,],
/*74*/           [   'label' => '2 p. - teză formulată distinct, derivator', 'points' => 2,],//43 + 44

/*75*/           [   'label' => '0 p. - lipsa argumentului','points' => 0,],
/*76*/           [   'label' => '1 p. - formularea parțială a argumentului, cu o justificare evazivă','points' => 1,],
/*77*/           [   'label' => '2 p. - formularea unui argument valid, concordant și logic', 'points' => 2,], // 45 + 46

/*78*/           [   'label' => '0 p. – lipsește referința la un text din literatura română care să confirme teza','points' => 0,],
/*79*/           [   'label' => '1 p. – există referință (titlu + autor), dar cunoaștere superficială; fără exemple/dovezi, formulări clișeu','points' => 1,],
/*80*/           [   'label' => '2 p. – referință corectă (titlu + autor) cu dovezi relevante, dar angajare parțială; exemple vagi/nefunde','points' => 2,],
/*81*/           [   'label' => '3 p. – titlu + autor + referință precisă, dovezi solide și valorificare pertinentă; exemple concrete/citate semnificative', 'points' => 3,],// 47 + 48

/*82*/           [   'label' => '0 p. - nerespectarea structurii eseului argumentativ','points' => 0,],
/*83*/           [   'label' => '1 p. - respectarea structurii eseului argumentativ (teza, justificarea graduală, formularea concluziei)', 'points' => 1,], // 49

/*84*/           [   'label' => '0 p. - neutilizarea conectorilor specifici/logici','points' => 0,],
/*85*/           [   'label' => '1 p. - utilizarea conectorilor specifici/logici', 'points' => 1,], // 50

/*86*/           [   'label' => '0 p. - aspect grafic neîngrijit/ilizibil: margini și alineate nerespectate','points' => 0,],
/*87*/           [   'label' => '1 p. - aspectul grafic îngrijit/lizibil', 'points' => 1,],// 51

/*88*/           [   'label' => '0 p. - nerespectarea limitei de întindere','points' => 0,],
/*89*/           [   'label' => '1 p. - respectarea limitei de întindere', 'points' => 1,],// 52 + 54

/*90*/           [   'label' => '0 p. - idei neclare și dezorganizate; fără progresie (introducere–dezvoltare–concluzie)', 'points' => 0,],
/*91*/           [   'label' => '1 p. - idei clare si consecutive', 'points' => 1,], // 53

/*92*/           [   'label' => '0 p. - Neidentificarea sarcinilor cerute','points' => 0,],
/*93*/           [   'label' => '1 p. - Constatarea aspectelor definitorii ale sarcinilor', 'points' => 1,],// 55

/*94*/           [   'label' => '0 p. - Lipsa datelor sau a exemplelor (referințelor)', 'points' => 0,],
/*95*/           [   'label' => '1 p. - Utilizarea de date/informații/fapte elocvente', 'points' => 1,],// 56

/*96*/           [   'label' => '0 p. - Lipsa analizei (textul rămâne parafrazat)','points' => 0,],
/*97*/           [   'label' => '1 p. - Interpretarea critică a informației, constatarea fenomenelor literare', 'points' => 1,],// 57


/*98*/           [   'label' => '0 p. - Corectitudinea stilistică: 10 și mai multe greşeli de exprimare','points' => 0,],
/*99*/           [   'label' => '1 p. - Corectitudinea stilistică: 8-9 greşeli de exprimare','points' => 1,],
/*100*/           [   'label' => '2 p. - Corectitudinea stilistică: 6-7 greşeli de exprimare','points' => 2,],
/*101*/          [   'label' => '3 p. - Corectitudinea stilistică: 4-5 greşeli de exprimare','points' => 3,],
/*102*/          [   'label' => '4 p. - Corectitudinea stilistică: 2-3 greşeli de exprimare','points' => 4,],
/*103*/          [   'label' => '5 p. - Corectitudinea stilistică: 0-1 greşeală de exprimare',  'points' => 5,],// 58

/*104*/          [   'label' => '0 p. - Corectitudinea ortografică: 6 și mai multe greşeli de ortografie','points' => 0,],
/*105*/          [   'label' => '1 p. - Corectitudinea ortografică: 5 greşeli de ortografie','points' => 1,],
/*106*/          [   'label' => '2 p. - Corectitudinea ortografică: 4 greşeli de ortografie','points' => 2,],
/*107*/          [   'label' => '3 p. - Corectitudinea ortografică: 3 greşeli de ortografie','points' => 3,],
/*108*/          [   'label' => '4 p. - Corectitudinea ortografică: 2 greşeli de ortografie','points' => 4,],
/*109*/          [   'label' => '5 p. - Corectitudinea ortografică: 0-1 greşeală de ortografie',  'points' => 5,], // 59    


/*110*/          [   'label' => '0 p. - Corectitudinea punctuației: 6 și mai multe greşeli de punctuație','points' => 0,],
/*111*/          [   'label' => '1 p. - Corectitudinea punctuației: 5 greşeli de punctuație','points' => 1,],
/*112*/          [   'label' => '2 p. - Corectitudinea punctuației: 4 greşeli de punctuație','points' => 2,],
/*113*/          [   'label' => '3 p. - Corectitudinea punctuației: 3 greşeli de punctuație','points' => 3,],
/*114*/          [   'label' => '4 p. - Corectitudinea punctuației: 2 greşeli de punctuație','points' => 4,],
/*115*/          [   'label' => '5 p. - Corectitudinea punctuației: 0-1 greşeală de punctuație',  'points' => 5,] // 60 

        ];
                 
        $a = $options[ static::$i % count($options) ];
        static::$i++;


        return [
            'label' => $a['label'],
            'points' => $a['points']
        ];
    }
}
