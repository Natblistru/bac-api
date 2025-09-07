<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\TopicSeeder;
use Database\Seeders\SubjectSeeder;
use Database\Seeders\EvaluationSeeder;
use Database\Seeders\TopicImageSeeder;
use Database\Seeders\TopicVideoSeeder;
use Database\Seeders\TopicDomainSeeder;
use Database\Seeders\EvaluationItemSeeder;
use Database\Seeders\EvaluationAnswerSeeder;
use Database\Seeders\EvaluationOptionSeeder;
use Database\Seeders\EvaluationSourceSeeder;
use Database\Seeders\EvaluationQuestionSeeder;
use Database\Seeders\TopicVideoBreakpointSeeder;
use Database\Seeders\EvaluationAnswerOptionSeeder;
use Database\Seeders\StudentEvaluationAnswerSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            SubjectSeeder::class,
            TopicDomainSeeder::class,
            TopicContentUnitSeeder::class,
            TopicSeeder::class,
            TopicImageSeeder::class,
            TopicFlipCardSeeder::class,
            TopicVideoSeeder::class,
            TopicVideoBreakpointSeeder::class,
            TopicPresentationSeeder::class,
            StudentSeeder::class,
            EvaluationSeeder::class,
            EvaluationSourceSeeder::class,
            EvaluationItemSeeder::class,
            EvaluationQuestionSeeder::class,
            EvaluationAnswerSeeder::class,
            EvaluationOptionSeeder::class,
            EvaluationAnswerOptionSeeder::class,
            StudentEvaluationAnswerSeeder::class,
        ]);

    }
}
