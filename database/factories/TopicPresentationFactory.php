<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TopicPresentation>
 */
class TopicPresentationFactory extends Factory
{
    public function definition(): array
    {
        $path = 'https://docs.google.com/presentation/d/e/2PACX-1vQ3Z8ok9EBfP1eIQkLPTtI6iGiqobEAlIQs8bXYWb7begDAHnLtxR_StkIals3vEQ/pubembed?start=false&loop=false&delayms=3000';
        $name = 'Figuri de stil';

        return [
            'name' => $name,
            'path' => $path,
            'topic_id' => 1,
        ];
    }
}
