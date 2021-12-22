@extends('layout.app')

@section('conteudo')
<h3 class="display-3 text-center">Categorias</h3>
<br>
<div class="row">
		<a class="btn btn-success btn-lg btn-block" href="{{route('categorias.create')}}">
			<i data-feather="plus-square"></i>
		Nova categoria
		</a>	
	</div>
	<br>
<!--<a class="btn btn-success btn-lg btn-block" href="{{route('categorias.create')}}">Criar uma categoria</a>-->
	
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Nome</th>
				<th>Visualizar</th>
				<th>Editar</th>
				<th>Deletar</th>
			</tr>
		</thead>
		<tbody>
			@forelse($categorias as $categoria)
			<tr>
				<td>{{$categoria->nome}}</td>
				<td><a href="{{route('categorias.show', $categoria->id)}}" class="btn btn-primary">Ver</a></td>
				<td><a href="{{route('categorias.edit', $categoria->id)}}" class="btn btn-success">Editar</a></td>
				<td>
					<form action="{{route('categorias.destroy', $categoria->id)}}" method="post">
						@csrf
						@method('DELETE')
						<button class="btn btn-danger" type="submit">Apagar</button>
					</form>
				</td>
			</tr>

			@empty
			<tr>
				<td colspan="4">não existem regristros nesse modelo</td>
			</tr>
			@endforelse
		</tbody>
	</table>
@endsection