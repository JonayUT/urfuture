<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function show($categoria, $subcategoria = null)
    {
        return view('categoria', compact('categoria', 'subcategoria'));
    }
}
