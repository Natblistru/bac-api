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
        Schema::create('topic_images', function (Blueprint $table) {
            $table->id();
            $table->string("path",1000)->default('');
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
        Schema::dropIfExists('topic_images');
    }
};
