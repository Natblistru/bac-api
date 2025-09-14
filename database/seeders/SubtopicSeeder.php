<?php

namespace Database\Seeders;

use App\Models\Subtopic;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubtopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subtopic::factory()->count(16)->create();
    }
}
