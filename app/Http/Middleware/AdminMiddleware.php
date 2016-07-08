<?php

namespace App\Http\Middleware;

use Auth;
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
    private $message = '<link rel="stylesheet" type="text/css" href="/css/admin.css">
<div class="ui centered fluid red button">Accès non autorisé</div>';

    public function handle($request, Closure $next)
    {   
        if (!Auth::guest()) {
            $user = Auth::user();
            if($admin = $user->roles->contains('nom', 'admin')){
                return $next($request);
            }   
        }
        if (Auth::check() && !Auth::user()->roles()->first()){
            Auth::logout();
            return response($this->message, 401);
        }
        return redirect('/');      
    }
}
