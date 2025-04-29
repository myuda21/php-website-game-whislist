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
        Schema::create('rawgGames', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->date('released')->nullable();
        $table->string('background_image')->nullable();
        $table->float('rating')->nullable();
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rawg_games');
    }
};
