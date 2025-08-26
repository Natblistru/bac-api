<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EvaluationAnswerOption>
 */
class EvaluationAnswerOptionFactory extends Factory
{
    protected static int $i = 0;
    public function definition(): array
    {
        $answers_opt = [
            ["answerId" => 1,  "optionId" => 1],
            ["answerId" => 1,  "optionId" => 2],
            ["answerId" => 2,  "optionId" => 1],
            ["answerId" => 2,  "optionId" => 3],
            ["answerId" => 2,  "optionId" => 4],
            ["answerId" => 3,  "optionId" => 5],
            ["answerId" => 3,  "optionId" => 6],
        ];
        
        $a = $answers_opt[ static::$i % count($answers_opt) ];
        static::$i++;

        return [
            'evaluation_answer_id' => $a['answerId'],
            'evaluation_option_id'=> $a['optionId'],
        ];
    }
}
