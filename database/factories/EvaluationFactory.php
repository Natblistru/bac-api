<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evaluation>
 */
class EvaluationFactory extends Factory
{
    protected static int $i = 0;

    public function definition(): array
    {

        $evaluations = [
            ["year" => 2025,  "profil" => "real",  "type" => "Sesiune de baza",   "name" => "Sesiune de baza, Limba si literatura română (2025)"],
            ["year" => 2025,  "profil" => "real",  "type" => "Sesiune suplimentara",   "name" => "Sesiune suplimentara, Limba si literatura română (2025)"],
            ["year" => 2025,  "profil" => "real",  "type" => "Teste pentru exersare1",   "name" => "Teste pentru exersare1, Limba si literatura română (2025)"],
            ["year" => 2025,  "profil" => "real",  "type" => "Teste pentru exersare2",   "name" => "Teste pentru exersare2, Limba si literatura română (2025)"],
            ["year" => 2025,  "profil" => "real",  "type" => "Pretestare",   "name" => "Pretestare, Limba si literatura română (2025)"],
            
            ["year" => 2025,  "profil" => "umanistic",  "type" => "Sesiune de baza",   "name" => "Sesiune de baza, Limba si literatura română (2025)"],
            ["year" => 2025,  "profil" => "umanistic",  "type" => "Sesiune suplimentara",   "name" => "Sesiune suplimentara, Limba si literatura română (2025)"],
            ["year" => 2025,  "profil" => "umanistic",  "type" => "Teste pentru exersare1",   "name" => "Teste pentru exersare1, Limba si literatura română (2025)"],
            ["year" => 2025,  "profil" => "umanistic",  "type" => "Teste pentru exersare2",   "name" => "Teste pentru exersare2, Limba si literatura română (2025)"],
            ["year" => 2025,  "profil" => "umanistic",  "type" => "Pretestare",   "name" => "Pretestare, Limba si literatura română (2025)"],
            
            ["year" => 2024,  "profil" => "real",  "type" => "Sesiune de baza",   "name" => "Sesiune de baza, Limba si literatura română (2024)"],
            ["year" => 2024,  "profil" => "real",  "type" => "Sesiune suplimentara",   "name" => "Sesiune suplimentara, Limba si literatura română (2024)"],
            ["year" => 2024,  "profil" => "real",  "type" => "Teste pentru exersare1",   "name" => "Teste pentru exersare1, Limba si literatura română (2024)"],
            ["year" => 2024,  "profil" => "real",  "type" => "Teste pentru exersare2",   "name" => "Teste pentru exersare2, Limba si literatura română (2024)"],
            ["year" => 2024,  "profil" => "real",  "type" => "Pretestare",   "name" => "Pretestare, Limba si literatura română (2024)"],

            
            ["year" => 2024,  "profil" => "umanistic",  "type" => "Sesiune de baza",   "name" => "Sesiune de baza, Limba si literatura română (2024)"],
            ["year" => 2024,  "profil" => "umanistic",  "type" => "Sesiune suplimentara",   "name" => "Sesiune suplimentara, Limba si literatura română (2024)"],
            ["year" => 2024,  "profil" => "umanistic",  "type" => "Teste pentru exersare1",   "name" => "Teste pentru exersare1, Limba si literatura română (2024)"],
            ["year" => 2024,  "profil" => "umanistic",  "type" => "Teste pentru exersare2",   "name" => "Teste pentru exersare2, Limba si literatura română (2024)"],
            ["year" => 2024,  "profil" => "umanistic",  "type" => "Pretestare",   "name" => "Pretestare, Limba si literatura română (2024)"],
        ];

        $a = $evaluations[ static::$i % count($evaluations) ];
        static::$i++;

        return [
            'year' => $a['year'],
            'profil' => $a['profil'],
            'type' => $a['type'],
            'name' => $a['name'],
            'subject_id' => 1,
        ];
    }
}
