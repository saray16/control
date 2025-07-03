<?php

namespace App\Http\Controllers;

use App\Models\Formacion;
use App\Models\Inscripcion;
use Illuminate\Http\Request;

class FacilitadorController extends Controller
{
    public function index()
    {
        $formaciones = Formacion::where('facilitador_id', auth()->id())->get();
        return view('facilitador.dashboard', compact('formaciones'));
    }

    public function verEstudiantes($id)
    {
        $inscripciones = Inscripcion::where('formacion_id', $id)->get();
        return view('facilitador.estudiantes', compact('inscripciones'));
    }

    public function aprobar($id)
    {
        $inscripcion = Inscripcion::findOrFail($id);
        $inscripcion->aprobado_por_facilitador = true;
        $inscripcion->save();

        return back()->with('success', 'Estudiante aprobado correctamente');
    }

    public function rechazar($id)
    {
        $inscripcion = Inscripcion::findOrFail($id);
        $inscripcion->aprobado_por_facilitador = false;
        $inscripcion->save();

        return back()->with('success', 'Estudiante marcado como reprobado');
    }
}
