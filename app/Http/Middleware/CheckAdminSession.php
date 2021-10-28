<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdminSession
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
        // $user = $request->session()->get('adminuser');
        // if($user){
        //     return $next($request);
        // }else{
        //     return redirect('/admin/login');
        // }
        return $next($request);
    }
}
