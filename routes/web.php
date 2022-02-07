<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

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
    return view('inicio');
});

Route::get('/menujefe',function(){
    return view('menujefe'); 
});


Route::get('/reportes',function(){
    return view('LeerReportes'); 
});

Route::get('/detalleIncidencia',function(){
    return view('detalleIncidencia'); 
});

Route::get('/detalleReporte',function(){
    return view('detalleReporte'); 
});

Route::get('/header',function(){
    return view('header'); 
});

Route::get('/incidencias',function(){
    return view('incidencias'); 
});

Route::get('/listadoJefeEquipo',function(){
    return view('listadoJefeEquipo'); 
});

Route::get('/listadoTecnicos',function(){
    return view('listadoTecnicos'); 
});

Route::get('/listadoOperarios',function(){
    return view('listadoOperarios'); 
});

Route::get('/manuales',function(){
    return view('manuales'); 
});

Route::get('/nuevaIncidencia',function(){
    return view('nuevaIncidencia'); 
});

Route::get('/nuevoOperario',function(){
    return view('nuevoOperario'); 
});

Route::get('/nuevoTecnico',function(){
    return view('nuevoTecnico'); 
});

Route::get('usuario/', 'UsuarioController@index');
Route::get('usuario/{id}', 'UsuarioController@show');
Route::get('usuario/{id}/create', 'UsuarioController@create');
Route::get('usuario/', 'UsuarioController@store');
