<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

use redirect;

class AuthenticateMiddlweare
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
        
        
        
        if(auth::guard('admin')->check()){
          return $next($request);  
        }else{
            return redirect('admin/login');
        }
        
        
    }
}
