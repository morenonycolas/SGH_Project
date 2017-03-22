<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\instructores;

class insertar_db_instructorcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function insertar_instructor()
    {

         $data=Request() ->all ();
        instructores::create($data);
        return Redirect () -> to('consultar_instructores');
    }

   public function editar_instructor($id)
    {
         $instructor=instructores::findorfail($id) ;
        return view ('actualizar_instructores', compact('instructor'));
    }

     public function actualizar_instructor($id)
    {
       $instructor=instructores::findorfail($id) ;
       $data = Request () -> all();
       $instructor -> fill ($data) -> save ();
        return Redirect () -> to('consultar_instructores');
    }

     public function eliminar_instructor($id)
    {
        $instructor=instructores::findorfail($id) ;
       $data = Request () -> all();
       $instructor -> fill ($data) -> delete () ;
       return Redirect () -> to('consultar_instructores');
    }

     public function listar_instructor()
    {
         $instructor=instructores::all();
        return view ('consultar_instructores', compact('instructor'));
    }

}
