<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscripcion;

class InscripcionController extends Controller
{
    public function mostrarFormulario(Request $request)
    {
        $tipo = $request->input('tipo');
        return view('inscripcion', ['tipoSeleccionado' => $tipo]);
    }

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
            'facilitador' => 'nullable|string',
            'codigo_facilitador' => 'nullable|string',
        ]);

        $inscripcion = new Inscripcion();
        $inscripcion->nombre = $request->input('nombre');
        $inscripcion->cedula = $request->input('cedula');
        $inscripcion->estado = $request->input('estado');
        $inscripcion->estado_formacion = 'pendiente';
        $inscripcion->taller = $request->input('taller');
        $inscripcion->curso = $request->input('curso');
        $inscripcion->diplomado = $request->input('diplomado');
        $inscripcion->horas = $request->input('horas');
        $inscripcion->tipo_formacion = $request->input('tipo_formacion');
        $inscripcion->facilitador = $request->input('facilitador');
        $inscripcion->codigo_facilitador = $request->input('codigo_facilitador');
        $inscripcion->user_id = auth()->id();
        $inscripcion->save();

        return redirect()->back()->with('success', '¡Inscripción registrada correctamente!');
    }

    public function verPanel()
    {
        $inscripciones = Inscripcion::where('user_id', auth()->id())->get();
        return view('usuario.panel', compact('inscripciones'));
    }

    public function actualizarEstado(Request $request, $id)
    {
        $request->validate([
            'estado_formacion' => 'required|in:pendiente,aprobado,rechazado',
        ]);

        $inscripcion = Inscripcion::findOrFail($id);
        $inscripcion->estado_formacion = $request->estado_formacion;
        $inscripcion->save();

        return redirect()->back()->with('success', 'Estado actualizado correctamente.');
    }
}
