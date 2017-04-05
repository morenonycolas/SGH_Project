<!-- resources/views/auth/register.blade.php -->
@extends('layout/master')
@section('content')



<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

<form class="form-horizontal" method="POST" action="/auth/register">

{!!csrf_field()!!}
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
    <div class="col-sm-10">
      <input  name="name" type="name"  value="{{ old('name')}}" class="form-control" id="inputEmail3" placeholder="Name">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Correo</label>
    <div class="col-sm-10">
      <input name="email" type="email"  value="{{ old('email')}}" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Contraseña</label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
 

 <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Confirmar Contraseña</label>
    <div class="col-sm-10">
      <input  name="password_confirmation" type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Registrarse</button>
    </div>
  </div>
</form>
@endsection