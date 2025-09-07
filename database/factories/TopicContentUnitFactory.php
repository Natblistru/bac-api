<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TopicContentUnit>
 */
class TopicContentUnitFactory extends Factory
{
    protected static int $i = 0;
    public function definition(): array
    {
        $contentUnits = [
            ["name" => "Vorbitorul cult și identitatea națională", "topic_domain_id" => 1], //1
            ["name" => "Româna în Europa: diversitate și valori", "topic_domain_id" => 1],    //2
            ["name" => "Plurilingvism și dialog intercultural", "topic_domain_id" => 1],       //3

            ["name" => "Literatura și receptarea", "topic_domain_id" => 2], //4
            ["name" => "Literatura română – fenomen în evoluție", "topic_domain_id" => 2],    //5
            ["name" => "Genul epic", "topic_domain_id" => 2],       //6
            ["name" => "Genul dramatic", "topic_domain_id" => 2],   //7
            ["name" => "Genul liric", "topic_domain_id" => 2],      //8
            ["name" => "Curente culturale și literare: istorie, critică, teorie", "topic_domain_id" => 2], //9
            ["name" => "Curente culturale moderne", "topic_domain_id" => 2], //10 
            ["name" => "Genuri și specii caracteristice", "topic_domain_id" => 2], //11  
            ["name" => "Creaţia literară şi interpretarea textului", "topic_domain_id" => 2], //12 
            ["name" => "Cititorul şi universul artistic al personalităţii literare", "topic_domain_id" => 2],    //13   

            ["name" => "Comunicarea scrisă", "topic_domain_id" => 3], //14 
            ["name" => "Scrierea reflexivă", "topic_domain_id" => 3],  //15 
            ["name" => "Scrierea metaliterară", "topic_domain_id" => 3], //16 
            ["name" => "Scrierea funcțională", "topic_domain_id" => 3], //17

            ["name" => "Fonetică", "topic_domain_id" => 4], //18 
            ["name" => "Lexicologie", "topic_domain_id" => 4], //19 
            ["name" => "Morfologie", "topic_domain_id" => 4], //20  
            ["name" => "Sintaxa", "topic_domain_id" => 4], //21
            ["name" => "Stilistică funcțională", "topic_domain_id" => 4], //22
        ];

        $a = $contentUnits[ static::$i % count($contentUnits) ];
        static::$i++;

        return [
            'name' => $a['name'],
            'topic_domain_id' => $a['topic_domain_id'],
        ];
    }
}
