<?php

/**
 @file: insertar_ambientes.blade
 @brief: se encuentra la pagina para el registro de ambientes
 @brief:'descripcion'
 @date 28/03/2017
 @author nycolas moreno marquez
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
        <form id="insertar_ambientes" name="insertar_ambientes" method="post" action="{{url('insertar_ambientes')}}">
        {!!csrf_field()!!}
          <table width="527" border="0" align="center">
            <tr>
              <td width="210"><div align="center" class="Estilo4">descripcion del  ambiente</div></td>
              
              
              <td width="307"><div align="center"><span class="Estilo1"></span>

                      <label>
                      <input name="descripcion" type="text" size="30" placeholder="Numero de ambiente"/>
                      </label>
              </div>
              </td> 

            </tr>

            <tr>
               <td width="210"><div align="center" class="Estilo4">Jornada de Uso</div></td>
              
              
              <td width="307"><div align="center"><span class="Estilo1"></span>

                      <label>
                      <input name="jornada_uso" type="text" size="30" placeholder="Jornada/s de Uso"/>
                      </label>
              </div>
              </td>
            </tr>
             <tr>
               <td colspan="2">----------------------------------------------------------------------------------</td>
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
