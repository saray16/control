<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formacion extends Model
{
    use HasFactory;

    protected $table = 'formaciones';

    protected $fillable = [
        'nombre',
        'tipo',
        'descripcion',
        'categoria',
        'categoria_filtro',
        'duracion',
        'disponible',
        'disponible_hoy',
        'icono',
    ];

    public function scopePorTipo($query, $tipo)
    {
        return $query->where('tipo', $tipo);
    }

    public function scopeDisponibles($query)
    {
        return $query->where('disponible', true);
    }

    public function scopePorCategoria($query, $categoria)
    {
        return $query->where('categoria', $categoria);
    }
 
}