<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class FacultyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!$request->session()->has('faculty_id')){
            return redirect()->back();
        }
        return $next($request);
    }
}
