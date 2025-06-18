<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    use HasFactory;

    protected $table = 'inscripciones';

    protected $fillable = [
        'user_id',
        'nombre',
        'cedula',
        'estado', // ubicación
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
        'estado_formacion',
        'formacion_id', // nuevo campo
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function evento()
    {
        return $this->belongsTo(Evento::class);
    }

    public function formacion()
    {
        return $this->belongsTo(Formacion::class, 'formacion_id');
    }

    public function getTipoFormacionNombreAttribute()
    {
        return match ($this->tipo_formacion) {
            'C' => 'curso',
            'T' => 'taller',
            'D' => 'diplomado',
            default => 'desconocido',
        };
    }

    // Ahora obtenemos el nombre desde la relación formacion
    public function getNombreFormacionAttribute()
    {
        return $this->formacion?->nombre ?? 'Desconocido';
    }
}
