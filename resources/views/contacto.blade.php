@extends('layout')

@section('name','Contacto')

@section('content')
<div class="row justify-content-center">
	<div class="col-md-8 col-sm-12">
		<div class="card shadow-sm mt-3 d-grid">
            <div class="card-body">
				<h1>Contacto</h1>
				<form method="POST" action="{{ route('contacto') }}">
					@csrf
					<input class="form-control" name="nombre" placeholder="Nombre..." value="{{ old('nombre') }}"><br>
					{!! $errors->first('nombre', '<small>:message</small><br>') !!}

					<input class="form-control" type="text" name="email" placeholder="Email..." value="{{ old('email') }}"><br>
					{!! $errors->first('email', '<small>:message</small><br>') !!}

					<input class="form-control" name="asunto" placeholder="Asunto..." value="{{ old('asunto') }}"><br>
					{!! $errors->first('asunto', '<small>:message</small><br>') !!}

					<textarea class="form-control" name="contenido" placeholder="Mensaje...">{{ old('contenido') }}</textarea><br>
					{!! $errors->first('contenido', '<small>:message</small><br>') !!}

					<button class="btn btn-primary">Enviar</button>
				</form>
            </div>
        </div>
    </div>
</div>
@endsection