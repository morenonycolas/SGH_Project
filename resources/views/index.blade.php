@extends('layout/master')
@section('content')
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<body>
<table width="900" border="1" align="center">
  <tr>
    <td height="48" colspan="3"><img src={{'fondo_la92.png'}} width="903" height="160" /></td>
  </tr>
  <tr>
    <td height="182"><form id="form1" name="form1" method="post" action="">
      <p align="center">Ambientes de formaci&oacute;n      </p>
      <p align="center"><img src="30_salaArta.jpg" width="214" height="131" /></p>
    </form>    
    <p>&nbsp;</p>    </td>
    <td class= "fondo" align="center"><form id="form1" name="form1" method="post" action="">
      <p align="center">instructores    </p>
      <p></p>
    </form>
    <p>&nbsp;</p>    </td>
    <td><form id="form1" name="form1" method="post" action="">
      <p align="center">fichas de formaci&oacute;n    </p>
      <p align="center"><img src="fichas-puzzle-formacion.jpg" width="224" height="131" /></p>
    </form>
      <form id="form2" name="form2" method="post" action="">
        <label>
        
        <div align="right">
         
          <a href="{{url('auth/login')}}" target="_parent"> <input name="sesion" type="button"  id="sesion" value=" iniciar sesion " /></a>         
            <a href="{{url('auth/register')}}" target="_parent"> <input name="sesion" type="button"  id="sesion" value ="registrarse " /></a>  

            </div>
        </label>
      </form>    </td>
  </tr>
  <tr>
    <td colspan="3"><img src="Copy-of-footer.png" width="901" height="90" /></td>
  </tr>
</table>
<h2>  </h2>
</body>
</html>
@endsection
