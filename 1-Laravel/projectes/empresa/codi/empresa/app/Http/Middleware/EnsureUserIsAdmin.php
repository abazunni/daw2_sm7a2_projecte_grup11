<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check() || Auth::user()->role !== 'administrador') {
            if (Auth::check()) {
                // If user is logged in but not an admin, redirect to consultor dashboard
                return redirect()->route('consultor.dashboard')
                    ->with('error', 'You do not have permission to access this page.');
            } else {
                // If user is not logged in, redirect to login page
                return redirect()->route('login')
                    ->with('error', 'You must be logged in to access this page.');
            }
        }

        return $next($request);
    }
}
