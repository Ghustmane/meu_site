@extends('layout.app')

@section('conteudo')
<h3 class="display-3 text-center">Mostrar</h3>
<div class="col-md-6 col-sm-12">
	<div class="card">
		<!--<img src="{{asset('storage/'.$produto->url_imagem)}}" class="card-img-top">-->
		<img src="{{$produto->url_imagem}}" class="card-img-top" alt="...">
		<div class="card-body">
			<p class="card-text  text-center">
				<a href="{{route('produtos.show', $produto->id)}}">
					{{$produto->nome}}
				</a>
			</p>
		</div>
	</div>
</div>
@endsection