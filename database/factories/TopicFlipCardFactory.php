<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TopicFlipCard>
 */
class TopicFlipCardFactory extends Factory
{
    private $index = -1;
    public function definition(): array  {
        $tasks = ['task1','task2'];
        $answers = ['answer1','answer2'];
        $this->index++;
        return [
            'task' => $tasks[$this->index],
            'order_number' => $this->index+1,
            'answer' => $answers[$this->index],
            'topic_id' => 1,
        ];
    }
}
