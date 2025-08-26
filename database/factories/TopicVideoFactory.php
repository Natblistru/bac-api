<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TopicVideo>
 */
class TopicVideoFactory extends Factory
{
     private $index = 0;
 
     public function definition(): array
     {
        $titles = [
            'Figuri de stil',
        ];
        $sources = [
            'https://www.youtube.com/embed/J4fZmULfzP4?si=xvNRIJpicjoblLKv',
        ];
        $title = $titles[$this->index];
        $source = $sources[$this->index];

        $this->index++;
        return [
            'title' => $title,
            'source' => $source,
            'topic_id' => 1,
        ];
    }
}
