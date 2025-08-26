<?php

namespace Database\Seeders;

use App\Models\TopicImage;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TopicImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TopicImage::factory()->count(1)->create();
    }
}
