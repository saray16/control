<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Inscripcion;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        $usuarios = User::all();
        $totalUsuarios = $usuarios->count();
        $control_estudio = DB::table('control_de_estudios')->take(10)->get();
        
        // Modificado: Cargar inscripciones con relaciones y ordenar
        $inscripciones = Inscripcion::with(['user', 'formacion'])
            ->orderBy('created_at', 'desc')
            ->get();
            
        return view('dashboard', compact('usuarios', 'control_estudio', 'totalUsuarios', 'inscripciones'));
    }

    // Métodos de usuarios (sin cambios)
    public function create(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'rol' => 'required|in:admin,usuario',
            'password' => 'required|string|min:6',
        ]);
    
        User::create([
            'name' => $request->nombre,
            'email' => $request->email,
            'rol' => $request->rol,
            'password' => Hash::make($request->password),
        ]);
    
        return redirect()->route('admin.dashboard')->with('success', 'Usuario creado correctamente.');
    }
    
    public function update(Request $request, $id)
    {
        $usuario = User::findOrFail($id);

        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,'.$usuario->id,
            'rol' => 'required|in:admin,usuario',
            'password' => 'nullable|min:6'
        ]);

        $data = [
            'name' => $request->nombre,
            'email' => $request->email,
            'rol' => $request->rol,
        ];

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $usuario->update($data);

        return redirect()->route('admin.dashboard')->with('success', 'Usuario actualizado correctamente.');
    }

    public function destroy($id)
    {
        $usuario = User::findOrFail($id);
        $usuario->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Usuario eliminado correctamente.');
    }

    // Métodos de certificados (con pequeñas mejoras)
    public function editarCertificado($id)
    {
        $inscripcion = Inscripcion::findOrFail($id);
        return view('admin.certificado_edit', compact('inscripcion'));
    }

    public function actualizarCertificado(Request $request, $id)
    {
        $request->validate([
            'certificado_pdf' => 'required|mimes:pdf|max:5120',
        ]);

        $inscripcion = Inscripcion::findOrFail($id);

        if ($inscripcion->certificado_pdf_path) {
            Storage::delete($inscripcion->certificado_pdf_path);
        }

        $path = $request->file('certificado_pdf')->store('certificados');
        $inscripcion->certificado_pdf_path = $path;
        $inscripcion->save();

        return redirect()->route('admin.dashboard')->with('success', 'Certificado PDF actualizado correctamente.');
    }

    public function aprobarInscripcion($id)
    {
        $inscripcion = Inscripcion::findOrFail($id);
        $inscripcion->update([
            'estado_formacion' => 'aprobado',
            'codigo_certificado' => 'CERT-' . strtoupper(substr(md5(uniqid()), 0, 8)),
            'fecha_aprobacion' => now()
        ]);

        return redirect()->back()->with('success', 'Inscripción aprobada correctamente.');
    }

    public function rechazarInscripcion($id)
    {
        $inscripcion = Inscripcion::findOrFail($id);
        $inscripcion->update([
            'estado_formacion' => 'rechazado',
            'fecha_rechazo' => now()
        ]);

        return redirect()->back()->with('success', 'Inscripción rechazada correctamente.');
    }

    // Nuevo método para descargar certificados
    public function descargarCertificado($id)
    {
        $inscripcion = Inscripcion::findOrFail($id);
        
        if (!$inscripcion->certificado_pdf_path) {
            return redirect()->back()
                ->with('error', 'Este certificado no tiene archivo PDF asociado.');
        }

        return Storage::download($inscripcion->certificado_pdf_path);
    }
}