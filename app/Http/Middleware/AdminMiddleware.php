<?php

namespace App\Http\Middleware;
use \Session;
use Closure;

class AdminMiddleware
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
        $admin_id = Session::get('ADMIN_ACCESS_ID');
        if ($admin_id == '') {
            return redirect('/admin');
        }
        return $next($request);
    }
}
