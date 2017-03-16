<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ambientes extends Model
{

    protected $table ='ambientes';
    protected $fillable = ['descripcion'];
    public $timestamps = false;
}
