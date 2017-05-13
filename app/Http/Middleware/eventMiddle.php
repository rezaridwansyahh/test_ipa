<?php

namespace App\Http\Middleware;

use Closure;

class eventMiddle
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
        if(session()->has('event_token')){
            return $next($request);
        }
        else{
            return redirect('convention/login');
        }
    }
}
