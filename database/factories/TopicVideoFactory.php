<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TopicVideo>
 */
class TopicVideoFactory extends Factory
{
    protected static int $i = 0;

    public function definition(): array
    {
        $content_text1 = <<<'TXT'
        Bun venit! În acest video discutăm despre figurile de stil: ce sunt, la ce folosesc și cum le recunoaștem în texte. O figură de stil este o modificare intenționată a limbajului care intensifică expresivitatea mesajului.
        Începem cu comparația: alătură doi termeni printr-un marcator precum ca, precum, asemenea. Exemplu: inima i se zbate ca un pește în năvod. Observăm termenul comparat, marcatorul și comparantul.
        Metafora este o comparație redusă, fără marcator. Spunem marea de oameni, ploaie de stele, iar sensul se transferă de la concret la abstract. Metafora poate fi comună sau originală, punctuală sau filată.
        Epitetul este un determinat expresiv al substantivului: toamnă aurie, privire neliniștită. El precizează o trăsătură afectivă sau plastică.
        Personificarea atribuie însușiri omenești unor lucruri sau ființe neînsuflețite: codrul șoptește, timpul aleargă. Scopul este umanizarea și dinamizarea imaginii.
        Hiperbola exagerează: am așteptat o veșnicie, am plâns un ocean. Ea mărește efectul afectiv și retoric.
        Enumerarea înșiră elemente: gânduri, cuvinte, fapte, vise. Poate avea ritm accelerat și valoare argumentativă.
        Repetiția insistă asupra unui cuvânt pentru reliefare; anafora repetă începutul versurilor sau frazelor: Nu te-am chemat, nu te-am rugat, nu te-am oprit. Epifora reia finalul.
        Inversiunea schimbă ordinea firească a cuvintelor pentru accent: Frumoasă-i seara.
        Întrebarea retorică nu așteaptă răspuns: Cine n-ar vrea libertate? Ea implică afect și convingere.
        Onomatopeea imită sunete: clip, clap, trosc; conferă vividitate.
        Oxymoronul alătură termeni opuși: tăcere zgomotoasă, lumină neagră; sugerează tensiunea ideii.
        Cum le identificăm în practică? Căutăm marcatori (ca, asemenea), verbe de acțiune atribuite abstractelor, exagerări evidente, șiruri cu ritm, reluări la început sau sfârșit de frază, opoziții paradoxale. Recomandare: subliniați termenii-cheie, notați efectul creat (dinamism, intensitate, ironie) și legătura cu tema textului.
        Concluzie: figurile de stil nu sunt ornamente gratuite; ele organizează sensul, emoția și perspectiva naratorului sau a eului liric. Exersați pe fragmente scurte și comparați efectul înainte și după rescriere fără figură.
        TXT;

        // Normalizează spațiile pt. FULLTEXT (linii noi -> spații, spații multiple -> un singur spațiu)
        $content_text1 = Str::of($content_text1)
            ->replace(["\r\n", "\r"], "\n")
            ->replace("\n", " ")
            ->squish()
            ->toString();

        $videos = [
            [
                "title"        => 'Monosemia și polisemia. Sensul propriu/figurat',
                "source"       => 'https://www.youtube.com/embed/lzX7o8SDE_Q?si=7FzAoBVgrS6ewnxL',
                "topic_id"     => 87, 
                "content_text" => $content_text1,
            ],
        ];

        $a = $videos[ static::$i % count($videos) ];
        static::$i++;

        return [
            'title'        => $a['title'],
            'source'       => $a['source'],
            'topic_id'     => $a['topic_id'],
            'content_text' => $a['content_text'],
        ];
    }
}
