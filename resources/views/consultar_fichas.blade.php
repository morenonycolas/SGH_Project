<?php

/**
 @file: insertar_ambientes.blade
 @brief: se encuentra la pagina para la consulta de fichas
 @brief:'descripcion'
 @date 28/03/2017
 @author nycolas moreno marquez
  @return: controller/insertar_db_fichacontroller
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
<td> Programa </td>  
<td> Numero </td>
<td> Grupo </td> 
<td> Opciones </td>     

</tr>

@foreach ($ficha as $numero)

<tr>
 
 <td>{{$numero->id}}</td>
 <td>{{$numero->programa}}</td>
 <td>{{$numero->numero_ficha}}</td>
 <td>{{$numero->grupo}}</td>
 <td><a href="{{url('editar_fichas', $numero->id)}}">Editar Ficha</a> </br>
 <a href="{{url('eliminar_fichas', $numero->id)}}">Eliminar Ficha</a>
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
