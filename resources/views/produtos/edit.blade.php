@extends('layout.app')

@section('conteudo')
	<h3 class="display-3 text-center">Edita um produto</h3>
	<form method="POST"	action="{{route('produtos.update', $produto->id)}}">	
		@csrf
		@method('PUT') 
		<div class="form-group">
			<label class="form-label" for="nome">Nome:</label>
			<input type="text" name="nome" id="nome" class="form-control" value="{{$produto->nome}}">
			<label class="form-label" for="url_imagem"> Url da imagem:</label>
			<input type="text" name="url_imagem" id="url" class="form-control" value="{{$produto->url_imagem}}">
			<label class="form-label" for="quantidade"> Quantidade:</label>
			<input type="number" name="quantidade" id="quantidade" class="form-control" value="{{$produto->quantidade}}">
		</div>
		<br>
		<button type="submit" class="btn btn-success">Salvar</button>
</form>
@endsection