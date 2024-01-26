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
        Schema::create('vacante', function (Blueprint $table) {
            $table->id();
            $table->longText('cargo');
            $table->longText('cargo_complemento');
            $table->bigInteger('area');
            $table->longText('descripcion_tareas');
            $table->bigInteger('estado');
            $table->bigInteger('cuidad');
            $table->bigInteger('codigo_postal');
            $table->longText('jornada');
            $table->longText('lugar_trabajo');
            $table->longText('tipo_contrato');
            $table->bigInteger('salario');
            $table->longText('experiencia');
            $table->bigInteger('edad_minima');
            $table->bigInteger('edad_maxima');
            $table->longText('escolaridad');
            $table->longText('idiomas');
            $table->longText('nivel_idioma');
            $table->longText('destrezas_conocimientos');
            $table->bigInteger('licencia_conducir');
            $table->bigInteger('disponibilidad_viajar');
            $table->bigInteger('cambio_residencia');
            $table->bigInteger('personas_discapacidad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacante');
    }
};
