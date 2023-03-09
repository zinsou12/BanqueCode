<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class VerifierEtape
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
        if(Auth::user()->code==0)
        {
            if(Auth::user()->etape==1)
            {
                $request->session()->put('transfertemit', true);
                
                return redirect()->route('etape1');
            }
    
            if(Auth::user()->etape==2)
            {
                $request->session()->put('etape1termine', true);
                
                return redirect()->route('etape2');
            }
    
    
            if(Auth::user()->etape==3)
            {
                $request->session()->put('etape2termine', true);
                
                return redirect()->route('etape3');
            }
    
    
            if(Auth::user()->etape==4)
            {
                $request->session()->put('etape3termine', true);
                
                return redirect()->route('etape4');
            }
    
            if(Auth::user()->etape==5)
            {
                session(['etape4termine', true]);
                
                return redirect()->route('etape5');
            }
           
        }

        else
        {
            return redirect()->route('comptebloque');
        }

        return $next($request);
        
    }
}
