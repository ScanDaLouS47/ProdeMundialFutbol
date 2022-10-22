<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ControlAcceso
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
        $blockAccess = true;

        if(auth()->user()->id === 1) $blockAccess = false;

        if($blockAccess){
            return redirect('login')->with('errorAccess', 'Debe ser administrador para entrar a esta ventana.');
        }
        return $next($request);
    }
}
