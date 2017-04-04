<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\instructores;

/**
******************************************************
* @brief Clase donde se encuentran los metodos respectivos al crud de los instructores 
*
******************************************************/

class insertar_db_instructorcontroller extends Controller
{
     /**
      Display a listing of the resource.
      @file insertar_db_instructorcontroller
      @brief metodo que permite el insertar informacion sobre un instructor a la base de datos 
      @date 28/03/2017
      @author nycolas moreno marquez
      @return \Illuminate\Http\Response
     */
    public function insertar_instructor()
    {

         $data=Request() ->all ();
        instructores::create($data);
        return Redirect () -> to('consultar_instructores');
    }
      /**
      Display a listing of the resource.
      @file insertar_db_instructorcontroller
      @brief metodo que modificar informacion sobre un instructor seleccionado 
      @param $id
      esto es la identificacion de la informacion en la base de datos
      @date 28/03/2017
      @author nycolas moreno marquez
      @return \Illuminate\Http\Response
     */
    

   public function editar_instructor($id)
    {
         $instructor=instructores::findorfail($id) ;
        return view ('actualizar_instructores', compact('instructor'));
    }
     /**
     Display a listing of the resource.
     @file insertar_db_instructorcontroller
     @brief metodo que permite la actualizacion de la informacion sobre el instructor modificado  
     @param $id
     esto es la identificacion de la informacion en la base de datos
     @return \Illuminate\Http\Response
     */

     public function actualizar_instructor($id)
    {
       $instructor=instructores::findorfail($id) ;
       $data = Request () -> all();
       $instructor -> fill ($data) -> save ();
        return Redirect () -> to('consultar_instructores');
    }
     /**
      Display a listing of the resource.
      @file insertar_db_instructorcontroller
      @brief metodo que permite la eliminacion de la informacion sobre el instructor 
      @param $id
      esto es la identificacion de la informacion en la base de datos
      @date 28/03/2017
      @author nycolas moreno marquez
      @return \Illuminate\Http\Response
     */

     public function eliminar_instructor($id)
    {
        $instructor=instructores::findorfail($id) ;
       $data = Request () -> all();
       $instructor -> fill ($data) -> delete () ;
       return Redirect () -> to('consultar_instructores');
    }

    /**
      Display a listing of the resource.
      @file insertar_db_instructorcontroller
      @brief metodo que permite consultar toda la informacion sobre los instructores que se encuantra en la base de datos 
      @date 28/03/2017
      @author nycolas moreno marquez
      @return \Illuminate\Http\Response
     */

     public function listar_instructor()
    {
         $instructor=instructores::all();
        return view ('consultar_instructores', compact('instructor'));
    }

}
