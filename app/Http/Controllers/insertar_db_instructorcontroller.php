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

         $instructor=Request() ->all ();
        instructores::create($instructor);
    }

   public function editar_instructor($id)
    {
         $instructor=fichas::findorfail($id) ;
        return view ('actualizar instructor', compact('instructor'));
    }

     public function actualizar_instructor($id)
    {
       $instructor=instructores::findorfail($id) ;
       $data = Request () -> all();
       $instructor -> fill ($data) -> save ();
        return Redirect () -> to('consultar_instructor');
    }

     public function eliminar_instructor()
    {
         $instructor=instructores:: findorfail($id) ->first();
        $instructor->delete();
    }
}
