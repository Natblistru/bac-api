<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TopicPresentation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TopicPresentationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TopicPresentation::factory()->count(1)->create();
    }
}
