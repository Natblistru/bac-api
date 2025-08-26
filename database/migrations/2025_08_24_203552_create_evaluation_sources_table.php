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
        Schema::create('evaluation_sources', function (Blueprint $table) {
            $table->id();
            $table->integer("order_number")->default(1);
            $table->json('content')->nullable();

            $table->unsignedBigInteger("evaluation_id");
            $table->timestamps();

            $table->foreign("evaluation_id")->references("id")->on("evaluations");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluation_sources');
    }
};
