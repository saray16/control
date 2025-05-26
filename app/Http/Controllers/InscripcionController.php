<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InscripcionController extends Controller
{
    public function mostrarFormulario()
    {
        return view('inscripcion');
    }

    public function procesarFormulario(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'cedula' => 'required|string',
            'estado' => 'required|string',
            'taller' => 'nullable|string',
            'curso' => 'nullable|string',
            'diplomado' => 'nullable|string',
            'horas' => 'nullable|integer',
            'tipo_formacion' => 'required|string',
        ]);

        DB::table('inscripciones')->insert([
            'nombre' => $request->input('nombre'),
            'cedula' => $request->input('cedula'),
            'estado' => $request->input('estado'),
            'taller' => $request->input('taller'),
            'curso' => $request->input('curso'),
            'diplomado' => $request->input('diplomado'),
            'horas' => $request->input('horas'),
            'tipo_formacion' => $request->input('tipo_formacion'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('success', '¡Inscripción registrada correctamente!');
    }
}
