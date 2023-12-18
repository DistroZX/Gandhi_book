<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller


public function authenticate(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::guard('admin')->attempt($credentials)) {
        // Authentication passed for admin
        return redirect()->intended('/admin/dashboard');
    } else {
        // Authentication failed for admin
        return back()->withErrors(['email' => 'Invalid credentials']);
    }
}


        