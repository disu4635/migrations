<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Facultades;
use App\Http\Controllers\Profesores;
use App\Http\Controllers\Regnotas;
use App\Http\Controllers\Estudiantes;
use App\Http\Controllers\Programas;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [HomeController::class, 'index']);
Route::get('/facultades/listado', [Facultades::class, 'index'])->name('listado_fac');
Route::get('/facultades/registrar', [Facultades::class, 'form_registro']);
Route::post('/facultades/registrar', [Facultades::class, 'registrar']);
Route::get('/facultades/eliminar/{id}', [Facultades::class, 'eliminar'])->name('eliminar_facultad');
Route::get('/facultades/editar/{id}', [Facultades::class, 'form_editar'])->name('editar_facultad');
Route::post('/facultades/editar/{id}', [Facultades::class, 'editar'])->name('guardar_editar_facultad');
Route::get('/regnotas/listado', [Regnotas::class, 'index']);
Route::get('/profesores/listado', [Profesores::class, 'index'])->name('listado_prof');
Route::get('/profesores/registrar', [Profesores::class, 'form_registro']);
Route::post('/profesores/registrar', [Profesores::class, 'registrar']);
Route::get('/profesores/eliminar/{id}', [Profesores::class, 'eliminar'])->name('eliminar_profesor');
Route::get('/programas/listado', [Programas::class, 'index'])->name('listado_prog');
Route::get('/programas/registrar', [Programas::class, 'form_registro']);
Route::post('/programas/registrar', [Programas::class, 'registrar']);
Route::get('/programas/editar/{id}', [Programas::class, 'form_editar'])->name('editar_programa');
Route::post('/programas/editar/{id}', [Programas::class, 'editar'])->name('guardar_editar_programa');
Route::get('/programas/eliminar/{id}', [Programas::class, 'eliminar'])->name('eliminar_programa');
Route::get('/estudiantes/listado', [Estudiantes::class, 'index']);







