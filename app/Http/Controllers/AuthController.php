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
            'usuario' => 'required|string|max:25',
            'password' => 'required|string',
        ]);

        if (Auth::attempt(['username' => $credentials['usuario'], 'password' => $credentials['password']])) {
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false]);
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'username' => 'required|string|max:25|unique:users',
            'name' => 'required|string|max:25',
            'lastname' => 'required|string|max:25',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|max:15|confirmed',
        ]);

        $user = User::create([
            'username' => $data['username'],
            'name' => $data['name'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'roles' => ['viewer'], // Asignar el rol de "viewer"
        ]);

        Auth::login($user);
        return redirect()->route('inicio');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}