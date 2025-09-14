<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subtopic>
 */
class SubtopicFactory extends Factory
{
    protected static int $i = 0;
    public function definition(): array
    {
        $subtopics = [
            ["order_number" => 1,  "topic_id" => 87,  "name" => 'Ilustrarea în enunț a sensurilor (diferit / propriu / figurat)'],//1
            ["order_number" => 2,  "topic_id" => 87,  "name" => 'Explicarea semnificației contextuale a cuvintelor'],            //2
            ["order_number" => 1,  "topic_id" => 88,  "name" => 'Alegerea sinonimelor din listă cu argumentare'],                //3
            ["order_number" => 2,  "topic_id" => 88,  "name" => 'Propunerea unui sinonim contextual'],                           //4
            ["order_number" => 1,  "topic_id" => 90,  "name" => 'Plasarea în enunț a locațiunilor și expresiilor'],              //5
            ["order_number" => 2,  "topic_id" => 90,  "name" => 'Alcătuirea expresiilor/locațiunilor pe baza unor cuvinte date'],//6
            ["order_number" => 1,  "topic_id" => 74,  "name" => 'Identificarea tipului de personaj'],                            //7            
            ["order_number" => 1,  "topic_id" => 38,  "name" => 'Analiza unei figuri de stil'],                                  //8
            ["order_number" => 1,  "topic_id" => 74,  "name" => 'Caracterizarea morală a personajului'],                         //9
            ["order_number" => 1,  "topic_id" => 78,  "name" => 'Analiza comparativă al motivului personajului'],                //10                            
            ["order_number" => 1,  "topic_id" => 71,  "name" => 'Analiza atitudinii personajului'],                              //11
            ["order_number" => 2,  "topic_id" => 71,  "name" => 'Demonstrarea caracterul narativ al fragmentului'],              //12
            ["order_number" => 1,  "topic_id" => 106,  "name" => 'Valoarea stilistică a punctelor de suspensie'],                //13         
            ["order_number" => 1,  "topic_id" => 84,  "name" => 'Invitație pentru colegi'],                                      //14
            ["order_number" => 1,  "topic_id" => 67,  "name" => 'Mini-eseu argumentativ: limba și dialogul intercultural'],      //15
            ["order_number" => 1,  "topic_id" => 77,  "name" => 'Eseu argumentativ cu referințe literare: valoarea omului'],     //16                         
        ];        

        $a = $subtopics[ static::$i % count($subtopics) ];
        static::$i++;

        return [
            'order_number'  => $a['order_number'],
            'topic_id' => $a['topic_id'],
            'name' => $a['name'],
        ];
    }

}
