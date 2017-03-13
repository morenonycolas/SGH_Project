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

Route::post('insertar_ambientes','insertar_db_controller@insertar_ambiente');

Route::get('insertar_fichas', function () {
    return view('insertar_fichas');
});

Route::post('insertar_fichas','insertar_db_fichacontroller@insertar_ficha');

Route::get('insertar_instructores', function () {
    return view('insertar_instructores');
});

Route::post('insertar_instructores','insertar_db_instructorcontroller@insertar_instructor');