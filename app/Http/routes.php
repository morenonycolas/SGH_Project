<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('index', function () {
    return view('index');
});


Route::get('Registrar_Usuarios', function () {
    return view('Registrar_Usuarios');
});

/*Route::get('Registrar_Usuarios', 'IndexController@index');

*/
Route::get('Administrador', function () {
    return view('Administrador');
});

Route::get('insertar_ambientes', function () {
    return view('insertar_ambientes');
});