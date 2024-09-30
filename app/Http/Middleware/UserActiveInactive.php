<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserActiveInactive
{
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            $user = Auth::user();

            if ($user->type == 'lawyer') {
                if ($user->is_active == 0) {
                    Auth::logout();
                    return redirect()->route('login')->with('error','Your account has been blocked by admin.');
                }
            } elseif ($user->type == 'client') {
                if ($user->is_active == 0) {
                    Auth::logout();
                    return redirect()->route('login')->with('error','Your account has been blocked by admin.');
                }
            }
        }

        // Proceed to the next request
        return $next($request);
    }
}
