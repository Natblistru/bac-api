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
        Schema::create('topic_presentations', function (Blueprint $table) {
            $table->id();
            $table->string("name",500);
            $table->string("path",1000);
            $table->unsignedBigInteger("topic_id");
            $table->unsignedTinyInteger('status')->default(0);
            $table->text('content_text')->nullable(); // text pentru căutare
            $table->string('thumbnail_path')->nullable();   // ex: presentations/thumbnails/abc.jpg
            $table->unsignedInteger('thumb_w')->nullable();
            $table->unsignedInteger('thumb_h')->nullable();
            $table->timestamps();


            $table->foreign("topic_id")->references("id")->on("topics");

        });
        // index pentru căutare fulltext
        DB::statement("CREATE FULLTEXT INDEX ft_topic_presentations_content_text ON topic_presentations (content_text)");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP INDEX IF EXISTS ft_topic_presentations_content_text ON topic_presentations");

        Schema::dropIfExists('topic_presentations');
    }
};
