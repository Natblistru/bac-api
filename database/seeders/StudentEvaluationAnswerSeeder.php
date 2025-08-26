<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StudentEvaluationAnswer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentEvaluationAnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StudentEvaluationAnswer::factory()->count(3)->create();
    }
}
