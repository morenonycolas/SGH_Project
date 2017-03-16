@extends ('layout.master')
@section ('content')
<div align="center">
<ul>
<body>
<table border="1">
<tr>
<td> Id </td> 
<td> Descripcion </td>  
<td> Opciones </td>   

</tr>

@foreach ($ambiente as $descripcion)

<tr>
 
 <td>{{$descripcion->id}}</td>
 <td>{{$descripcion->descripcion}}</td>
 <td><a href="{{url('editar_ambientes', $descripcion->id)}}">Editar Ambiente</a> </br>
 <a href="{{url('eliminar_ambientes', $descripcion->id)}}">Eliminar Ambiente</a>
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





