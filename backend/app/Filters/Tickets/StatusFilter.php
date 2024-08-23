<?php

namespace App\Filters\Tickets;

use Closure;

class StatusFilter
{
    public function handle($request, Closure $next)
    {
        if (!request()->has('status') || request()->input('status') == '') {
            return $next($request);
        }

        return $next($request)->where('status', request()->input('status'));
    }
}