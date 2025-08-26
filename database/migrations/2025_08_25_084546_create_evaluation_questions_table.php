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
        Schema::create('evaluation_questions', function (Blueprint $table) {
            $table->id();
            $table->integer("order_number")->default(1);
            $table->json('task')->nullable();
            $table->json('hint')->nullable();
            $table->json('content_settings')->nullable();
            $table->string("placeholder",200)->nullable();
            $table->enum('type', ['Input', 'Textarea', 'Virtual']);

            $table->unsignedBigInteger("evaluation_item_id");
            $table->tinyInteger("status")->default(0);
            $table->timestamps();

            $table->foreign("evaluation_item_id")->references("id")->on("evaluation_items");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluation_questions');
    }
};
