<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAgeMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->age < 18) {
            return redirect('/')->with('error', 'Under 18 not allowed');
        }

        return $next($request);
    }
}