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
        <form id="form1" name="form1" method="post" action="{{url('registro_de_horario')}}">
        {!! csrf_field()!!}
          <table width="527" border="0" align="center">
            <tr>
              <td width="210"><div align="center" class="Estilo4">descripcion del  ambiente</div></td>
              
              
              <td width="307"><div align="center"><span class="Estilo1"></span>

                      <label>
                      <input name="numero_ambiente" type="text" size="30" placeholder="Numero de ambiente"/>
                      </label>
              </div></td>
            </tr>
             <tr>
               <td colspan="2">----------------------------------------------------------------------------------</td>
             </tr>
             <tr>
              <td colspan="2"><div align="center">FICHA</div>                
                <div align="center"></div></td>
            </tr>
            <tr>
              <td><div align="center" class="Estilo4">Programa de formacion </div></td>
              <td><div align="center"><span class="Estilo1"></span>
                      <label>
                      <input name="programa_formacion" type="text" size="30" placeholder="programa de formacion" />
                      </label>
              </div></td>
            </tr>
            <tr>
              <td><div align="center" class="Estilo4">numero</div></td>
              <td><div align="center"><span class="Estilo1"></span>
                      <label>
                      <input name="numero_ficha" type="text" size="30" placeholder="Numero de ficha"/>
                      </label>
              </div></td>
            </tr>
            <tr>
              <td height="21"><div align="center">Grupo</div></td>
              <td><div align="center">
                <input name="grupo" type="text" id="grupo" size="30" placeholder="Numero de ficha"/>
              </div></td>
            </tr>
            <tr>
              <td height="21" colspan="2">-------------------------------------------------------------------------------------</td>
            </tr>
            <tr>
              <td height="21" colspan="2"><div align="center">Intstructor</div></td>
            </tr>
            <tr>
              <td height="21"><div align="center" class="Estilo1">nombre</div></td>
              <td><div align="center">
                  <input name="nombre_instructor" type="text" size="29" placeholder="Nombre completo"  /> 
                  <label> <br />
                  </label>
              </div></td>
            </tr>
            <tr>
              <td height="21"><div align="center">Documento</div></td>
              <td height="21"><div align="center">
                <input name="documento" type="text" id="documento" size="30" placeholder="identificacion" />
              </div></td>
            </tr>
            <tr>
              <td height="21"><div align="center">telefono</div></td>
              <td height="21"><div align="center">
                <input name="telefono" type="text" id="telefono" size="30" placeholder="identificacion" />
              </div></td>
            </tr>
            <tr>
              <td height="21"><div align="center">correo</div></td>
              <td height="21"><div align="center">
                <input name="correo" type="text" id="correo" size="30" placeholder="identificacion" />
              </div></td>
            </tr>
            <tr>
              <td height="21"><div align="center">programa de formacion </div></td>
              <td height="21"><div align="center">
                <input name="programa_de_formacion" type="text" id="programa_de_formacion" size="30" placeholder="identificacion" />
              </div></td>
            </tr>
            <tr>
              <td height="21"><div align="center">especializacion</div></td>
              <td height="21"><div align="center">
                <input name="programa_de_formacion2" type="text" id="programa_de_formacion2" size="30" placeholder="identificacion" />
              </div></td>
            </tr>
            <tr>
              <td height="21"><div align="center">disponiobilidad</div></td>
              <td height="21"><div align="center">
                <select name="jornada" >
                  <option value="sel:" selected="selected">sel:</option>
                  <option value="Diurno">Diurno</option>
                  <option value="Nocturno">Nocturno</option>
                </select>
              </div></td>
            </tr>
            <tr>
              <td height="21" colspan="2">--------------------------------------------------------------------------------------</td>
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
