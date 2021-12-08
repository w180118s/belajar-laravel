<?php

namespace App\Http\Middleware;

use Closure;

class IsLoginMiddleware
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
        if(session('berhasil')){
            return redirect('/dashboard');
        }
        return $next($request);
    }
}
