<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 @file ambientes
 @brief Clase donde se encuentran el modelo de la tabla ambientes con las respectivas variables
 @date 28/03/2017
 @author nycolas moreno marquez
*/

class ambientes extends Model
{

    protected $table ='ambientes';
    protected $fillable = ['descripcion','jornada_uso'];
    public $timestamps = false;
}
