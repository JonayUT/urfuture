<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function show()
    {
        // Obtener el usuario autenticado
        $user = auth()->user();

        // Pasar los datos del usuario a la vista
        return view('perfil', [
            'activeSection' => 'Perfil',
            'user' => $user,
        ]);
    }
}
