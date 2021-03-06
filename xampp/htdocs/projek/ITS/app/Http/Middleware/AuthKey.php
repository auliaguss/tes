<?php

namespace App\Http\Middleware;

use Closure;

class AuthKey
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
        $token = $request->header('AUTHORIZATION_TOKEN');
        if ($token != "xyz123") {
            return response()->json(['message' => 'Unauthorized user'], 401);
        }
        return $next($request);
    }
}
