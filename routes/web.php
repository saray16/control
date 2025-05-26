<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InscripcionController;
use App\Http\Controllers\Auth\RegisterController;

// Página principal
Route::get('/', [HomeController::class, 'index'])->name('home');

// Login y Registro
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/registro', [RegisterController::class, 'showRegistrationForm'])->name('registro');
Route::post('/registro', [RegisterController::class, 'register'])->name('registro.submit');

// Inscripción
Route::get('/inscripcion', [InscripcionController::class, 'mostrarFormulario'])->name('inscripcion.formulario');
Route::post('/inscripcion', [InscripcionController::class, 'procesarFormulario'])->name('inscribir');

// Historia
Route::view('/historia', 'quienessomos')->name('historia');

// RUTAS PROTEGIDAS


Route::middleware(['auth', 'admin'])->get('/dashboard', function () {
    return 'Bienvenido Admin';
})->name('admin.dashboard');


