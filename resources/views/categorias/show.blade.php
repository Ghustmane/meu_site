@extends('layout.app')

@section('conteudo')
	<h3 class="display-3 text-center">Mostrar</h3>
			<div class="jumbotron">
				<h3 class="display-4">{{$categoria->nome}}</h3>
				<hr class="my-4">
			</div>
@endsection