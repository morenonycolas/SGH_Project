<?php

/**
 @file: actualizar_ambientes
 @brief: se encuentra la pagina para la actualicazion de informacion de instructores
 @brief:'nombre_completo','documento','telefono','correo','programa_de_formacion','especializacion','disponibilidad'
 @date: 28/03/2017
 @author: nycolas moreno marquez
*/

?>

@extends('layout/master')
@section('content')
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>registro de horario</title>
<style type="text/css">
<!--
.Estilo1 {font-family: Verdana, Arial, Helvetica, sans-serif}
.Estilo4 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 16px; }
-->
</style>
</head>

<body>
<table width="900" border="2" align="center" bordercolor="#000066" bgcolor="#FFFFFF">
  <tr>
    <td><p>&nbsp;</p>
        <p align="center" class="Estilo1">Registro de Horario</p>
        <p align="center" class="Estilo1">------------------------------------------ </p>
        <form id="actualizar_instructores" name="actualizar_instructores" method="post" action="{{url('actualizar_instructores', $instructor->id)}}">
        {!!csrf_field()!!}
          <table width="527" border="0" align="center">
            <tr>
              <td height="21" colspan="2"><div align="center">Intstructor</div></td>
            </tr>

            <tr>
              <td width="210" height="21"><div align="center" class="Estilo1">nombre</div></td>
              <td width="307"><div align="center"><span class="Estilo1"></span>
                  <input name="nombre_completo" type="text" value="{{$instructor->nombre_completo}}" size="29" placeholder="Nombre completo"  /> 
                  <label> <br />
                  </label>
              </div></td>
            </tr>

            <tr>
              <td height="21"><div align="center">especializacion</div></td>
              <td height="21"><div align="center"><span class="Estilo1"></span>
                <input name="especializacion" type="text" value="{{$instructor->especializacion}}" id="especializacion" size="30" placeholder="especializacion" />
              </div></td>
            </tr>

            <tr>
              <td height="21"><div align="center">disponiobilidad</div></td>
              <td height="21"><div align="center"><span class="Estilo1"></span>
                <select name="disponiobilidad" >
                  <option value="sel:" selected="selected">sel:</option>
                  <option value="Diurno">Diurno</option>
                  <option value="Nocturno">Nocturno</option>
                  <option value="Fin de Semana">Fin de semana</option>
                </select>
              </div></td>
            </tr>

            <tr>
              <td height="21" colspan="2"><div align="center" class="Estilo4">
                  <label>
                  <input type="submit" name="Submit" value="Enviar" />
                  </label>
                </div>
                  <div align="center"><span class="Estilo1"></span>
                      <label></label>
                </div></td>
            </tr>
          </table>
      </form>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
  </tr>
</table>
</body>
</html>
@endsection