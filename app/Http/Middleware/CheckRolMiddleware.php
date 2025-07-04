<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRolMiddleware
{
    public function handle(Request $request, Closure $next, $rol)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->rol !== $rol) {
            abort(403, 'No tienes permiso para acceder a esta sección.');
        }

        return $next($request);
    }
}
