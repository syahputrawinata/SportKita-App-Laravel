<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class IsLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            //jika ada diperbolehkan akses
            return $next($request);
        }else {
            //jika tidak ada maka akan diarahkan ke halaman login
            return redirect()->route('auth.form')->with('failed', 'Silahkan Login Terlebih Dahulu!');
        }
    }
}
