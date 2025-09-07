<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TopicDomain>
 */
class TopicDomainFactory extends Factory
{
    protected static int $i = 0;
    public function definition(): array
    {
        $domains = [
            ["name" => "Identitate lingvistică și culturală"],
            ["name" => "Literatură și interpretare texte"],
            ["name" => "Producerea textelor scrise"],
            ["name" => "Aplicarea normelor limbii"],
        ];

        $subjectId = 1;
        $a = $domains[ static::$i % count($domains) ];
        static::$i++;

        return [
            'name' => $a['name'],
            'subject_id' => $subjectId,
        ];
    }
}
