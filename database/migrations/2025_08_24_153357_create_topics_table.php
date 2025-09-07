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
        Schema::create('topics', function (Blueprint $table) {
            $table->id();
        $table->string("name",500);
        $table->string("path",500)->default('');
        $table->json('content')->nullable();
        $table->unsignedBigInteger('topic_content_unit_id');

        $table->unsignedTinyInteger('status')->default(0);
        $table->timestamps();

        $table->foreign("topic_content_unit_id")->references("id")->on("topic_content_units");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('topics');
    }
};
