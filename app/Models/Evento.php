<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'tipo', // 'curso', 'taller' o 'diplomado'
        'descripcion',
        'fecha_inicio',
        'fecha_fin',
        'horas_duracion',
        'facilitador_id',
        'modalidad', // 'presencial', 'virtual', 'hibrido'
        'lugar',
        'costo',
        'cupo_maximo',
        'estado', // 'planificado', 'en_progreso', 'completado', 'cancelado'
        'imagen',
        'requisitos',
        'objetivos',
        'codigo_referencia',
    ];

    protected $casts = [
        'fecha_inicio' => 'datetime',
        'fecha_fin' => 'datetime',
    ];

    // Relación con facilitador (usuario)
    public function facilitador()
    {
        return $this->belongsTo(User::class, 'facilitador_id');
    }

    // Relación con inscripciones
    public function inscripciones()
    {
        return $this->hasMany(Inscripcion::class);
    }

    // Métodos de ayuda
    public function esCurso()
    {
        return $this->tipo === 'curso';
    }

    public function esTaller()
    {
        return $this->tipo === 'taller';
    }

    public function esDiplomado()
    {
        return $this->tipo === 'diplomado';
    }

    public function estaCompletado()
    {
        return $this->estado === 'completado';
    }

    public function cuposDisponibles()
    {
        return $this->cupo_maximo - $this->inscripciones()->count();
    }
}