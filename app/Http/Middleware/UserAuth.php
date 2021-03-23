<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAuth
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
        if($request->path()=="login" && $request->session()->has('user'))
//The path method returns the request's path information and the path method will return login page    
//session()->has is a method who returns true if the item is present and is not null and user hosse key
//ai 2ta condition true hole home page(dashboard) a jabe tokhon login ba onno page a jabe na jotokhon na logout kora hoi.atai session er kaj
        {
            return redirect('/');
        }
        return $next($request);
    }
}
