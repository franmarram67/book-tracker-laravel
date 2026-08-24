<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', Password::min(8)],
        ]);

        $user = User::create(['name' => 'random', ...$credentials]);

        Auth::login($user);

        return redirect('/');
    }

    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        Auth::attempt($credentials);

        return redirect('/');
    }

    public function logout(): RedirectResponse
    {
        Auth::logout();

        return redirect('/');
    }
}
