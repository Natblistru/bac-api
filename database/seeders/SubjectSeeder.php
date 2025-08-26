<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void    {
        Subject::factory()
            ->count(3)
            ->sequence(
                ['name' => 'Limba română'],
                ['name' => 'Matematica'],
                ['name' => 'Istoria'],
            )
            ->create();
    }

}
