<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Topic>
 */
class TopicFactory extends Factory
{
    private $values = [
        'Figuri de stil',
    ];
    private $index = 0;

    public function definition(): array
    {
        $subjects = ['Limba română',];

        $subjectId = 1;
        $name = $this->values[$this->index % count($this->values)];
        $this->index++;
        return [
            'name' => $name,
            'subject_id' => $subjectId,
        ];
    }

}
