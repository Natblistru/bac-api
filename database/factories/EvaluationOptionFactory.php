<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EvaluationOption>
 */
class EvaluationOptionFactory extends Factory
{
    private $index = 0;
    public function definition(): array  {
        $labels = ['0 p. - răspuns greșit/ lipsă',
            '1 p. - alegerea unui sinonim adecvat',
            '1 p. - enunţul nu este argumentativ',
            '2 p. - enunţul argumentativ construit corect',
            '0 p. - argumentare parțială, fără referință la text',
            '1 p. - argumentare cu referinţa la text',
        ];
        $points = [0,1,1,2,0,1];
        $label = $labels[$this->index];
        $point = $points[$this->index];

        $this->index++;
        return [
            'label' => $label,
            'points' => $point,
        ];
    }
}
