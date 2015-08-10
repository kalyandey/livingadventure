<?php

namespace App\Http\Middleware;
use \Session;
use Closure;

class AgentMiddleware
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
        $agent_id = Session::get('AGENT_ACCESS_ID');
        if ($agent_id == '') {
            return redirect('/agent');
        }
        return $next($request);
    }
}
