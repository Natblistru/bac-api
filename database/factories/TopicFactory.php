<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Topic>
 */
class TopicFactory extends Factory
{

    protected static int $i = 0;
    public function definition(): array
    {

        $topics = [
            ["name" => "Statutul de vorbitor cult al limbii române", "topic_content_unit_id" => 1, "path" => '' ,  "content" => null], //1
            ["name" => "Adevărul științific despre limba română", "topic_content_unit_id" => 1, "path" => '' ,  "content" => null],    //2
            ["name" => "Cultură și identitate națională", "topic_content_unit_id" => 1, "path" => '' ,  "content" => null],       //3
            ["name" => "Sentimentul demnității personale în context național și european", "topic_content_unit_id" => 1, "path" => '' ,  "content" => null], //4

            ["name" => "Limba română în diversitatea lingvistică europeană", "topic_content_unit_id" => 2, "path" => '' ,  "content" => null],    //5
            ["name" => "Sentimentul demnității naționale", "topic_content_unit_id" => 2, "path" => '' ,  "content" => null],       //6
            ["name" => "Limba și literatura română: valori ale culturii naționale în context global", "topic_content_unit_id" => 2, "path" => '' ,  "content" => null],   //7


            ["name" => "Plurilingvism și interculturalitate", "topic_content_unit_id" => 3, "path" => '' ,  "content" => null],      //8
            ["name" => "Dialogul valorilor culturale", "topic_content_unit_id" => 3, "path" => '' ,  "content" => null], //9

            ["name" => "Textul literar și lectura ca ipoteză esențială a receptării", "topic_content_unit_id" => 4, "path" => '' ,  "content" => null], //10 
            ["name" => "Formarea cititorului-receptor al literaturii", "topic_content_unit_id" => 4, "path" => '' ,  "content" => null], //11  
            ["name" => "Literatura - formă de cunoaștere și artă a cuvântului", "topic_content_unit_id" => 4, "path" => '' ,  "content" => null], //12 
            ["name" => "Dimensiunea culturală și socială a literaturii", "topic_content_unit_id" => 4, "path" => '' ,  "content" => null],    //13   
            ["name" => "Genuri literare și receptarea operei din perspectiva teoriei și criticii literare", "topic_content_unit_id" => 4, "path" => '' ,  "content" => null], //14 

            ["name" => "Miturile - resurse fundamentale ale literaturii. Mituri românești relevante", "topic_content_unit_id" => 5, "path" => '' ,  "content" => null],  //15 
            ["name" => "Folclorul - temelia literaturii naționale. Tradiție și inovație în continuitatea literară", "topic_content_unit_id" => 5, "path" => '' ,  "content" => null], //16 
            
            ["name" => "Elemente de structură şi compoziţie a operei epice (subiect/discurs)", "topic_content_unit_id" => 6, "path" => '' ,  "content" => null], //17
            ["name" => "Instanţele narative. Perspectiva narativa. Tipuri de naratori", "topic_content_unit_id" => 6, "path" => '' ,  "content" => null], //18 
            ["name" => "Subiectul și structura lui: acțiunea, sistemul de personaje, cronotopul", "topic_content_unit_id" => 6, "path" => '' ,  "content" => null], //19 
            ["name" => "Momentele acţiunii şi moduri de expunere (actualizare şi aprofundare)", "topic_content_unit_id" => 6, "path" => '' ,  "content" => null], //20  
            ["name" => "Tipologii de personaje", "topic_content_unit_id" => 6, "path" => '' ,  "content" => null], //21
            ["name" => "Modalităţi/procedee de caracterizare", "topic_content_unit_id" => 6, "path" => '' ,  "content" => null], //22
            ["name" => "Epica populară: specii (actualizare), teme dominante", "topic_content_unit_id" => 6, "path" => '' ,  "content" => null], //23
            ["name" => "Basmul popular şi basmul cult", "topic_content_unit_id" => 6, "path" => '' ,  "content" => null], //24
            ["name" => "Proza cultă: schița, nuvela, povestirea", "topic_content_unit_id" => 6, "path" => '' ,  "content" => null], //25
            ["name" => "Romanul: Tipologie: romanul obiectiv, romanul istoric, romanul psihologic", "topic_content_unit_id" => 6, "path" => '' ,  "content" => null], //26
            ["name" => "Textul de graniță: eseul literar, jurnalul", "topic_content_unit_id" => 6, "path" => '' ,  "content" => null], //27

            ["name" => "Compoziţia textului dramatic: acţiune dramatică, conflict dramatic, didascalii", "topic_content_unit_id" => 7, "path" => '' ,  "content" => null], //28
            ["name" => "Structura textului dramatic în acte, scene, cânturi", "topic_content_unit_id" => 7, "path" => '' ,  "content" => null], //29
            ["name" => "Specii ale genului dramatic: comedia şi drama", "topic_content_unit_id" => 7, "path" => '' ,  "content" => null], //30

            ["name" => "Lirica populară: doina, cântecul popular și colindul", "topic_content_unit_id" => 8, "path" => '' ,  "content" => null], //31
            ["name" => "Poezia cultă: oda, elegia, meditaţia", "topic_content_unit_id" => 8, "path" => '' ,  "content" => null], //32
            ["name" => "Poezia de formă fixă: sonet, rondel, glosa", "topic_content_unit_id" => 8, "path" => '' ,  "content" => null], //33
            ["name" => "Eul liric: stări și ipostaze", "topic_content_unit_id" => 8, "path" => '' ,  "content" => null], //34
            ["name" => "Elemente de structură a textului poetic: temă, motiv, laitmotiv", "topic_content_unit_id" => 8, "path" => '' ,  "content" => null], //35
            ["name" => "Elemente de prozodie: rimă, ritm, strofă, vers alb", "topic_content_unit_id" => 8, "path" => '' ,  "content" => null], //36
            ["name" => "Limbajul textului poetic: imaginea artistică", "topic_content_unit_id" => 8, "path" => '' ,  "content" => null], //37
            ["name" => "Limbajul textului poetic: figuri de stil", "topic_content_unit_id" => 8, "path" => '' ,  "content" => null], //38

            ["name" => "Curente culturale și literare: noțiuni, caracterizare generală", "topic_content_unit_id" => 9, "path" => '' ,  "content" => null], //39
            ["name" => "Curentul literar și particularitățile genului și ale speciilor", "topic_content_unit_id" => 9, "path" => '' ,  "content" => null], //40
            ["name" => "Umanismul. Context socio-istoric şi particularităţi", "topic_content_unit_id" => 9, "path" => '' ,  "content" => null], //41
            ["name" => "Elemente umaniste în istoriografia românească", "topic_content_unit_id" => 9, "path" => '' ,  "content" => null], //42
            ["name" => "Iluminismul românesc. Context socioistoric şi particularităţi", "topic_content_unit_id" => 9, "path" => '' ,  "content" => null], //43
            ["name" => "Clasicismul. Context socio-istoric. Principii ale clasicismului", "topic_content_unit_id" => 9, "path" => '' ,  "content" => null], //44
            ["name" => "Aspecte ale clasicismului în literatura română", "topic_content_unit_id" => 9, "path" => '' ,  "content" => null], //45
            ["name" => "Romantismul. Context socio-istoric şi particularităţi. Genuri și specii caracteristice", "topic_content_unit_id" => 9, "path" => '' ,  "content" => null], //46
            ["name" => "Romantismul. Motive literare și mărci stilistice specifice. Personajul romantic", "topic_content_unit_id" => 9, "path" => '' ,  "content" => null], //47
            ["name" => "Romantismul românesc: de la pașoptism la junimism", "topic_content_unit_id" => 9, "path" => '' ,  "content" => null], //48
            ["name" => "Realismul: contextul socio-istoric și particularități", "topic_content_unit_id" => 9, "path" => '' ,  "content" => null], //49

            ["name" => "Curente literare moderniste: context european și formule autohtone", "topic_content_unit_id" => 10, "path" => '' ,  "content" => null], //50
            ["name" => "Simbolismul. Particularități", "topic_content_unit_id" => 10, "path" => '' ,  "content" => null], //51
            ["name" => "Expresionismul. Estetica expresionismului românesc", "topic_content_unit_id" => 10, "path" => '' ,  "content" => null], //52
            ["name" => "Neomodernismul. Afirmare și specific în contextul literaturii române din Basarabia", "topic_content_unit_id" => 10, "path" => '' ,  "content" => null], //53
            ["name" => "Postmodernismul, expresie a literaturii noi", "topic_content_unit_id" => 10, "path" => '' ,  "content" => null], //54
            ["name" => "Interferența curentelor literare", "topic_content_unit_id" => 10, "path" => '' ,  "content" => null], //55

            ["name" => "Romanul realist: Teme dominante, Tipologii ale personajul realist", "topic_content_unit_id" => 11, "path" => '' ,  "content" => null], //56
            ["name" => "Autori reprezentativi ai romanului realist", "topic_content_unit_id" => 11, "path" => '' ,  "content" => null], //57
            ["name" => "Sămănătorismul și poporanismul: contextul socio-istoric și particularități", "topic_content_unit_id" => 11, "path" => '' ,  "content" => null], //58

            ["name" => "Cititorul avizat și lectura interpretativă a operei literare", "topic_content_unit_id" => 12, "path" => '' ,  "content" => null], //59
            ["name" => "Istoria literaturii, teoria și critica literară - surse de interpretare a operei literare", "topic_content_unit_id" => 12, "path" => '' ,  "content" => null], //60

            ["name" => "Universul artistic al scriitorului", "topic_content_unit_id" => 13, "path" => '' ,  "content" => null], //61
            ["name" => "Stilul individual al scriitorului", "topic_content_unit_id" => 13, "path" => '' ,  "content" => null], //62

            ["name" => "Etapele de elaborare a textului scris", "topic_content_unit_id" => 14, "path" => '' ,  "content" => null], //63
            ["name" => "Scrierea diferitor tipuri de texte", "topic_content_unit_id" => 14, "path" => '' ,  "content" => null], //64
            ["name" => "Reguli de tehnoredactare", "topic_content_unit_id" => 14, "path" => '' ,  "content" => null], //65
            ["name" => "Calitatea mesajului scris: coerenţă şi coeziune", "topic_content_unit_id" => 14, "path" => '' ,  "content" => null], //66

            ["name" => "Textul argumentativ", "topic_content_unit_id" => 15, "path" => '' ,  "content" => null], //67
            ["name" => "Articolul în presa scrisă și online", "topic_content_unit_id" => 15, "path" => '' ,  "content" => null], //68
            ["name" => "Jurnalul", "topic_content_unit_id" => 15, "path" => '' ,  "content" => null], //69

            ["name" => "Comentarea unui text liric", "topic_content_unit_id" => 16, "path" => '' ,  "content" => null], //70
            ["name" => "Comentarea unui fragment de text epic", "topic_content_unit_id" => 16, "path" => '' ,  "content" => null], //71
            ["name" => "Comentarea unui fragment de text dramatic", "topic_content_unit_id" => 16, "path" => '' ,  "content" => null], //72
            ["name" => "Compoziţia de caracterizare a personajului literar", "topic_content_unit_id" => 16, "path" => '' ,  "content" => null], //73
            ["name" => "Portretul literar", "topic_content_unit_id" => 16, "path" => '' ,  "content" => null], //74
            ["name" => "Compoziția-caracterizare de personaj din perspectiva curentului literar", "topic_content_unit_id" => 16, "path" => '' ,  "content" => null], //75
            ["name" => "Eseul structurat și nestructurat", "topic_content_unit_id" => 16, "path" => '' ,  "content" => null], //76
            ["name" => "Eseul de sinteză", "topic_content_unit_id" => 16, "path" => '' ,  "content" => null], //77
            ["name" => "Compoziția-paralelă", "topic_content_unit_id" => 16, "path" => '' ,  "content" => null], //78
            ["name" => "Compoziția-analiza literară a unei opere de referință", "topic_content_unit_id" => 16, "path" => '' ,  "content" => null], //79

            ["name" => "Cererea", "topic_content_unit_id" => 17, "path" => '' ,  "content" => null], //80
            ["name" => "Anunțul", "topic_content_unit_id" => 17, "path" => '' ,  "content" => null], //81
            ["name" => "CV-ul", "topic_content_unit_id" => 17, "path" => '' ,  "content" => null], //82
            ["name" => "Procura", "topic_content_unit_id" => 17, "path" => '' ,  "content" => null], //83
            ["name" => "Invitația", "topic_content_unit_id" => 17, "path" => '' ,  "content" => null], //84
            ["name" => "Scrisoarea de intenție", "topic_content_unit_id" => 17, "path" => '' ,  "content" => null], //85

            ["name" => "Norme ortoepice și ortografice", "topic_content_unit_id" => 18, "path" => '' ,  "content" => null], //86

            ["name" => "Relații logico-semantice între cuvinte. Polisemia", "topic_content_unit_id" => 19, "path" => '' ,  "content" => null], //87
            ["name" => "Sinonimia contextuală", "topic_content_unit_id" => 19, "path" => '' ,  "content" => null], //88
            ["name" => "Formarea cuvintelor cu afixe și elemente de compunere neologice", "topic_content_unit_id" => 19, "path" => '' ,  "content" => null], //89
            ["name" => "Expresii autohtone, internaționale, intraductibile", "topic_content_unit_id" => 19, "path" => '' ,  "content" => null], //90
            ["name" => "Lexic și lexicografie terminologică", "topic_content_unit_id" => 19, "path" => '' ,  "content" => null], //91

            ["name" => "Structuri morfematice cu elemente intercalate și reflexele ortografice ale acestora", "topic_content_unit_id" => 20, "path" => '' ,  "content" => null], //92
            ["name" => "Ortografia împrumuturilor - legarea/nelegarea cu cratimă a articolului hotărât și a desinențelor", "topic_content_unit_id" => 20, "path" => '' ,  "content" => null], //93
            ["name" => "Ortografia și abrevierea unităților de măsură și a semnelor convenționale şi a simbolurilor din textele științifice", "topic_content_unit_id" => 20, "path" => '' ,  "content" => null], //94
            ["name" => "Ambiguități gramaticale în limbajul normat și în limbajul artistic", "topic_content_unit_id" => 20, "path" => '' ,  "content" => null], //95            

            ["name" => "Acordul în limba română. Cazuri dificile de acord", "topic_content_unit_id" => 21, "path" => '' ,  "content" => null], //96
            ["name" => "Principiile punctuației: intonațional, logico-semantic, formal-gramatical la nivelul propoziției", "topic_content_unit_id" => 21, "path" => '' ,  "content" => null], //97
            ["name" => "Sintaxa frazei", "topic_content_unit_id" => 21, "path" => '' ,  "content" => null], //98
            ["name" => "Contragerea și expansiunea", "topic_content_unit_id" => 21, "path" => '' ,  "content" => null], //99
            ["name" => "Cupluri corelative - exprimare și punctuație corectă", "topic_content_unit_id" => 21, "path" => '' ,  "content" => null], //100
            ["name" => "Punctuația și justificările ei sintactice", "topic_content_unit_id" => 21, "path" => '' ,  "content" => null], //101
            ["name" => "Topică fixă și topica liberă", "topic_content_unit_id" => 21, "path" => '' ,  "content" => null], //102

            ["name" => "Stilurile funcționale ale limbii", "topic_content_unit_id" => 22, "path" => '' ,  "content" => null], //103
            ["name" => "Stilistica părților de vorbire", "topic_content_unit_id" => 22, "path" => '' ,  "content" => null], //104
            ["name" => "Particularitățile de limbaj în diverse stiluri funcționale", "topic_content_unit_id" => 22, "path" => '' ,  "content" => null], //105
            ["name" => "Valori stilistice ale semnelor de punctuație", "topic_content_unit_id" => 22, "path" => '' ,  "content" => null], //106
            ["name" => "Valori stilistice ale semnelor de punctuație", "topic_content_unit_id" => 22, "path" => '' ,  "content" => null], //107
            ["name" => "Abaterea de la normă. Anacolut, confuzii paronimice, pleonasm și tautologie, cacofonie", "topic_content_unit_id" => 22, "path" => '' ,  "content" => null], //108
        ];

        $a = $topics[ static::$i % count($topics) ];
        static::$i++;


        return [
            'name' => $a['name'],
            'topic_content_unit_id' => $a['topic_content_unit_id'],
            'path' => $a['path'],  
            'content' => $a['content'] === null ? null : ['html' => $a['content']],          
        ];
    }

}
