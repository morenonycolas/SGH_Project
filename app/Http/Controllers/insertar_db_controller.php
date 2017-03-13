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


         $ambiente=Request() ->all ();
        ambientes::create($ambiente);
    }
}
