<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class pengecekan
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$roles)
{
    if (Auth::check() && in_array(Auth::user()->id_role, $roles)) {
        return $next($request);
    }

    // Redirect jika user tidak memiliki akses
    return back()->with('error', 'Anda tidak memiliki akses ke halaman ini.');
}

}
