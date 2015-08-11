<?php

namespace App\Http\Middleware;
use \Session;
use Closure;

class SupplierMiddleware
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
        \Config::set('constants.SUPPLIER_PROFILE_IMAGE','123');
        
        $agent_id = Session::get('SUPPLIER_ACCESS_ID');
        if ($agent_id == '') {
            return redirect('/supplier');
        }
        return $next($request);
    }
}
