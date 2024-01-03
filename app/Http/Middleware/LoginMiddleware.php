<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;
use Alert;

class LoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Session::has("login")){
            return $next($request);
        }else{
            Alert::error('Gagal','Memerlukan authentifikasi terlebih dahulu!');
            return back()->with('gagal','Silahkan login terlebih dahulu!');
        }
        return $next($request);
    }
}
