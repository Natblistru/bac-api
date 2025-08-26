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
        Schema::create('topic_video_breakpoints', function (Blueprint $table) {
            $table->id();
            $table->string("name",200);
            $table->string("time",10);
            $table->string("seconds",10);
            $table->unsignedBigInteger("topic_video_id");
            $table->unsignedTinyInteger('status')->default(0);
            $table->timestamps();

            $table->foreign("topic_video_id")->references("id")->on("topic_videos");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('topic_video_breakpoints');
    }
};
