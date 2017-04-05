<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 @file fichas	
 @brief Clase donde se encuentran el modelo de la tabla fichas con las respectivas variables 
 @date 28/03/2017
 @author nycolas moreno marquez
*/


class fichas extends Model
{
   
   protected $table ='grupos';
    protected $fillable = ['programa','numero_grupo'];
    public $timestamps = false;
}
