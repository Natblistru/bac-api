<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TopicVideoBreakpoint;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TopicVideoBreakpointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TopicVideoBreakpoint::factory()->count(7)->create();
    }
}
