<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TokenMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {

        if ($request->header('token') !== 'general-token') {

            return response()->json(['error' => 'Invalid Token'], 401);
        }

        return $next($request);
    }
}
