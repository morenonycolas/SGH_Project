<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fichas extends Model
{
   
   protected $table ='fichas';
    protected $fillable = ['numero_ficha','programa','grupo'];
    public $timestamps = false;
}
