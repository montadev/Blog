<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class Checkmenbre
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

         $user = Auth::user();
        $menbre=$user->test;
        if($menbre!=1){
              
            return redirect()->route('index');
        }
        return $next($request);
    }
}
