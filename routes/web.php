<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Ruta Inicio
Route::get('/', function () {
    return view('inicio');
}) ->name ('inicio');

// Ruta Productos
Route::get('/productos', function () {
    return view('productos');
})->name('productos');

// Ruta Libros

Route::get('/libros', function () {
    return view('/Productos/libros');
})->name('libros');

    //Ruta Jovenes Hechiceras

    Route::get('/hechiceras', function () {
        return view('/Productos/libros/librohechiceras');
    })->name('hechiceras');

    //Ruta Tarot Guia Personal

    Route::get('/tarot', function () {
        return view('/Productos/libros/librotarot');
    })->name('tarot');

    //Ruta The Eye in Ur Hand

    Route::get('/eye', function () {
        return view('/Productos/libros/libroeye');
    })->name('eye');

//Ruta Aromaticos

Route::get('/aromaticos', function () {
    return view('/Productos/aromaticos');
})->name('aromaticos');

    // Ruta Velas Pacificadoras
    
    Route::get('/velas', function () {
        return view('/Productos/aromaticos/aromavelas');
    })->name('velas');

    //Ruta Perlas Aromaticas

    Route::get('/perlas', function () {
        return view('/Productos/aromaticos/aromaperlas');
    })->name('perlas');

//Ruta Otros

Route::get('/otros', function () {
    return view('/Productos/otros');
})->name('otros');

    //Agua de Afrodita

    Route::get('/agua', function () {
        return view('/Productos/otros/otrosagua');
    })->name('agua');

// Ruta Misión
Route::get('/nosotros/mision', function () {
    return view('mision');
})->name('mision');

// Ruta Visión
Route::get('/nosotros/vision', function () {
    return view('vision');
})->name('vision');

// Ruta Valores
Route::get('/nosotros/valores', function () {
    return view('valores');
})->name('valores');

// Ruta Contacto
Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

// Ruta Nosotros
Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

//pendientes -----------------------------

// Ruta Testimonios
Route::get('/testimonios', function () {
    return view('testimonios');
})->name('testimonios');

// Ruta Descubre
Route::get('/descubre', function () {
    return view('descubre');
})->name('descubre');

// Ruta Perfil
Route::get('/perfil', function () {
    return view('perfil');
})->name('perfil');

// Ruta Compras
Route::get('/compras', function () {
    return view('compras');
})->name('compras');

// -----------------------------------------