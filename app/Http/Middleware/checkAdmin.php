<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class checkAdmin
{
   
public function handle(Request $request, Closure $next){
    if(Auth::check()){

            if (Auth::user()->role === '-1' ) {
                return $next($request);
            }

            elseif (Auth::user()->role === '1') {
            return $next($request);

            }
        }
        return redirect('land');
    }
}