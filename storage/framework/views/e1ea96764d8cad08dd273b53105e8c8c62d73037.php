 <div class="row text-center justify-content-center d-grid">
 	<?php echo csrf_field(); ?>
     <?php if($post->imagen): ?>
         <img src="/storage/<?php echo e($post->imagen); ?>" class="card-img-top img-size" alt="<?php echo e($post->titulo); ?>">
     <?php endif; ?>
	<label class="col-form-label"> Titulo del post <br>
	<input class="form-control" maxlength="100" type="text" name="titulo" value="<?php echo e(old('titulo', $post->titulo)); ?>">
	</label>
	<br>
	<label class="col-form-label"> SLUG <br>
	<input class="form-control" maxlength="100" type="text" name="slug" value="<?php echo e(old('slug', $post->slug)); ?>">
	</label>
	<br>
	<label class="col-form-label"> Descripcion <br>
	<textarea class="form-control" name="descripcion"><?php echo e(old('descripcion', $post->descripcion)); ?></textarea>
	</label>
	<br>
	<label class="col-form-label"> Imagen <br>
	<input class="form-control" type="file" name="imagen" accept="image/*">
	<br>
	<button class="btn btn-primary btn-lg"><?php echo e($btnText); ?></button>
	<a href="<?php echo e(route('home')); ?>" class="btn btn-link">Cancelar</a>
</div><?php /**PATH D:\laragon\www\Backend_Challenge\resources\views/posts/_form.blade.php ENDPATH**/ ?>