<?php

namespace App\Http\Middleware;

use Closure;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    protected $hierarchy=[
        'admin'     => 100,
        'editor'    => 50,
        'user'      => 10
    ];

    public function handle($request, Closure $next, $role)
    {
        $user = auth()->user();
        if ($this->hierarchy[$user->role] < $this->hierarchy[$role]) {
            abort(404);
        }
        return $next($request);
    }
}
