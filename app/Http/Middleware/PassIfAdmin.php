<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class PassIfAdmin
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

      $isadmin =  Auth::user();
      if($isadmin->user_role !== 1)
      {
        return redirect('dashboard')->with('message_error', 'No tienes los permisos para ver esto.');
      }
        return $next($request);
    }
}
