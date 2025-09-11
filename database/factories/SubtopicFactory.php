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
            ["order_number" => 1,  "topic_id" => 87,  "name" => 'Ilustrarea în enunț a sensurilor (diferit / propriu / figurat)'],
            ["order_number" => 2,  "topic_id" => 87,  "name" => 'Explicarea semnificației contextuale a cuvintelor'],
            ["order_number" => 1,  "topic_id" => 88,  "name" => 'Alegerea sinonimelor din listă cu argumentare'],
            ["order_number" => 2,  "topic_id" => 88,  "name" => 'Propunerea unui sinonim contextual'],
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
