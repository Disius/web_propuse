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
            $table->longText('quienesSomos');
            $table->longText('mision');
            $table->longText('vision');
            $table->longText('valores');
            $table->longText('historia');
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
