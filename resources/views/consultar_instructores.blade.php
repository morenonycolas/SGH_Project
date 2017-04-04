<?php

/**
 @file: consultar_instructores.blade
 @brief: se encuentra la pagina de consulta para los instructores
 @brief:'descripcion'
 @date 28/03/2017
 @author nycolas moreno marquez
 @return: controller/insertar_db_instructorcontroller
*/

?>

@extends ('layout.master')
@section ('content')
<div align="center">
<ul>
<body>
<table border="1">
<tr>
<td> Id </td> 
<td> Nombre </td>  
<td> Documento </td>
<td> Telefono </td> 
<td> Correo </td> 
<td> Programa de Formacion  </td> 
<td> Especializacion </td>
<td> Disponibilidad </td> 
<td> Opciones </td>       

</tr>

@foreach ($instructor as $datos)

<tr>
 
 <td>{{$datos->id}}</td>
 <td>{{$datos->documento}}</td>
 <td>{{$datos->nombre_completo}}</td>
 <td>{{$datos->telefono}}</td>
 <td>{{$datos->correo}}</td>
 <td>{{$datos->programa_de_formacion}}</td>
 <td>{{$datos->especializacion}}</td>
 <td>{{$datos->disponibilidad}}</td>
 <td><a href="{{url('editar_instructores', $datos->id)}}">Editar Instructor</a> </br>
 <a href="{{url('eliminar_instructores', $datos->id)}}">Eliminar Instructor</a>
 </td>
</tr> 

<ul>
 @endforeach   
</ul>   

@endsection
</table>
</body>
</ul>
</div>