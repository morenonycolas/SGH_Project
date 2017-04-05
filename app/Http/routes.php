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
Route::get('menu', ['uses' => 'pruebaController@index']);

Route::get('/', function () {
    return view('index');
});


Route::get('index', function () {
    return view('index');
});

Route::get('Ingresar_Usuarios', function () {
    return view('Ingresar_Usuarios');
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

route::post('actualizar_instructores/{id}','insertar_db_instructorcontroller@actualizar_instructor');

Route::get('eliminar_instructores/{id}','insertar_db_instructorcontroller@eliminar_instructor');

Route::get('home', function () {
    return view('home');
});

//Authentication routes...
Route::get('auth/login','Auth\AuthController@getLogin');

route::post('auth/login','Auth\AuthController@postLogin');

Route::get('auth/logout','Auth\AuthController@getLogout');

//Registration Routes...

Route::get('auth/register','Auth\AuthController@getRegister');

route::post('auth/register','Auth\AuthController@postRegister');




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


/**
   	  @file routes
      @brief ruta sobre la pagina de inicio
      @date 28/03/2017
      @author nycolas moreno marquez
*/

Route::get('/', function () {
    return view('index');
});
/**
   	  @file routes
      @brief ruta sobre la pagina de inicio
      @date 28/03/2017
      @author nycolas moreno marquez
*/

Route::get('index', function () {
    return view('index');
});

/**
   	  @file routes
      @brief ruta sobre la pagina de login
      @date 28/03/2017
      @author nycolas moreno marquez
*/
Route::get('Ingresar_Usuarios', function () {
    return view('Ingresar_Usuarios');
});

/**
   	  @file routes
      @brief ruta sobre la pagina de registro de usuario
      @date 28/03/2017
      @author nycolas moreno marquez
*/

Route::get('Registrar_Usuarios', function () {
    return view('Registrar_Usuarios');
});

/**
   	  @file routes
      @brief ruta sobre la pagina que vera el usuario al iniciar session 
      @date 28/03/2017
      @author nycolas moreno marquez
*/

Route::get('Administrador', function () {
    return view('Administrador');
});


/**
   	  @file routes
      @brief ruta sobre la pagina para el registro de un usuario 
      @date 28/03/2017
      @author nycolas moreno marquez
*/

Route::get('insertar_ambientes', function () {
    return view('insertar_ambientes');
});


/**
   	  @file routes
      @brief ruta sobre la pagina para el registro de usuario con su respectivo controlador
      @date 28/03/2017
      @author nycolas moreno marquez
*/

Route::post('insertar_ambientes','insertar_db_controller@insertar_ambiente');

/**
   	  @file routes
      @brief ruta sobre la pagina para la edicion de ambiente con su respectivo controlador
      @date 28/03/2017
      @author nycolas moreno marquez
*/

Route::get('editar_ambientes/{id}','insertar_db_controller@editar_ambiente');

/**
   	  @file routes
      @brief ruta sobre la pagina para la consulta de ambiente con su respectivo controlador
      @date 28/03/2017
      @author nycolas moreno marquez
*/

Route::get('consultar_ambientes','insertar_db_controller@listar_ambiente');

/**
   	  @file routes
      @brief ruta sobre la actualizacion de la informacion de ambiente con su respectivo controlador
      @date 28/03/2017
      @author nycolas moreno marquez
*/

route::post('actualizar_ambientes/{id}','insertar_db_controller@actualizar_ambiente');
/**
   	  @file routes
      @brief ruta sobre la eliminacion de la informacion de ambiente con su respectivo controlador
      @date 28/03/2017
      @author nycolas moreno marquez
*/

Route::get('eliminar_ambientes/{id}','insertar_db_controller@eliminar_ambiente');



/**
   	  @file: routes
      @brief: ruta sobre la pagina para el registro de un usuario 
      @date: 28/03/2017
      @author: nycolas moreno marquez
*/

Route::get('insertar_fichas', function () {
    return view('insertar_fichas');
});

/**
   	  @file: routes
      @brief: ruta sobre la pagina para el registro de ficha con su respectivo controlador
      @date: 28/03/2017
      @author: nycolas moreno marquez
*/

Route::post('insertar_fichas','insertar_db_fichacontroller@insertar_ficha');

/**
   	  @file: routes
      @brief: ruta sobre la pagina para la edicion de ficha con su respectivo controlador
      @date: 28/03/2017
      @author: nycolas moreno marquez
*/

Route::get('editar_fichas/{id}','insertar_db_fichacontroller@editar_ficha');

/**
   	  @file: routes
      @brief: ruta sobre la pagina para la consulta de ficha con su respectivo controlador
      @date: 28/03/2017
      @author: nycolas moreno marquez
*/

Route::get('consultar_fichas','insertar_db_fichacontroller@listar_ficha');

/**
   	  @file: routes
      @brief: ruta sobre la actualizacion de la informacion de ficha con su respectivo controlador
      @date: 28/03/2017
      @author: nycolas moreno marquez
*/

route::post('actualizar_fichas/{id}','insertar_db_fichacontroller@actualizar_ficha');

/**
   	  @file: routes
      @brief: ruta sobre la eliminacion de la informacion de ficha con su respectivo controlador
      @date: 28/03/2017
      @author: nycolas moreno marquez
*/

Route::get('eliminar_fichas/{id}','insertar_db_fichacontroller@eliminar_ficha');



/**
   	  @file: routes
      @brief: ruta sobre la pagina para el registro de un instructor 
      @date: 28/03/2017
      @author: nycolas moreno marquez
*/

Route::get('insertar_instructores', function () {
    return view('insertar_instructores');
});
/**
   	  @file: routes
      @brief: ruta sobre la pagina para el registro de instructores con su respectivo controlador
      @date: 28/03/2017
      @author: nycolas moreno marquez
*/

Route::post('insertar_instructores','insertar_db_instructorcontroller@insertar_instructor');

/**
   	  @file: routes
      @brief: ruta sobre la pagina para la edicion de un instructor con su respectivo controlador
      @date: 28/03/2017
      @author: nycolas moreno marquez
*/

Route::get('editar_instructores/{id}','insertar_db_instructorcontroller@editar_instructor');

/**
   	  @file: routes
      @brief: ruta sobre la pagina para la consulta de instructores con su respectivo controlador
      @date: 28/03/2017
      @author: nycolas moreno marquez
*/


Route::get('consultar_instructores','insertar_db_instructorcontroller@listar_instructor');

/**
   	  @file: routes
      @brief: ruta sobre la actualizacion de la informacion de un instructor con su respectivo controlador
      @date: 28/03/2017
      @author: nycolas moreno marquez
*/

route::post('actualizar_instructor/{id}','insertar_db_instructorcontroller@actualizar_instructor');

/**
   	  @file: routes
      @brief: ruta sobre la eliminacion de la informacion de un instructor con su respectivo controlador
      @date: 28/03/2017
      @author: nycolas moreno marquez
*/

Route::get('eliminar_instructores/{id}','insertar_db_instructorcontroller@eliminar_instructor');




Route::get('home', function () {
    return view('home');
});

//Authentication routes...
Route::get('auth/login','Auth\AuthController@getLogin');

route::post('auth/login','Auth\AuthController@postLogin');

Route::get('auth/logout','Auth\AuthController@getLogout');

//Registration Routes...

Route::get('auth/register','Auth\AuthController@getRegister');

route::post('auth/register','Auth\AuthController@postRegister');

/*	'uses' => '')

*/




