<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class EnsureUserIsAuthenticatedWithWarning
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            // Set a session variable to display the warning message
            session()->flash('warning.mustlogin', 'You must be logged in to access this page.');

            // Redirect to the login page
            return redirect()->route('auth.masuk.index');
        }

        return $next($request);
    }
}
