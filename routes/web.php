<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfesorController;
use App\Models\Profesor;

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

Route::get('/profesors', 'ProfesorController@index')->name('profesor.index');

Route::get('/profesors/{id}', 'ProfesorController@show')
->name('profesor.mostrar')
->where('id','[0-9]+');

Route::get('/profesors/crear', 'ProfesorController@create')
->name('profesor.crear');

Route::post('/profesors/crear', 'ProfesorController@store')
->name('profesor.guardar');

Route::get('/profesor/{id}/editar', 'ProfesorController@edit')
->name('profesor.edit')
->where('id','[0-9]+');

Route::put('/profesor/{id}/editar', 'ProfesorController@update')
->name('profesor.update')
->where('id','[0-9]+');

Route::delete('/profesors/{id}/borrar', 'ProfesorController@destroy')
->name('profesor.borrar')->where('id', '[0-9]+');