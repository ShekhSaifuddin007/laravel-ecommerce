<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class CustomerRedirect
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
        if (! Session::get('customerId')) {
            return redirect('sing-up');
        }
        return $next($request);
    }
}
