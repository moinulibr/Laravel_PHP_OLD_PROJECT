<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminUsesMiddleware
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
        /*  
            if(Auth::guard('web')->check())
            { 
            }
        */
            if((Auth::guard('web')->check() && Auth::guard('web')->user()->role_id == HS_ADMIN_USER_ROLE_ID) || (Auth::guard('web')->check() && Auth::guard('web')->user()->role_id == HS_SUPER_ADMIN_USER_ROLE_ID)) //
            {
                return $next($request);
            }
        
        else{
            Auth::logout();
            return redirect()->route(HS_MERCHANT_LOGIN_WEB_ROUTE_NAME);
        }
        //return $next($request);
    }
}
