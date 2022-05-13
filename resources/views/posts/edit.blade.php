@extends('layout')

@section('name','Editar')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm mt-3">
            <div class="card-body">
				<h1>Editar post</h1>

				@include('partials.validation-errors')

				<form method="POST" enctype="multipart/form-data" action="{{ route('posts.update', $post) }}">
					@method('PATCH')
					@include('posts._form', ['btnText' => 'Actualizar'])
				</form>
            </div>
        </div>
    </div>
</div>
@endsection