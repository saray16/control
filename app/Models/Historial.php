<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Historial extends Model
{
    protected $table = 'historial'; // o el nombre real de tu tabla

    protected $fillable = [
        'user_id',
        'descripcion',
        'created_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
