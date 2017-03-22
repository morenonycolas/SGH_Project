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





/** rutas sobre crud de la informacion de los ambientes**/
Route::get('insertar_ambientes', function () {
    return view('insertar_ambientes');
});

Route::post('insertar_ambientes','insertar_db_controller@insertar_ambiente');

Route::get('editar_ambientes/{id}','insertar_db_controller@editar_ambiente');

Route::get('consultar_ambientes','insertar_db_controller@listar_ambiente');

route::post('actualizar_ambientes/{id}','insertar_db_controller@actualizar_ambiente');

Route::get('eliminar_ambientes/{id}','insertar_db_controller@eliminar_ambiente');





/** rutas sobre crud de la informacion de las fichas**/

Route::get('insertar_fichas', function () {
    return view('insertar_fichas');
});

Route::post('insertar_fichas','insertar_db_fichacontroller@insertar_ficha');

Route::get('editar_fichas/{id}','insertar_db_fichacontroller@editar_ficha');

Route::get('consultar_fichas','insertar_db_fichacontroller@listar_ficha');

route::post('actualizar_fichas/{id}','insertar_db_fichacontroller@actualizar_ficha');

Route::get('eliminar_fichas/{id}','insertar_db_fichacontroller@eliminar_ficha');




/*rutas sobre crud de la informacion de los instrucrtores*/

Route::get('insertar_instructores', function () {
    return view('insertar_instructores');
});

Route::post('insertar_instructores','insertar_db_instructorcontroller@insertar_instructor');

Route::get('editar_instructores/{id}','insertar_db_instructorcontroller@editar_instructor');

Route::get('consultar_instructores','insertar_db_instructorcontroller@listar_instructor');

route::post('actualizar_instructor/{id}','insertar_db_instructorcontroller@actualizar_instructor');

Route::get('eliminar_instructores/{id}','insertar_db_instructorcontroller@eliminar_instructor');







