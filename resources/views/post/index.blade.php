@extends('layout.app')

@section('conteudo')
<h3 class="display-3 text-center">Posts</h3>
<br>
<div class="row">
		<a class="btn btn-success btn-lg btn-block" href="{{route('post.create')}}">
			<i data-feather="plus-square"></i>
		Novo post
		</a>	
	</div>
	<br>
<!--<a class="btn btn-success btn-lg btn-block" href="{{route('categorias.create')}}">Criar uma categoria</a>-->
	
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Titulo</th>
				<th>Categoria</th>
				<th>Visualizar</th>
				<th>Editar</th>
				<th>Deletar</th>
			</tr>
		</thead>
		<tbody>
			@forelse($posts as $post)
			<tr>
				<td>{{$post->titulo}}</td>
				<td>{{$post->categoria_id}}</td>
				<td><a href="{{route('post.show', $post->id)}}" class="btn btn-primary">Ver</a></td>
				<td><a href="{{route('post.edit', $post->id)}}" class="btn btn-success">Editar</a></td>
				<td>
					<form action="{{route('post.destroy', $post->id)}}" method="post">
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