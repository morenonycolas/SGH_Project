@extends('layout/master')
@section('content')
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>Style 10 (Orange) - Menu by Apycom.com</title>
    <link type="text/css" href="menu.css" rel="stylesheet" />
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="menu.js"></script>
</head>
<body>

<style type="text/css">
* { margin:0;
    padding:0;
}
html { background:#444; }
body {
    margin:50px auto;
    width:630px;
    height:466px;
    background:#222;
    overflow:hidden;
}
div#menu {
    top:40px;
    left:0px;
    width:100%;
    background:transparent url(images/header_bg.gif) repeat-x 0 0;  
}
div#copyright { display: none; }
</style>

<div id="menu">
    <ul class="menu">
        <li><a href="#" class="parent"><span>Home</span></a>
            <div><ul>
                <li><a href="#" class="parent"><span>Sub Item 1</span></a>
                    <div><ul>
                        <li><a href="#" class="parent"><span>Sub Item 1.1</span></a>
                            <div><ul>
                                <li><a href="#"><span>Sub Item 1.1.1</span></a></li>
                                <li><a href="#"><span>Sub Item 1.1.2</span></a></li>
                            </ul></div>
                        </li>
                        <li><a href="#"><span>Sub Item 1.2</span></a></li>
                        <li><a href="#"><span>Sub Item 1.3</span></a></li>
                        <li><a href="#"><span>Sub Item 1.4</span></a></li>
                        <li><a href="#"><span>Sub Item 1.5</span></a></li>
                        <li><a href="#"><span>Sub Item 1.6</span></a></li>
                        <li><a href="#" class="parent"><span>Sub Item 1.7</span></a>
                            <div><ul>
                                <li><a href="#"><span>Sub Item 1.7.1</span></a></li>
                                <li><a href="#"><span>Sub Item 1.7.2</span></a></li>
                            </ul></div>
                        </li>
                    </ul></div>
                </li>
                <li><a href="#"><span>Sub Item 2</span></a></li>
                <li><a href="#"><span>Sub Item 3</span></a></li>
            </ul></div>
        </li>
        <li><a href="#" class="parent"><span>Product Info</span></a>
            <div><ul>
                <li><a href="#" class="parent"><span>Sub Item 1</span></a>
                    <div><ul>
                        <li><a href="#"><span>Sub Item 1.1</span></a></li>
                        <li><a href="#"><span>Sub Item 1.2</span></a></li>
                    </ul></div>
                </li>
                <li><a href="#" class="parent"><span>Sub Item 2</span></a>
                    <div><ul>
                        <li><a href="#"><span>Sub Item 2.1</span></a></li>
                        <li><a href="#"><span>Sub Item 2.2</span></a></li>
                    </ul></div>
                </li>
                <li><a href="#"><span>Sub Item 3</span></a></li>
                <li><a href="#"><span>Sub Item 4</span></a></li>
                <li><a href="#"><span>Sub Item 5</span></a></li>
                <li><a href="#"><span>Sub Item 6</span></a></li>
                <li><a href="#"><span>Sub Item 7</span></a></li>
            </ul></div>
        </li>
        <li><a href="#"><span>Help</span></a></li>
        <li class="last"><a href="#"><span>Contacts</span></a></li>
    </ul>
</div>

<div id="copyright"></div>

<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

</body>
</html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
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
