<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\fichas;

/**
******************************************************
* @brief Clase donde se encuentran los metodos respectivos al crud de las fichas 
*
******************************************************/

class insertar_db_fichacontroller extends Controller
{
      /**
      Display a listing of the resource.
      @file insertar_db_fichacontroller
      @brief metodo que permite el insertar informacion sobre una ficha a la base de datos 
      @date 28/03/2017
      @author nycolas moreno marquez
      @return \Illuminate\Http\Response
     */
    public function insertar_ficha()
    {
         $data=Request() ->all ();
        fichas::create($data);
        return Redirect () -> to('consultar_fichas');
    }
      /**
      Display a listing of the resource.
      @file insertar_db_fichacontroller
      @brief metodo que modificar informacion sobre una ficha seleccionada 
      @param $id
      esto es la identificacion de la informacion en la base de datos
      @date 28/03/2017
      @author nycolas moreno marquez
      @return \Illuminate\Http\Response
     */
    
     public function editar_ficha($id)
    {
         $ficha=fichas::findorfail($id) ;
        return view ('actualizar_fichas', compact('ficha'));
    }
      /**
      Display a listing of the resource.
      @file insertar_db_fichacontroller
      @brief metodo que permite la actualizacion de la informacion sobre la ficha modificada 
      @param $id
      esto es la identificacion de la informacion en la base de datos
      @date 28/03/2017
      @author nycolas moreno marquez
      @return \Illuminate\Http\Response
     */

     public function actualizar_ficha($id)
    {
       $ficha=fichas::findorfail($id) ;
       $data = Request () -> all();
       $ficha -> fill ($data) -> save ();
        return Redirect () -> to('consultar_fichas');
    }
      /**
      Display a listing of the resource.
      @file insertar_db_fichacontroller
      @brief metodo que permite la eliminacion de la informacion sobre la ficha 
      @param $id
      esto es la identificacion de la informacion en la base de dato
      @date 28/03/2017
      @author nycolas moreno marquez
      @return \Illuminate\Http\Response
     */

     public function eliminar_ficha($id)
    {
       $ficha=fichas::findorfail($id) ;
       $data = Request () -> all();
       $ficha -> fill ($data) -> delete () ;
       return Redirect () -> to('consultar_fichas');
    }

  /**
      Display a listing of the resource.
      @file insertar_db_fichacontroller
      @brief metodo que permite consultar toda la informacion sobre las fichas que se encuantra en la base de datos 
      @date 28/03/2017
      @author nycolas moreno marquez
      @return \Illuminate\Http\Response
     */
      public function listar_ficha()
    {
         $ficha=fichas::all();
        return view ('consultar_fichas', compact('ficha'));
    }

        
}

