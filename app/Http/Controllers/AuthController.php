<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'user' => ['required', 'string', 'max:25'],
            'password' => ['required', 'confirmed'],
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->route('perfil');
        }

        return back()->withErrors(['email' => 'Credenciales incorrectas']);
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:25'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required','min:8','max:15','confirmed'],
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        Auth::login($user);
        return redirect()->route('perfil');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
