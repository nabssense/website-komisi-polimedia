<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUserStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Memeriksa jika user tidak aktif, maka logout dan redirect ke halaman login dengan pesan error
        if ($request->user() && !$request->user()->isActive()) {
            auth()->logout(); // Logout user
            return redirect()->route('auth.masuk.index')->with('error', 'Akun Anda tidak aktif. Silakan hubungi administrator.');
        }

        return $next($request);
    }
}
