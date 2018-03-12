<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Employee;


class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) 
        {
           

   
             
            
            if ( Auth::user()->position == 'Interviewer' || Auth::user()->position == 'Administrative Staff' ) 
            {
                return redirect('/home');
            }
            elseif( Auth::user()->position == 'Lawyer')
            {
                return redirect('/lawyerside/show');
            }

            
        }

        return $next($request);
    }
}
