@extends('layout.app')

@section('conteudo')
	<form action="{{route('post.store')}}" method="POST">
		@csrf
		<div class="form-group">
			<label class="form-label" for="titulo">Digite o titulo do post:</label>
			<input type="text" name="titulo" id="titulo" class="form-control">
		</div>
		<br>
		<div class="form-group">
			<label class="form-label" for="categoria_id">Escolha a categoria</label>
			<select class="custom-select" name="categoria_id" id="categoria_id">
				@foreach($categorias as $categoria)
				<option value="{{$categoria->id}}">{{$categoria->nome}}</option>
				@endforeach
			</select>
		</div>
			<br>
			<button type="submit" class="btn btn-success">Salvar</button>
	</form>

@endsection