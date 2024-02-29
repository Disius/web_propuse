<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacante extends Model
{
    use HasFactory;

    protected $fillable = [
        'cargo', 'cargo_complemento', 'area', 'descripcion_tareas', 'estado',
        'cuidad', 'codigo_postal', 'jornada', 'lugar_trabajo', 'tipo_contrato',
        'salario', 'experiencia', 'edad_minima', 'edad_maxima', 'escolaridad',
        'idiomas', 'nivel_idioma', 'destrezas_conocimientos', 'licencia_conducir',
        'disponibilidad_viajar', '	cambio_residencia', 'personas_discapacidad'
    ];

    protected $primaryKey = 'id';

    protected $table = 'vacante';
}
