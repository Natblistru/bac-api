<?php

namespace Database\Seeders;

use App\Models\TopicVideo;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TopicVideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TopicVideo::factory()->count(1)->create();
    }
}
