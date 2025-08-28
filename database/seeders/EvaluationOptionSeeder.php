<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EvaluationOption;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EvaluationOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EvaluationOption::factory()->count(40)->create();
    }
}
