<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $role)
    {
        if (Auth::check() && Auth::user()->is_admin == $role) {
            return $next($request);
        }

        return response()->json(['error' => 'Unauthorized'], 403);
        
        if (auth()->check() && auth()->user()->is_admin) {
            return $next($request);
        }

        return redirect('/homeadmin');
    }
}
