<?php

namespace App\Http\Middleware;

use Closure;
use Cart;

class CartCount
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
        if (! Cart::content()->count())
            return back();
        else
            return $next($request);
    }
}
