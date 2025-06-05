<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InscripcionController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CertificadoController;



Route::get('/admin', [AdminController::class, 'index'])->name('admin.panel');


Route::get('/usuario', [UsuarioController::class, 'index'])->middleware('auth');


// Página principal
Route::get('/', [HomeController::class, 'index'])->name('home');

// Login y Registro
Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'showLoginForm')->name('login');
    Route::post('/login', 'login')->name('login.submit');
    Route::post('/logout', 'logout')->name('logout');
});

Route::controller(RegisterController::class)->group(function () {
    Route::get('/registro', 'showRegistrationForm')->name('registro');
    Route::post('/registro', 'register')->name('registro.submit');
});

// Inscripción
// Redirección inteligente para Inscribirse
Route::get('/inscribirse', function () {
    if (auth('web')->check()) {
        return redirect()->route('inscripcion.formulario');
    } else {
        return redirect()->route('registro');
    }
})->name('inscribirse');

Route::get('/inscripcion', [InscripcionController::class, 'mostrarFormulario'])->name('inscripcion.formulario');
Route::post('/inscripcion', [InscripcionController::class, 'procesarFormulario'])->name('inscribir');


// Historia
Route::view('/historia', 'quienessomos')->name('historia');

// RUTAS PROTEGIDAS
Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

Route::controller(AdminController::class)->group(function () {
    Route::get('/admin', 'index')->name('admin.dashboard');
    Route::post('/admin/crear/usuario', 'create')->name('admin.usuarios.create');
    Route::delete('/admin/usuarios/{id}', 'destroy')->name('admin.usuarios.destroy');
});
