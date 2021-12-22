@extends('layout.app')

@section('conteudo')
	<h3 class="display-3 text-center">Usuário selecionado</h3>
	<ul class="list-group">
		<li class="list-group-item">{{$user->name}}</li>
		<li class="list-group-item">{{$user->email}}</li>
	</ul>
@endsection

<!--<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ver</title>
</head>
<body>
	
</body>
</html> -->