<?php

namespace App\Http\Middleware;

use Closure;

class MyMiddleware
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

        echo 'id = '.$request->route('id').'<br>start<br>';
        $res = $next($request);
        echo '<br> end';
        return $res;
    }
}
