<?php

namespace MDT\Http\Middleware;

use MDT\Role;
use Closure;
use Illuminate\Support\Facades\Gate;

class ApprovalMiddleware
{
    public function handle($request, Closure $next)
    {
        if (auth()->check()) {
            if (!auth()->user()->approved) {
                auth()->logout();

                return redirect()->route('register')->with('status', 'Your account is waiting for our administrator approval.');
            }
        }

        return $next($request);
    }
}
