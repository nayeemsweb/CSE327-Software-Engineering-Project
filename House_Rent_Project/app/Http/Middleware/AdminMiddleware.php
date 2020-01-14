<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Support\Facades\Auth;

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
       $user =  User::where('id',Auth::id())->first();
        if (Auth::check() && $user->role_id ==1) {
            return $next($request);
        }else{
            return redirect()->route('admin');
        }
    }
}
