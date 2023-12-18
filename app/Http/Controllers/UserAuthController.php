<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuthController extends Controller


use Illuminate\Support\Facades\Auth;

public function authenticate(Request $request)
{
    $credentials = $request->only('email', 'password', 'name');

    if (Auth::guard('admin')->attempt($credentials)) {
        // Authentication passed for admin
        return redirect()->intended('Books.index');
    } else {
        // Authentication failed for admin
        return back()->withErrors(['email' => 'Invalid credentials']);
    }
}

