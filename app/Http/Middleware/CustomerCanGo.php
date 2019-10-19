<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class CustomerCanGo
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
        if (Session::get('customerId'))
            return redirect('/');
        else
            return $next($request);
    }
}
