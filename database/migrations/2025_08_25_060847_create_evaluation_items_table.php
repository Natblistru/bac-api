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
        Schema::create('evaluation_items', function (Blueprint $table) {
            $table->id();
            $table->integer("order_number")->default(1);
            $table->json('task')->nullable();

            $table->unsignedBigInteger("evaluation_source_id");
            $table->unsignedBigInteger("subtopic_id")->nullable();
            $table->tinyInteger("status")->default(0);
            $table->timestamps();

            $table->foreign("evaluation_source_id")->references("id")->on("evaluation_sources");
            $table->foreign("subtopic_id")->references("id")->on("subtopics");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluation_items');
    }
};
