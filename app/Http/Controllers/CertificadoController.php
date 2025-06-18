<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Inscripcion;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;

class CertificadoController extends Controller
{
    public function descargar($tipo, $id)
    {
        Log::info("Intentando descargar certificado", ['tipo' => $tipo, 'id' => $id]);

        $tipo = strtolower($tipo);
        if (!in_array($tipo, ['curso', 'taller', 'diplomado'])) {
            abort(404, 'Tipo de certificado no válido');
        }

        $inscripcion = Inscripcion::with('user')->findOrFail($id);

        $mapaTipo = ['C' => 'curso', 'T' => 'taller', 'D' => 'diplomado'];
        if (!isset($mapaTipo[$inscripcion->tipo_formacion]) || $mapaTipo[$inscripcion->tipo_formacion] !== $tipo) {
            abort(404, 'Tipo de formación incorrecto');
        }

        if (Gate::denies('view-certificado', $inscripcion)) {
            abort(403, 'No tienes permiso para ver este certificado');
        }

        // Validación corregida aquí
        if (strtolower($inscripcion->estado_formacion) !== 'aprobado') {
            return redirect()->back()->with('error', 'Esta inscripción no tiene certificado disponible');
        }

        $data = [
            'inscripcion' => $inscripcion,
            'fecha_emision' => now()->format('d/m/Y'),
            'codigo_verificacion' => $this->generarCodigoVerificacion($inscripcion),
        ];

        $pdf = PDF::loadView('certificados.' . $tipo, $data)
            ->setPaper('a4', 'landscape')
            ->setOptions([
                'isHtml5ParserEnabled' => true,
                'isRemoteEnabled' => true,
            ]);

        $nombreArchivo = "Certificado_{$tipo}_" . str_replace(' ', '_', $inscripcion->nombre) . "_" . now()->format('Ymd') . ".pdf";

        return $pdf->download($nombreArchivo);
    }

    protected function generarCodigoVerificacion($inscripcion)
    {
        return hash('sha256',
            $inscripcion->id .
            $inscripcion->user_id .
            config('app.key')
        );
    }
}