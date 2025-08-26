<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EvaluationQuestion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EvaluationQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EvaluationQuestion::factory()->count(13)->create();
    }
}
