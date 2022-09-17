<?php

namespace App\Http\Middleware\Backend;

use Closure;
use Illuminate\Http\Request;

class Kullanıcı
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->rolId == 1){
            return $next($request);
        }
        elseif (Auth::check() && Auth::user()->rolId == 2 ){
            return $next($request);
        }
        return redirect('/login');
        return redirect('/login');
    }
}
