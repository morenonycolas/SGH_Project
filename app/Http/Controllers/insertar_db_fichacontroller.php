<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\fichas;

class insertar_db_fichacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function insertar_ficha()
    {
         $data=Request() ->all ();
        fichas::create($data);
    }
    
     public function editar_ficha($id)
    {
         $ficha=fichas::findorfail($id) ;
        return view ('actualizar ficha', compact('ficha'));
    }

     public function actualizar_ficha($id)
    {
       $ficha=fichas::findorfail($id) ;
       $data = Request () -> all();
       $ficha -> fill ($data) -> save ();
        return Redirect () -> to('consultar_ficha');
    }

     public function eliminar_ficha()
    {
         $ficha=fichas:: findorfail($id) ->first();
        $ficha->delete();
    }
        
}
