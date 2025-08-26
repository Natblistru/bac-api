<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('student_evaluation_answers', function (Blueprint $table) {
            $table->id();
            $table->integer("points")->default(0);
            $table->unsignedBigInteger("student_id");
            $table->unsignedBigInteger("evaluation_answer_option_id");
            $table->json('content_student')->nullable();
            $table->tinyInteger("status")->default(0);
            $table->timestamps();

            $table->foreign("student_id")->references("id")->on("students");
            $table->foreign("evaluation_answer_option_id")->references("id")->on("evaluation_answer_options");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_evaluation_answers');
    }
};
