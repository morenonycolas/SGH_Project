<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 @file instructores
 @brief Clase donde se encuentran el modelo de la tabla instructores con las respectivas variables
 @date 28/03/2017
 @author nycolas moreno marquez
*/


class instructores extends Model
{
    
    protected $table ='instructores';
    protected $fillable = ['nombre_completo','especializacion','disponibilidad'];
    public $timestamps = false;
}

