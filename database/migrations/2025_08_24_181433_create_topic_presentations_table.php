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
        Schema::create('topic_presentations', function (Blueprint $table) {
            $table->id();
            $table->string("name",500);
            $table->string("path",1000);
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
        Schema::dropIfExists('topic_presentations');
    }
};
