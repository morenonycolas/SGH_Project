<?php

/**
 @file: insertar_ambientes.blade
 @brief: se encuentra la pagina para el administrador donde podra insertar o consultar algun dato sobre las tablas ambientes,fichas,instructores
 @brief:'descripcion'
 @date 28/03/2017
 @author nycolas moreno marquez
*/

?>

@extends ('layout.master')
@section ('content')
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Administrador</title>
<style>
.fondo 
{
  background-image: url('../imagenes/fondo_la92.png');
}
</style>
</head>

<body  class="fondo" >
<table width="900" border="1" align="center">
  <tr>
    <td height="48" colspan="3"><img src="fondo_la92.png" width="903" height="160" /></td>
  </tr>
  <tr>
    <td height="182"><form id="form1" name="form1" method="post" action="">
      <p align="center">Ambientes de formaci&oacute;n      </p>
      <p align="center"><img src="30_salaArta.jpg" width="214" height="131" /></p>
      <a href="{{url('insertar_ambientes')}}"> Insertar_Ambientes </a><br/> 
      <a href="{{url('consultar_ambientes')}}"> Consultar_Ambientes </a><br/>
      
    </form>    
    <p>&nbsp;</p>    </td>
    <td class= "fondo" align="center"><form id="form1" name="form1" method="post" action="">
      <p align="center">instructores    </p>
      <a href="{{url('insertar_instructores')}}"> Insertar_Instructores </a><br/>
      <a href="{{url('consultar_instructores')}}"> Consultar_Instructores </a><br/>
     
    </form>    
      <p></p>
    </form>
    <p>&nbsp;</p>    </td>
    <td><form id="form1" name="form1" method="post" action="">
      <p align="center">grupo de formaci&oacute;n    </p>
      <p align="center"><img src="fichas-puzzle-formacion.jpg" width="224" height="131" /></p>
      <a href="{{url('insertar_fichas')}}"> Insertar_Grupo </a><br/>
      <a href="{{url('consultar_fichas')}}"> Consultar_Grupo </a><br/>
     
    </form>    
    </form>
      <form id="form2" name="form2" method="post" action="">
        <label>
        
        <div align="right">
                   </div>
        </label>
      </form>    </td>
  </tr>
  <tr>
    <td colspan="3" align="center" height="500" width="500">
    
    <h1> Bienvenido </h1>

    @if (Auth::check())
    {{Auth::user()->name}}
    @endif <br>

    <a href="auth/logout"> cerrar sesion </a> <br>

    
    </td>
   </tr>
</table>
<h2>  </h2>
</body>
</html>
@endsection