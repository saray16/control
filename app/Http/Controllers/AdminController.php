<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $usuarios = User::all();
        return view('admin.dashboard', compact('usuarios'));
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
