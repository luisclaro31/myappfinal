<?php

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
  return redirect('home');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('profesions', 'profesionController');

Route::resource('docentes', 'docenteController');

Route::resource('tipocontratos', 'tipocontratoController');

Route::resource('jornadas', 'jornadaController');

Route::resource('contratos', 'contratoController');