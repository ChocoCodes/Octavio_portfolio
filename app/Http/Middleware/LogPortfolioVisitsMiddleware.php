<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;

class LogPortfolioVisitsMiddleware
{
    /**
     * LogPortfolioVisitsMiddleware logs visitor IP, visited URL, 
     * user agent, and timestamp of the activity.
     * All logs are stored in 'storage/logs/laravel.log'
     */
    public function handle(Request $request, Closure $next): Response
    {
        Log::info('Portfolio Website Visitor', [
            'ip' => $request->ip(),
            'url' => $request->url(),
            'method' => $request->method(),
            'user_agent' => $request->userAgent(),
            'time' => now()
        ]);
        
        return $next($request);
    }
}
