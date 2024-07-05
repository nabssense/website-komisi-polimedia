<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectUserNonActive
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if user is authenticated
        if (Auth::check()) {
            // Get the authenticated user
            $user = Auth::user();

            // Check if user is active
            /** @var \App\Models\User $user **/
            if (!$user->isActive()) {
                // Redirect to home with a message or directly to home page
                return redirect('/')->with('error', 'Akun Anda sudah tidak aktif, Anda tidak diizinkan mengirim formulir. Silakan hubungi administrator.');
            }
        }

        return $next($request);
    }
}
