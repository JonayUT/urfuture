<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    /**
     * Muestra el formulario para solicitar la recuperación de contraseña.
     */
    public function showLinkRequestForm()
    {
        return view('auth.forgot-password'); // Asegúrate de crear esta vista en resources/views/auth
    }

    /**
     * Envía el enlace de restablecimiento de contraseña al correo del usuario.
     */
    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink($request->only('email'));

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }
}