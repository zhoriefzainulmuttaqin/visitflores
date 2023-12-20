<?php

namespace App\Http\Middleware;

use Closure;
use Artisan;

class ClearCache
{
    public function handle($request, Closure $next)
    {
        // Clear cache using Artisan command
        Artisan::call('cache:clear');

        return $next($request);
    }
}
