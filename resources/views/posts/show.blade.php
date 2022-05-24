
@extends('layout')

@section('name','Post | ' . $post->titulo)

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm mt-3">
            <div class="card-body text-center justify-content-center">
				@if ($post->imagen)
					<img src="/storage/{{ $post->imagen }}" class="card-img-top" alt="{{ $post->titulo }}">
				@endif
				<h1>{{ $post->titulo}}</h1>
				<p>{{ $post->descripcion}}</p>
				<p>{{ $post->created_at}}</p>

				<form method="POST" action="{{ route('posts.destroy', $post) }}">
					@csrf @method('DELETE')
					<a class="btn btn-primary" href="{{ route('posts.edit', $post) }}">Editar</a>
					<button class="btn btn-danger">Eliminar</button>
				</form>
            </div>
        </div>
    </div>
</div>
@endsection