<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    public function register(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            // 'password' => [],
            // 'confirm_password' => [],
        ]);

        dd($credentials);

        return redirect('/');
    }
}
