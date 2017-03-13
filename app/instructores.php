<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class instructores extends Model
{
    protected $fillable =['documento','nombre_completo','telefono','correo','programa_de_formacion','especializacion','disponibilidad'];
}
