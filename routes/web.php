<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\GradoController;
use App\Http\Controllers\ProfesorController;

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

//rutas para alumnos
Route::get('/alumnos',
[AlumnoController::class, 'index']
)->name('alumno.index');

Route::get('/alumnos/{id}',
[AlumnoController::class, 'show']
)->name('alumno.mostrar')->where('id', '[0-9]+');

//ruta para crear formulario
Route::get('/alumnos/crear',
[AlumnoController::class, 'create']
)->name('alumno.crear');

Route::post('/alumnos/crear',
[AlumnoController::class, 'store']
)->name('alumno.guardar');

//ruta para editar formulario
Route::get('/alumnos/{id}/editar',
[AlumnoController::class, 'edit']
)->name('alumno.editar')->where('id','[0-9]+');

Route::put('/alumnos/{id}/editar',
[AlumnoController::class, 'update']
)->name('alumno.update')->where('id','[0-9]+');

//ruta eliminar
Route::delete('/alumnos/{id}/borrar',
 [AlumnoController::class, 'destroy']
 )->name('alumno.borrar')->where('id', '[0-9]+');


 //rutas para grado
Route::get('/grados',
[GradoController::class, 'index']
)->name('grado.index');

Route::get('/grados/re',
[GradoController::class, 'relacion1']
)->name('grado.relacion');

Route::get('/grados/{id}',
[GradoController::class, 'show']
)->name('grado.mostrar')->where('id', '[0-9]+');

//ruta para crear formulario
Route::get('/grados/crear',
[GradoController::class, 'create']
)->name('grado.crear');

Route::post('/grados/crear',
[GradoController::class, 'store']
)->name('grado.guardar');

//ruta para editar formulario
Route::get('/grados/{id}/editar',
[GradoController::class, 'edit']
)->name('grado.editar')->where('id','[0-9]+');

Route::put('/grados/{id}/editar',
[GradoController::class, 'update']
)->name('grado.update')->where('id','[0-9]+');

//ruta eliminar
Route::delete('/grados/{id}/borrar',
 [GradoController::class, 'destroy']
 )->name('grado.borrar')->where('id', '[0-9]+');


 //ruta de profesor
 Route::get('/profesors',
[ProfesorController::class, 'index']
)->name('profesor.index');

Route::get('/prfoesors/{id}',
[ProfesorController::class, 'show']
)->name('profesor.mostrar')->where('id', '[0-9]+');

//ruta para crear formulario
Route::get('/profesors/crear',
[ProfesorController::class, 'create']
)->name('profesor.crear');

Route::post('/profesors/crear',
[ProfesorController::class, 'store']
)->name('profesor.guardar');

//ruta para editar formulario
Route::get('/profesors/{id}/editar',
[ProfesorController::class, 'edit']
)->name('profesor.editar')->where('id','[0-9]+');

Route::put('/profesors/{id}/editar',
[ProfesorController::class, 'update']
)->name('profesor.update')->where('id','[0-9]+');

//ruta eliminar
Route::delete('/profesors/{id}/borrar',
 [ProfesorController::class, 'destroy']
 )->name('profesor.borrar')->where('id', '[0-9]+');


