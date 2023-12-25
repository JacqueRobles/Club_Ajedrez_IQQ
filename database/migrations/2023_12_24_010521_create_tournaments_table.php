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
        Schema::create('tournaments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('city');
            $table->string('format');
            $table->date('date');
            $table->integer('game_rythm');
            $table->string('description');
            $table->string('inscriptions');
            $table->string('category');
            $table->string('prizes');
            $table->string('contact');
            $table->string('general_referee');
            $table->string('organizer');
            $table->integer('quotas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tournaments');
    }
};
