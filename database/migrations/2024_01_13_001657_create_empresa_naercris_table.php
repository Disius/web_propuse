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
        Schema::create('empresa_naercris', function (Blueprint $table) {
            $table->id();
            $table->string('quienesSomos');
            $table->string('mision');
            $table->string('vision');
            $table->string('valores');
            $table->string('historia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresa_naercris');
    }
};