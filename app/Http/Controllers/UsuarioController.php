<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('usuario.panel', compact('user'));
    }
    
}
