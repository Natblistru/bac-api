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
            ["answerId" => 4,  "optionId" => 1],
            ["answerId" => 4,  "optionId" => 7],
            ["answerId" => 4,  "optionId" => 8],
            ["answerId" => 5,  "optionId" => 1],
            ["answerId" => 5,  "optionId" => 7],
            ["answerId" => 5,  "optionId" => 8],
            ["answerId" => 6,  "optionId" => 1],
            ["answerId" => 6,  "optionId" => 7],
            ["answerId" => 6,  "optionId" => 8],
            ["answerId" => 7,  "optionId" => 1],
            ["answerId" => 7,  "optionId" => 9],
            ["answerId" => 8,  "optionId" => 1],
            ["answerId" => 8,  "optionId" => 10],
            ["answerId" => 8,  "optionId" => 11],
            ["answerId" => 9,  "optionId" => 1],
            ["answerId" => 9,  "optionId" => 10],
            ["answerId" => 9,  "optionId" => 11],
            ["answerId" => 10, "optionId" => 1],
            ["answerId" => 10, "optionId" => 12],
            ["answerId" => 10, "optionId" => 13],
            ["answerId" => 11, "optionId" => 1],
            ["answerId" => 11, "optionId" => 14],
            ["answerId" => 11, "optionId" => 15],
            ["answerId" => 11, "optionId" => 16],
            ["answerId" => 12, "optionId" => 1],
            ["answerId" => 12, "optionId" => 17],
            ["answerId" => 12, "optionId" => 18],
            ["answerId" => 13, "optionId" => 1],
            ["answerId" => 13, "optionId" => 17],
            ["answerId" => 13, "optionId" => 18],
            ["answerId" => 14, "optionId" => 19],
            ["answerId" => 14, "optionId" => 20],
            ["answerId" => 15, "optionId" => 1],
            ["answerId" => 15, "optionId" => 21],
            ["answerId" => 15, "optionId" => 22],
            ["answerId" => 16, "optionId" => 23],
            ["answerId" => 16, "optionId" => 24],
            ["answerId" => 17, "optionId" => 1],
            ["answerId" => 17, "optionId" => 25],
            ["answerId" => 17, "optionId" => 26],
            ["answerId" => 18, "optionId" => 27],
            ["answerId" => 18, "optionId" => 28],
            ["answerId" => 19, "optionId" => 29],
            ["answerId" => 19, "optionId" => 30],
            ["answerId" => 20, "optionId" => 31],
            ["answerId" => 20, "optionId" => 32],
            ["answerId" => 20, "optionId" => 33],
            ["answerId" => 21, "optionId" => 31],
            ["answerId" => 21, "optionId" => 32],
            ["answerId" => 21, "optionId" => 33],
            ["answerId" => 22, "optionId" => 19],
            ["answerId" => 22, "optionId" => 20],
            ["answerId" => 23, "optionId" => 1],
            ["answerId" => 23, "optionId" => 34],
            ["answerId" => 24, "optionId" => 1],
            ["answerId" => 24, "optionId" => 35],
            ["answerId" => 24, "optionId" => 36],
            ["answerId" => 25, "optionId" => 37],
            ["answerId" => 25, "optionId" => 38],
            ["answerId" => 25, "optionId" => 39],
            ["answerId" => 25, "optionId" => 40],
            ["answerId" => 26, "optionId" => 37],
            ["answerId" => 26, "optionId" => 38],
            ["answerId" => 26, "optionId" => 39],
            ["answerId" => 26, "optionId" => 40],
        ];
        
        $a = $answers_opt[ static::$i % count($answers_opt) ];
        static::$i++;

        return [
            'evaluation_answer_id' => $a['answerId'],
            'evaluation_option_id'=> $a['optionId'],
        ];
    }
}
