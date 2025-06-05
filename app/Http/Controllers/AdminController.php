<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $usuarios = User::all();
        $control_estudio = DB::table('control_de_estudios')->take(10)->get();
        #dd($control_estudio);
        return view('dashboard', compact('usuarios', 'control_estudio'));
    }

    public function create(Request $request)
    {
        $nombre = $request->input("nombre");
        #guardar los datos en la bd.
        return "HOLA";
    }

    public function edit($id)
    {
        $usuario = User::findOrFail($id);
        return view('admin.edit', compact('usuario'));
    }

    public function update(Request $request, $id)
    {
        $usuario = User::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,'.$usuario->id,
            'rol' => 'required|string|in:admin,usuario',
        ]);

        $usuario->update([
            'name' => $request->name,
            'email' => $request->email,
            'rol' => $request->rol,
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Usuario actualizado correctamente.');
    }

    public function destroy($id)
    {
        $usuario = User::findOrFail($id);
        $usuario->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Usuario eliminado correctamente.');
    }
}
