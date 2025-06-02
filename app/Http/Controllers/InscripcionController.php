<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InscripcionController extends Controller
{
    // Mostrar el formulario vacío o con tipo de formación preseleccionado
    public function mostrarFormulario(Request $request)
    {
        $tipo = $request->input('tipo'); // Captura el tipo desde la URL o el formulario
        return view('inscripcion', ['tipoSeleccionado' => $tipo]);
    }

    // Procesar el formulario
    public function procesarFormulario(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'cedula' => 'required|string',
            'estado' => 'required|string',
            'taller' => 'nullable|required_if:tipo_formacion,T|string',
            'curso' => 'nullable|required_if:tipo_formacion,C|string',
            'diplomado' => 'nullable|required_if:tipo_formacion,D|string',
            'horas' => 'nullable|integer',
            'tipo_formacion' => 'required|string|in:T,C,D',
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
