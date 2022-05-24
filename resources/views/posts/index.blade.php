@extends('layout')

@section('name', 'Home')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8 col-sm-12 mx-auto">
            <div class="d-flex justify-content-between align-items-center">
                <h1>Home</h1>
                <a class="btn btn-primary" href="{{ route('posts.create') }}">Crear post</a>
            </div>
            <div class="d-flex flex-wrap justify-content-between align-items-start">
                @forelse($posts as $post)
                    <div class="card border-0 shadow-sm mt-4 mx-auto" style="width: 18rem;">
                        @if ($post->imagen)
                            <img src="/storage/{{ $post->imagen }}" class="card-img-top" alt="{{ $post->titulo }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->titulo }}</h5>
                            <p class="card-text text-truncate">{{ $post->descripcion }}</p>
                            <a class="btn btn-primary"
                                href="{{ route('posts.show', $post->slug) }}">Ver mas...</a>
                        </div>
                    </div>
                @empty
                    <div class="card-body">
                        <p class="card-text">No hay posts para mostrar</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
