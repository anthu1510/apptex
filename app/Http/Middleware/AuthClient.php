<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Redirect;

class AuthClient
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
        $sess=$request->session()->get('userid');

        if($sess)
        {
            return $next($request);
        }
        else
        {
            return Redirect::to('/');
        }


    }
}
