<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMid
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
        if (!session()->has('AdLoggedIn')) {
            return redirect('AdLogIn')->with('LogInFirst', 'To access this pages , You have to Log In first..!');
        }

        return $next($request);
    }
}
