<?php

/**
 @file: index.blade
 @brief: se encuentra la pagina principal que encontrara el usuario 
 @date: 28/03/2017
 @author: nycolas moreno marquez
 @return: auth
*/

?>

@extends('layout/master')
@section('content')
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
#Layer1 {
  position:absolute;
  width:900px;
  height:115px;
  z-index:1;
  left: 227px;
  top: 1484px;
}
-->
</style>
<link href="estilos.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.Estilo3 {color: #FFFFFF}
-->
</style>
</head>

<body>
<script src="../../../wamp64/www/SGH_Project/database/migrations/SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="../../../wamp64/www/SGH_Project/database/migrations/SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<table width="900" border="0" align="center" bgcolor="#CCCCCC" >
  <tr>
    <td colspan="2" ><div align="center"><img src="baner.png" width="450" height="130" /><img src="baner.png" width="450" height="130" /></div></td>
  </tr>
  <tr>
     <td colspan="2" ><div align="center"> <iframe src="menu" width="900" height="100" scrolling="no" /> </iframe> </div></td>
 
</td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#00CCCC"><marquee behavior="alternate" width="900" height="536" >
  <div align="center" z-index="5"> <img src="slider_politica.jgp" width="990" height="536" align="absmiddle" z-index="5"/>
  <img src="slider_olimpiadas.png" width="900" height="536" align="absmiddle"  />
  <img src="slider_ceet.jpg" width="900" height="536" align="absmiddle"  /> </div>
  </marquee>  </td> </td>
  </tr>
  <tr>
    <td width="64"><header>

<div class="container">
  <h1>Objetivo General</h1>
  </div>
  </header>
  <div class="container">
  <section class="main row" align="center">
  <article class="col-lg-9" align="center" >
    <p>
     Desarrollar e implementar un sistema informático que apoye y contemple posibles mejoras en el proceso de asignación de horarios para el Centro de Electricidad Electrónica y Telecomunicaciones, del SENA (CEET) - Sede Colombia.
    </p>
     <div align="right">
         
          <a href="{{url('auth/login')}}" target="_parent"> <input name="sesion" type="button"  id="sesion" value=" iniciar sesion " align="right" ="right"/></a>         
            <a href="{{url('auth/register')}}" target="_parent"> <input name="sesion" type="button"  id="sesion" value ="registrarse " align="right" /></a>  

            </div>
    </td>
  </tr>
  </table>


<div align="center" id="Layer1" position="fixed" width="100%" bgcolor="red" >
  <p>&nbsp;</p>
  <p>BIENVENIDO</p>
</div>
</body>
</html>
@endsection
