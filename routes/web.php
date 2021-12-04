<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;

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


