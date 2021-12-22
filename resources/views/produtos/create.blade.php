@extends('layout.app')

@section('conteudo')
<div class="card">
	<div class="card-body">
		<h1 class="display-2 mb-3 text-center">
			Formulário de criação de produto
		</h1>
<form method="POST" action="{{route('produtos.store')}}" 
	enctype="multipart/form-data">
	@csrf
	<label class="form-label" for="nome">Nome</label>
	<input type="text" name="nome" id="nome" class="form-control">
	
	<label class="form-label" for="url_imagem">Url da imagem</label>
	<input type="file" name="url_imagem" id="url_imagem" class="form-control">
	
	<label class="form-label" for="quantidade">Quantidade</label>
	<input type="text" name="quantidade" id="quantidade" class="form-control">
	<br>
	<button type="submit" class="btn btn-success">Salvar</button>

</form>
	</div>
</div>
@endsection