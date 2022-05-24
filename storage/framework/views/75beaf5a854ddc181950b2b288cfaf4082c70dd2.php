

<?php $__env->startSection('name','Contacto'); ?>

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
	<div class="col-md-8 col-sm-12">
		<div class="card shadow-sm mt-3 d-grid">
            <div class="card-body">
				<h1>Contacto</h1>
				<form method="POST" action="<?php echo e(route('contacto')); ?>">
					<?php echo csrf_field(); ?>
					<input class="form-control" name="nombre" placeholder="Nombre..." value="<?php echo e(old('nombre')); ?>"><br>
					<?php echo $errors->first('nombre', '<small>:message</small><br>'); ?>


					<input class="form-control" type="text" name="email" placeholder="Email..." value="<?php echo e(old('email')); ?>"><br>
					<?php echo $errors->first('email', '<small>:message</small><br>'); ?>


					<input class="form-control" name="asunto" placeholder="Asunto..." value="<?php echo e(old('asunto')); ?>"><br>
					<?php echo $errors->first('asunto', '<small>:message</small><br>'); ?>


					<textarea class="form-control" name="contenido" placeholder="Mensaje..."><?php echo e(old('contenido')); ?></textarea><br>
					<?php echo $errors->first('contenido', '<small>:message</small><br>'); ?>


					<button class="btn btn-primary">Enviar</button>
				</form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\Backend_Challenge\resources\views/contacto.blade.php ENDPATH**/ ?>