<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checklink
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
        $domain =$_SERVER["HTTP_HOST"];
        $path = $_SERVER["HTTP_HOST"];

        // return redirect("https://www.google.com/");

        dd($domain);
        return $next($request);
    }
}
