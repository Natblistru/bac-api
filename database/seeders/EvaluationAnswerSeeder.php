<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EvaluationAnswer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EvaluationAnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EvaluationAnswer::factory()->count(3)->create();
    }
}
