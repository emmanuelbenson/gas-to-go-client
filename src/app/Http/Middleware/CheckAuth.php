<?php

namespace App\Http\Middleware;

use Closure;
use App\Auth\Checker;

class CheckAuth
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
        if (!$request->session()->has('authUser'))
            return redirect()->route('signIn');

        return $next($request);
    }
}
