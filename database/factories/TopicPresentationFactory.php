<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TopicPresentation>
 */
class TopicPresentationFactory extends Factory
{
    protected static int $i = 0;

    public function definition(): array
    {
        $name = 'Figuri de stil';
        $path = 'https://docs.google.com/presentation/d/e/2PACX-1vTCYGXsasRbf7orEzr4RNixmNdxR-NzwmRVnGFmAxGVE3RXcQ-3vPD0KaIXbhUDWA/pubembed?start=false&loop=false&delayms=3000';

        // Transcriere/descriere de prezentare pentru căutare FULLTEXT (TEXT simplu)
        $content_text1 = <<<'TXT'
Prezentare: Figuri de stil. Obiective: definirea figurilor de stil, recunoașterea în text, explicarea efectelor. 
Comparația: alătură doi termeni prin ca, asemenea, precum; ex.: inima i se zbate ca un pește în năvod. 
Metafora: comparație redusă, transfer de sens; ex.: ploaie de stele, mare de oameni. 
Epitetul: determinare expresivă a substantivului; ex.: toamnă aurie, pas grăbit. 
Personificarea: însușiri umane pentru abstracte/obiecte; ex.: codrul șoptește, timpul aleargă. 
Hiperbola: exagerare intenționată; ex.: am plâns un ocean. 
Enumerarea: înșiruire de termeni, ritm și intensitate; ex.: gânduri, cuvinte, fapte, vise. 
Repetiția: reluarea unui termen pentru reliefare; anafora (la început), epifora (la final). 
Inversiunea: schimbarea ordinii pentru accent; ex.: Frumoasă-i seara. 
Întrebarea retorică: întrebare fără răspuns așteptat; ex.: Cine n-ar vrea libertate? 
Onomatopeea: imitarea sunetelor; ex.: clip, clap, trosc. 
Oximoronul: termeni opuși alături; ex.: tăcere zgomotoasă, lumină neagră. 
Strategii de identificare: căutați marcatori (ca, precum), verbe de acțiune atribuite abstractelor, exagerări, serii ritmice, reluări, opoziții paradoxale. 
Aplicații: subliniați figura, numiți-o, explicați efectul (dinamism, intensitate, ironie) și legătura cu tema. 
Concluzie: figurile nu sunt ornamente, ci organizatoare de sens și emoție; rescrierea fără figură arată pierderea expresivității.
TXT;

        // Normalizează spațiile pentru indexare mai bună
        $content_text1 = Str::of($content_text1)
            ->replace(["\r\n", "\r"], "\n")
            ->replace("\n", " ")
            ->squish()
            ->toString();

        $presentations = [
            [
                "name"         => 'Figuri de stil',
                "path"         => 'https://docs.google.com/presentation/d/e/2PACX-1vTCYGXsasRbf7orEzr4RNixmNdxR-NzwmRVnGFmAxGVE3RXcQ-3vPD0KaIXbhUDWA/pubembed?start=false&loop=false&delayms=3000',
                "topic_id"     => 87,
                "content_text" => $content_text1,
                "thumbnail_path" => 'presentare_87.jpg'
            ],
        ];

        $a = $presentations[ static::$i % count($presentations) ];
        static::$i++;

        return [
            'name'         => $a['name'],
            'path'         => $a['path'],
            'topic_id'     => $a['topic_id'],
            'content_text' => $a['content_text'],
            'thumbnail_path' => $a['thumbnail_path']
        ];
    }
}
