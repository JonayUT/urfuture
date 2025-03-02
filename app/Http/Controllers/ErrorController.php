<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ErrorController extends Controller
{
    public function error404(Request $request)
    {
        return response()->view('errors.404', [], 404);
    }
}

