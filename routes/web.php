<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;


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

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');

Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

// Ruta Inicio
Route::get('/', function () {
    return view('inicio');
})->name('inicio');

// Ruta Productos
Route::get('/productos', [ProductosController::class, 'index'])->name('productos');
Route::get('/productos/categoria/{categoria}', [ProductosController::class, 'filtrarPorCategoria'])->name('productos.categoria');

Route::post('/productos', [ProductosController::class, 'store'])->name('productos.store');

Route::put('/productos/{id}', [ProductosController::class, 'update'])->name('productos.update');

Route::delete('/productos/{id}', [ProductosController::class, 'destroy'])->name('productos.destroy');

Route::get('/productos/{id}', [ProductosController::class, 'mostrarProducto'])->name('productos.show');

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

Route::post('/contacto/enviar', [ContactoController::class, 'enviarFormulario'])->name('contacto.enviar');

// Ruta Nosotros
Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

// Ruta Testimonios
Route::get('/testimonios', function () {
    return view('testimonios');
})->name('testimonios');

// Ruta Descubre
Route::get('/descubre', function () {
    return view('descubre');
})->name('descubre');

// Ruta Perfil
Route::get('/perfil', [AuthController::class, 'perfil'])->name('perfil')->middleware('auth');

// Ruta Compras
Route::get('/compras', function () {
    return view('compras');
})->name('compras');

// -----------------------------------------

// Ruta Login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Ruta Register
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register');

// Ruta Logout

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// -------------- Ruta para el mapa de sitio -----------------

Route::get('/menu', [MenuController::class, 'index'])->name('menu');

// --------------- Ruta para el error 404 --------------------
use App\Http\Controllers\ErrorController;

Route::get('/error-404', [ErrorController::class, 'error404'])->name('error.404');

// --------------- Ruta para control de roles --------------------

// Ruta para mostrar el formulario de asignación de roles
Route::get('/users/{id}/roles', [RoleController::class, 'showRoleAssignmentForm'])->name('roles.form');

// Ruta para asignar un rol a un usuario
Route::post('/users/{userId}/roles', [RoleController::class, 'assignRole'])->name('assign.role');

// Ruta para eliminar un rol de un usuario
Route::post('/users/{id}/remove-role', [RoleController::class, 'removeRole'])->name('remove.role');

// Ruta para mostrar todos los usuarios con sus roles

Route::get('/users/roles', [RoleController::class, 'showUsersWithRoles'])->name('users.roles');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/assign-roles', [UserController::class, 'showAssignRoles'])->name('assign.roles');
    Route::post('/assign-role/{userId}', [UserController::class, 'assignRole'])->name('assign.role');
    Route::post('/remove-role/{id}', [UserController::class, 'removeRole'])->name('remove.role');
    Route::delete('/delete-user/{id}', [UserController::class, 'deleteUser'])->name('delete.user');
});