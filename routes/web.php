<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductosController;


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
})->name('inicio');

// Ruta Productos
Route::get('/productos', [ProductosController::class, 'show'])->name('productos');

Route::post('/productos', [ProductosController::class, 'store'])->name('productos.store');

Route::delete('/productos/{id}', [ProductosController::class, 'destroy'])->name('productos.destroy');

// Ruta Libros

Route::get('/productos/libros', function () {
    return view('/Productos/libros');
})->name('libros');

//Ruta Jovenes Hechiceras

Route::get('/productos/libros/hechiceras', function () {
    return view('/Productos/libros/librohechiceras');
})->name('hechiceras');

//Ruta Tarot Guia Personal

Route::get('/productos/libros/tarot', function () {
    return view('/Productos/libros/librotarot');
})->name('tarot');

//Ruta The Eye in Ur Hand

Route::get('/productos/libros/eye', function () {
    return view('/Productos/libros/libroeye');
})->name('eye');

//Ruta Aromaticos

Route::get('/productos/aromaticos', function () {
    return view('/Productos/aromaticos');
})->name('aromaticos');

// Ruta Velas Pacificadoras

Route::get('/productos/aromaticos/velas', function () {
    return view('/Productos/aromaticos/aromavelas');
})->name('velas');

//Ruta Perlas Aromaticas

Route::get('/productos/aromaticos/perlas', function () {
    return view('/Productos/aromaticos/aromaperlas');
})->name('perlas');

//Ruta Otros

Route::get('/productos/otros', function () {
    return view('/Productos/otros');
})->name('otros');

//Agua de Afrodita

Route::get('/productos/otros/agua', function () {
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

// Ruta Login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Ruta Register
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Ruta Logout

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// -------------- Ruta para el mapa de sitio -----------------

use App\Http\Controllers\MenuController;

Route::get('/menu', [MenuController::class, 'index'])->name('menu');

// --------------- Ruta para el error 404 --------------------
use App\Http\Controllers\ErrorController;

Route::get('/error-404', [ErrorController::class, 'error404'])->name('error.404');