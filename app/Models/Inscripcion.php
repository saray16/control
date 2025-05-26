<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'cedula',
        'estado',
        'taller',
        'curso',
        'diplomado',
        'horas',
        'tipo_formacion',
        'dia',
        'mes',
        'anio',
        'facilitador',
        'codigo_facilitador',
    ];
}
