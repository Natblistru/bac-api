<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EvaluationSource;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EvaluationSourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EvaluationSource::factory()->count(1)->create();
    }
}
