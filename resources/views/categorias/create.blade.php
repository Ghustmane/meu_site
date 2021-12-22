@extends('layout.app')

@section('conteudo')
	<h3 class="display-3 text-center">Criar uma nova categoria</h3>
	<form action="{{route('categorias.store')}}" method="POST">
		@csrf
		<div class="form-group">
			<label for="nome">Digite o seu nome</label>
			<input type="text" name="nome" id="nome" class="form-control">
		</div>
		<br>
		<button type="submit" class="btn btn-success">Salvar</button>
	
	</form>
@endsection