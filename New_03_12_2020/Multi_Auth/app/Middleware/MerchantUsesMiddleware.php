<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class MerchantUsesMiddleware
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
        if(Auth::guard('merchant')->check() && Auth::guard('merchant')->user()->role_id == HS_MERCHANT_USER_ROLE_ID ) //|| Auth::user()->role_id == HS_SUPER_ADMIN_USER_ROLE_ID
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
