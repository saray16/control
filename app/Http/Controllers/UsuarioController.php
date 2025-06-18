<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscripcion;

class UsuarioController extends Controller
{
    public function index()
    {
        $inscripciones = Inscripcion::where('user_id', auth()->id())->get();

        return view('usuario.panel', compact('inscripciones'));
    }
}


