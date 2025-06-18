<?php

// app/Http/Controllers/FormacionController.php

namespace App\Http\Controllers;

use App\Models\Formacion;
use Illuminate\Http\Request;

class FormacionController extends Controller
{
    public function index()
    {
        // This method displays all types of formations for the 'welcome' view
        $talleres = Formacion::where('tipo', 'T')
                    ->where('disponible', true)
                    ->orderBy('created_at', 'desc')
                    ->get(); // Using get() here, not paginate()

        $cursos = Formacion::where('tipo', 'C')
                   ->where('disponible', true)
                   ->orderBy('created_at', 'desc')
                   ->get();

        $diplomados = Formacion::where('tipo', 'D')
                       ->where('disponible', true)
                       ->orderBy('created_at', 'desc')
                       ->get();

        return view('welcome', compact('talleres', 'cursos', 'diplomados'));
    }

    // You can add a show method if you have individual formation pages
    public function show($id)
    {
        $formacion = Formacion::findOrFail($id);
        return view('formaciones.show', compact('formacion')); // Assuming you have a formaciones.show blade
    }

    // --- ADD THIS METHOD HERE ---
    public function filtrarPorCategoria($categoria)
    {
        // This method filters formations by category and uses pagination
        $formaciones = Formacion::porCategoria($categoria) // Make sure scopePorCategoria exists in Formacion model
            ->disponibles()
            ->orderBy('disponible_hoy', 'desc')
            ->orderBy('created_at', 'desc')
            ->paginate(6); // Using paginate() here

        return view('formaciones.index', compact('formaciones', 'categoria'));
    }
  
}