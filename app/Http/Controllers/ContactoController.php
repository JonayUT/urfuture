<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactoMailable;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function enviarFormulario(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email',
            'mensaje' => 'required|string',
        ]);

        // Enviar el correo
        Mail::to('tic-300164@utnay.edu.mx')->send(new ContactoMailable($request->all()));

        // Redirigir con un mensaje de éxito
        return redirect()->back()->with('success', '¡Tu mensaje ha sido enviado correctamente a Chiapas Boy!');
    }
}