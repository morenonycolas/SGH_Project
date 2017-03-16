<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class instructores extends Model
{
    
    protected $table ='instructores';
    protected $fillable = ['documento','nombre_completo','telefono','correo','programa_de_formacion','especializacion','disponibilidad'];
    public $timestamps = false;
}

