<?php

namespace App\Http\Middleware;

use Closure;

class CekUser
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
        // $data = session('type');
        if (session('type') == 'user') {
            return $next($request);
        }
        return response()->view('403');
    }
}
