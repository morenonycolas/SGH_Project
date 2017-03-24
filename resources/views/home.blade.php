@extends ('layout.master')
@section ('content')
<h1> Bienvenido </h1>

@if (Auth::check())
	{{Auth::user()->name}}
@endif <br>

<a href="auth/logout"> cerrar sesión </a> <br>

@endsection