<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckDirectiveRole
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::user() || Auth::user()->role != 'directive') {
            return redirect('/');
        }

        return $next($request);
    }
}