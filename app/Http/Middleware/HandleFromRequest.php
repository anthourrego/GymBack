<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HandleFromRequest
{
    public function handle(Request $request, Closure $next)
    {
        $request->merge([
            'is_api_request' => $request->is('api/*') || 
                              $request->wantsJson() || 
                              $request->expectsJson()
        ]);

        return $next($request);
    }
}