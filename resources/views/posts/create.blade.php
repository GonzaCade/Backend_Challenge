@extends('layout')

@section('name','Crear')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm mt-3">
            <div class="card-body">
				<h1>Crear post</h1>

				@include('partials.validation-errors')

				<form method="POST" enctype="multipart/form-data" action="{{ route('posts.store') }}">
					@include('posts._form', ['btnText' => 'Guardar'])
				</form>
            </div>
        </div>
    </div>
</div>
@endsection