<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ambientes;


/
/**
******************************************************
* @brief Clase donde se encuentran los metodos respectivos al crud de los ambientes 
*
******************************************************/


class insertar_db_controller extends Controller
{
    /**
      Display a listing of the resource.
      @file insertar_db_controller
      @brief metodo para insertar informacion sobre unn ambiente a la base de datos
      @date 28/03/2017
      @author nycolas moreno marquez
      @return \Illuminate\Http\Response
     */
    public function insertar_ambiente()
    {
         $data=Request() ->all ();
        ambientes::create($data);
        return Redirect () -> to('consultar_ambientes');

    }
    /**
      Display a listing of the resource.
      @file insertar_db_controller
      @brief metodo que permite la edicion de la informacion sobre el ambiente 
      @param $id
      esto es la identificacion de la informacion en la base de datos
      @date 28/03/2017
      @author nycolas moreno marquez
      @return \Illuminate\Http\Response
     */

        public function editar_ambiente($id)
    {
         $ambiente=ambientes::findorfail($id) ;
        return view ('actualizar_ambientes', compact('ambiente'));
    }

     /**
      Display a listing of the resource.
      @file insertar_db_controller
      @brief metodo que permite la actualizacion de la informacion sobre el ambiente modificado 
      @param $id
      esto es la identificacion de la informacion en la base de datos
      @date 28/03/2017
      @author nycolas moreno marquez
      @return \Illuminate\Http\Response
     */

     public function actualizar_ambiente($id)
    {
       $ambiente=ambientes::findorfail($id) ;
       $data = Request () -> all();
       $ambiente -> fill ($data) -> save ();
        return Redirect () -> to('consultar_ambientes');
    }
     /**
      Display a listing of the resource.
      @file insertar_db_controller
      @brief metodo que permite la eliminacion de la informacion sobre el ambiente 
      @param $id
      esto es la identificacion de la informacion en la base de datos
      @date 28/03/2017
      @author nycolas moreno marquez
      @return \Illuminate\Http\Response
     */

     public function eliminar_ambiente($id)
    {
         $ambiente=ambientes::findorfail($id) ;
       $data = Request () -> all();
       $ambiente -> fill ($data) -> delete () ;
        return Redirect () -> to('consultar_ambientes');
    }
     /**
      Display a listing of the resource.
      @file insertar_db_controller
      @brief metodo que permite consultartoda la informacion sobre los ambientes que se encuantra en la base de datos 
      @date 28/03/2017
      @author nycolas moreno marquez
      @return \Illuminate\Http\Response
     */

     public function listar_ambiente()
    {
         $ambiente=ambientes::all();
        return view ('consultar_ambientes', compact('ambiente'));
    }

}

        
