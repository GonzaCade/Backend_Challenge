@extends('layout')

@section('name','Home')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm mt-3">
            <div class="card-body">
				<h1>Home</h1>
				<table class="table table-sm table-hover">
					<tr>
						<th>Titulo</th>
						<th>Descripcion</th>
						<th>Creado</th>
					</tr>
						@forelse($posts as $post)
							<tr>
								<td><a href="{{ route('posts.show', $post->slug) }}">{{ $post->titulo }}</a></td>
								<td>{{ $post->descripcion }}</td>
								<td>{{ $post->created_at->format('d/m/Y') }}</td>
							</tr>
						@empty
							<tr>
								<td colspan="3">No hay posts para mostrar</td>
							</tr>
						@endforelse
				</table>
				<a class="btn btn-primary" href="{{ route('posts.create') }}">Crear post</a>
            </div>
        </div>
    </div>
</div>
@endsection