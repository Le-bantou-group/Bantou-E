<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Vérifiez si l'utilisateur est authentifié et a le rôle administrateur
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request); // L'utilisateur est admin, continuez la requête
        }

        // Si l'utilisateur n'est pas admin, redirigez-le ou retournez une réponse 403
        return redirect('/home')->with('error', 'Vous n\'avez pas accès à cette page.');
    }
    
}