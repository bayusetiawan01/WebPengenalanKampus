<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class Admin
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
        $user = User::where('email', $request->session()->get('email'))->first();
        if ($user->role_id == 2 || $user->role_id == 4) {
            return $next($request);
        } else if ($user->role_id == 5) {
            return redirect('/himpunan');
        } else {
            return redirect('/user');
        }
    }
}
