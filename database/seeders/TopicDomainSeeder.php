<?php

namespace Database\Seeders;

use App\Models\TopicDomain;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TopicDomainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TopicDomain::factory()->count(4)->create();
    }
}
