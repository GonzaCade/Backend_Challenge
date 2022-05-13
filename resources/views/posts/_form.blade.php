 <div class="row text-center justify-content-center">
 	@csrf
	<label class="col-form-label"> Titulo del post <br>
	<input class="form-control" maxlength="100" type="text" name="titulo" value="{{ old('titulo', $post->titulo) }}">
	</label>
	<br>
	<label class="col-form-label"> SLUG <br>
	<input class="form-control" maxlength="100" type="text" name="slug" value="{{ old('slug', $post->slug) }}">
	</label>
	<br>
	<label class="col-form-label"> Descripcion <br>
	<textarea class="form-control" name="descripcion">{{ old('descripcion', $post->descripcion) }}</textarea>
	</label>
	<br>
	<label class="col-form-label"> Imagen <br>
	<input class="form-control" type="file" name="imagen" accept="image/*">
	<br>
	<button class="btn btn-primary">{{ $btnText }}</button>
</div>