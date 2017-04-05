<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class nTest extends TestCase
{
     /**
      
      @file tests/pruebasTest
      @brief funcion para la prueba de la vista insertar instructores
      @date 28/03/2017
      @author nycolas moreno marquez
      
     */
    public function testI_instructores()
    {
        $this->visit('insertar_instructores')
             ->seePageIs('insertar_instructores')
             ->type('','nombre_completo')
             ->type('','especializacion')
             ->type('Diurno','disponiobilidad')
             ->press('Enviar');
             
    }

    /**
      
      @file tests/pruebasTest
      @brief funcion para la prueba de la vista insertar grupo
      @date 28/03/2017
      @author nycolas moreno marquez
      
     */

    public function testI_grupos ()
    {
        $this->visit('insertar_fichas')
             ->seePageIs('insertar_fichas')
             ->type('','numero_grupo')
             ->type('','programa')
             ->press('Enviar');

    }

     /**
      
      @file tests/pruebasTest
      @brief funcion para la prueba de la vista insertar ambientes
      @date 28/03/2017
      @author nycolas moreno marquez
      
     */


     public function testI_ambientes ()
    {
        $this->visit('insertar_ambientes')
             ->seePageIs('insertar_ambientes')
             ->type('','descripcion')
             ->type('','jornada_uso')
             ->press('Enviar');
    }   

     /**
      @file tests/pruebasTest
      @brief funcion para verificar que los datos hayan sido insertados en la tabla instructores de la base de datos. 
      @date 28/03/2017
      @author nycolas moreno marquez
      
     */
     
 public function testIB_instructores ()
    {
        $this->seeInDatabase('instructores',['nombre_completo'=>''])
             ->seeInDatabase('instructores',['especializacion'=>''])
             ->seeInDatabase('instructores',['disponibilidad'=>'']);    
    }

      /**
      @file tests/pruebasTest
      @brief funcion para verificar que los datos hayan sido insertados en la tabla grupos de la base de datos
      @date 28/03/2017
      @author nycolas moreno marquez
      
     */

      public function testIB_grupos ()
    {
       $this->seeInDatabase('grupos',['numero_grupo'=>''])
            ->seeInDatabase('grupos',['programa'=>'']); 
      
    }

         /**
      
      @file tests/pruebasTest
      @brief funcion para verificar que los datos hayan sido insertados en la tabla ambientes de la base de datos
      @date 28/03/2017
      @author nycolas moreno marquez
      
     */

      public function testIB_ambientes ()
    {
       $this->seeInDatabase('Ambientes',['descripcion'=>'']) 
            ->seeInDatabase('Ambientes',['jornada_uso'=>'']);
    }

     /**
      
      @file tests/pruebasTest
      @brief funcion para la prueba de la vista de la pagina principal del administrador
      @date 28/03/2017
      @author nycolas moreno marquez
      
     */


    public function testAdministrador ()
    {
        $this->visit('Administrador')
             ->seePageIs('Administrador')
             ->click('Insertar_Ambientes');
            $this->visit('Administrador')     
             ->click('Consultar_Ambientes');
             $this->visit('Administrador')
             ->click('Insertar_Instructores');
             $this->visit('Administrador')
             ->click('Consultar_Instructores');
             $this->visit('Administrador')
             ->click('Insertar_Grupo');
             $this->visit('Administrador')
             ->click('Consultar_Grupo');
             $this->visit('Administrador')
             ->click('cerrar sesion');
    }


    
 
    
}