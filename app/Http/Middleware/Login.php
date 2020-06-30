<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class Login
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
        if ($request->session()->has('email')) {
            $user = User::where('email', $request->session()->get('email'))->first();
            if ($user->role_id == 2) {
                return redirect('/admin');
            } else {
                return redirect('/user');
            }
        } else {
            return $next($request);
        }
    }
}
