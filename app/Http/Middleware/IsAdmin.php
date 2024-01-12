<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $userType = auth()->user()->user_type;
            if ($userType === 'admin') {
                return $next($request);
            } elseif ($userType === 'user' || $userType === 'accountant') {
                Auth::logout();
                return redirect()->route('sign_in')->with('error', "You don't have admin access.");
            }
        } else {
            return redirect()->route('sign_in')->with('error', "No Users.");
        }
    }

}

