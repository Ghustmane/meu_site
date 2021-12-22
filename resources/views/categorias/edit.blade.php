@extends('layout.app')

@section('conteudo')
	<h3 class="display-3 text-center">Edita uma categoria</h3>
	<form action="{{route('categorias.update', $categoria->id)}}" method="POST">
		@csrf
		@method('put')
		<div class="form-group">
			<label for="nome">Digite o nome:</label>
			<input type="text" name="nome" id="nome" class="form-control" value="{{$categoria->nome}}">
		</div>
		<br>
		<button type="submit" class="btn btn-success">Salvar</button>
	
	</form>
@endsection