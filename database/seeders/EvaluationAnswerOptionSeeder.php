<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EvaluationAnswerOption;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EvaluationAnswerOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EvaluationAnswerOption::factory()->count(7)->create();
    }
}
