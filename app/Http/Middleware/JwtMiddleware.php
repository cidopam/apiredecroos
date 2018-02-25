<?php

namespace App\Http\Middleware;

use Closure;
use App\Utils\JWTUtil;

class JwtMiddleware
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
        $token = $request->header('x-api-key');

        if (!JWTUtil::validate($token)) {
            return response('Não autorizado', 401);
        }

        return $next($request);
    }
}
