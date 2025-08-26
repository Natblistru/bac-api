<?php

namespace Database\Seeders;

use App\Models\TopicFlipCard;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TopicFlipCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TopicFlipCard::factory()->count(2)->create();
    }
}
