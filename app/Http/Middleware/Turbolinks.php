<?php

namespace App\Http\Middleware;

use Closure;

class Turbolinks
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
        $response = $next($request);

        if (session()->has('turbolinks-redirect')) {
            return $response->header('Turbolinks-Location', session()->get('turbolinks-redirect'));
        }

        return $response;
    }
}
