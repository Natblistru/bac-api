<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TopicContentUnit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TopicContentUnitSeeder extends Seeder
{
    public function run(): void    {
        TopicContentUnit::factory()->count(22)->create();
    }

}
