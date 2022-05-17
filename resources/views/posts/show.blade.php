
@extends('layout')

@section('name','Post | ' . $post->titulo)

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm mt-3">
            <div class="card-body text-center justify-content-center">
				<h1>{{ $post->titulo}}</h1>
				<img src="{{asset($post->imagen)}}" alt="{{ $post->titulo}}" class="img-fluid img-thmbnail" width="240vw">
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