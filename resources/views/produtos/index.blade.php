@extends('layout.app')
@section('conteudo')
<!-- esse arquivo  fica dentro de resources/views/produtos -->
	<h3 class="display-3 text-center">Produtos</h3>
	<br>
	<div class="row">
		<a class="btn btn-success" href="{{route('produtos.create')}}">
			<i data-feather="plus-square"></i> 
		Novo Produto
		</a>	
	</div>
	<br>
	<div class="row">
	@foreach($produtos as $produto)
	
		<div class="col col-3">
			<div class="card">
				<img src="{{$produto->url_imagem}}" class="card-img-top" alt="...">
				<div class="card-body">
					<p class="card-text text-center">
						{{$produto->nome}}
					</p>
				</div>
				<div class="card-footer">
					<div class="row">
						<div class="col col-4 d-grid gap-2">
							<a href="{{route('produtos.show', $produto->id)}}" class="btn btn-outline-primary">
								<i data-feather="eye"></i>
							</a>
						</div>
						<div class="col col-4 d-grid gap-2">
							<a href="{{route('produtos.edit', $produto->id)}}" class="btn btn-outline-success">
								<i data-feather="edit"></i>
							</a>
						</div>
						<div class="col col-4 d-grid gap-2">
							<form action="{{route('produtos.destroy', 
							  $produto->id)}}" method="POST" class="d-grid gap-2">
								@csrf
								@method('DELETE')
								<button type="submit" class="btn btn-outline-danger">
									<i data-feather="trash-2">
								</i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	@endforeach
</div>
@endsection