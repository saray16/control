<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF; // si usas barryvdh/laravel-dompdf

class CertificadoController extends Controller
{
    public function descargar($tipo, $id)
    {
        // Aquí recuperas la info según tipo e id, ejemplo:
        // $data = Model::findOrFail($id);

        // Luego cargas la vista del certificado con datos
        $pdf = PDF::loadView('certificado.plantilla', compact('tipo', 'id'));

        return $pdf->download("certificado_{$tipo}_{$id}.pdf");
    }
}
