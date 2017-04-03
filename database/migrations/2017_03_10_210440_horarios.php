<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Horarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('distribuciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bloque');
            $table->string('fk_id_ambiente');
            $table->string('fk_id_grupo');
            $table->string('fk_id_instructor');
            $table->foreign('fk_id_ambiente')->reference('id')->on('ambientes');
            $table->foreign('fk_id_grupo')->reference('id')->on('grupos');
            $table->foreign('fk_id_instructor')->reference('id')->on('instructores');
       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
