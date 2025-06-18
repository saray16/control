<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InscripcionController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CertificadoController;
use App\Http\Controllers\FormacionController;



Route::get('/certificado/{tipo}/{id}', [CertificadoController::class, 'descargar'])
    ->middleware(['auth']) // si usas autenticación
    ->name('certificado.descargar');

// Rutas Admin Usuarios
Route::get('/admin', [AdminController::class, 'index'])->name('admin.panel');
Route::post('/admin/crear/usuario', [AdminController::class, 'create'])->name('admin.usuarios.create');
Route::delete('/admin/usuarios/{id}', [AdminController::class, 'destroy'])->name('admin.usuarios.destroy');
Route::put('/admin/usuarios/{id}', [AdminController::class, 'update'])->name('admin.usuarios.update');
Route::get('/admin/usuarios/{id}/editar', [AdminController::class, 'edit'])->name('admin.usuarios.edit');

// NUEVA RUTA PARA ACTUALIZAR ESTADO DE INSCRIPCIONES DESDE EL ADMIN
Route::put('/admin/inscripciones/{id}/estado', [InscripcionController::class, 'actualizarEstado'])
    ->name('inscripciones.actualizarEstado')
    ->middleware('auth');

// Rutas usuario
Route::get('/usuario', [UsuarioController::class, 'index'])->middleware('auth');
Route::get('/usuario/panel', [InscripcionController::class, 'verPanel'])->middleware('auth')->name('usuario.panel');

// Otras rutas existentes
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'showLoginForm')->name('login');
    Route::post('/login', 'login')->name('login.submit');
    Route::post('/logout', 'logout')->name('logout');
});

Route::controller(RegisterController::class)->group(function () {
    Route::get('/registro', 'showRegistrationForm')->name('registro');
    Route::post('/registro', 'register')->name('registro.submit');
});

Route::get('/inscribirse', function () {
    if (auth('web')->check()) {
        return redirect()->route('inscripcion.formulario');
    } else {
        return redirect()->route('registro');
    }
})->name('inscribirse');

Route::get('/inscripcion', [InscripcionController::class, 'mostrarFormulario'])->name('inscripcion.formulario');
Route::post('/inscripcion', [InscripcionController::class, 'procesarFormulario'])->name('inscribir');

Route::view('/historia', 'quienessomos')->name('historia');

Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

Route::controller(AdminController::class)->group(function () {
    Route::get('/admin', 'index')->name('admin.dashboard');
    Route::post('/admin/crear/usuario', 'create')->name('admin.usuarios.create');
    Route::delete('/admin/usuarios/{id}', 'destroy')->name('admin.usuarios.destroy');
  

Route::post('/admin/inscripciones/{id}/aprobar', [AdminController::class, 'aprobarInscripcion'])->name('admin.certificados.aprobar');
Route::post('/admin/inscripciones/{id}/rechazar', [AdminController::class, 'rechazarInscripcion'])->name('admin.certificados.rechazar');

});
// Ruta principal - Mostrar formaciones
Route::get('/', [FormacionController::class, 'index'])->name('home');

// Otras rutas de formaciones
Route::get('/formaciones', [FormacionController::class, 'index'])->name('formaciones.index');
Route::get('/formaciones/{id}', [FormacionController::class, 'show'])->name('formaciones.show');
Route::get('/formaciones/categoria/{categoria}', [FormacionController::class, 'filtrarPorCategoria'])->name('formaciones.categoria');

