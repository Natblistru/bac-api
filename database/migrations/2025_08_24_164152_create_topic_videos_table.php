<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('topic_videos', function (Blueprint $table) {
            $table->id();
            $table->string("title",500);
            $table->string("source",500);
            $table->unsignedBigInteger("topic_id");  
            $table->unsignedTinyInteger('status')->default(0);
            $table->text('content_text')->nullable(); // text pentru căutare
            $table->timestamps();

            $table->foreign("topic_id")->references("id")->on("topics");
        });
        // index FULLTEXT (MariaDB 10.4)
        DB::statement("CREATE FULLTEXT INDEX ft_topic_videos_content_text ON topic_videos (content_text)");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP INDEX IF EXISTS ft_topic_videos_content_text ON topic_videos");

        Schema::dropIfExists('topic_videos');
    }
};
