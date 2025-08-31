<?php

namespace Database\Seeders;

use App\Models\EvaluationItem;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EvaluationItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EvaluationItem::factory()->count(13)->create();
    }
}
