@extends('layouts/master')

@section ('titulo')Usuario {{$elusuario->username}} @stop

@section('contenido')
	<h2>Usuario: {{$elusuario->username}}</h2>
	<p>E-mail: {{$elusuario->email}}</p>
	<p>Biografía: {{$elusuario->bio}}</p>

	@if ($propietario)
	<a href="/users/{{$elusuario->id}}/edit">Editar mi perfil</a>
	@endif

	| <a href="/users">Volver</a>
@stop
