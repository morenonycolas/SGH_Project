<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ambientes;

class insertar_db_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function insertar_ambiente()
    {


         $data=Request() ->all ();
        ambientes::create($data);
    }

        public function editar_ambiente($id)
    {
         $ambiente=ambientes::findorfail($id) ;
        return view ('actualizar_ambientes', compact('ambiente'));
    }

     public function actualizar_ambiente($id)
    {
       $ambiente=ambientes::findorfail($id) ;
       $data = Request () -> all();
       $ambiente -> fill ($data) -> save ();
        return Redirect () -> to('consultar_ambientes');
    }

     public function eliminar_ambiente()
    {
         $ambiente=ambientes:: findorfail($id) ->first();
        $ambiente->delete();
    }

     public function listar_ambiente()
    {
         $ambiente=ambientes::all();
        return view ('consultar_ambientes', compact('ambiente'));
    }

}
        
