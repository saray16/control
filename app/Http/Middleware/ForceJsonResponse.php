<?php

// app/Http/Middleware/ForceJsonResponse.php
namespace App\Http\Middleware;

use Closure;

class ForceJsonResponse
{
    public function handle($request, Closure $next)
    {
        $request->headers->set('Accept', 'application/json');
        return $next($request);
    }
}