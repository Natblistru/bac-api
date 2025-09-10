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
        Schema::create('topic_flip_cards', function (Blueprint $table) {
            $table->id();
            $table->json("task",500)->nullable();
            $table->json("answer",5000)->nullable();
            $table->unsignedTinyInteger('order_number');
            $table->unsignedBigInteger("topic_id");  
            $table->unsignedTinyInteger('status')->default(0);
            $table->timestamps();

            $table->foreign("topic_id")->references("id")->on("topics"); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('topic_flip_cards');
    }
};
