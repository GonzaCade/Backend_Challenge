

<?php $__env->startSection('name','Crear'); ?>

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
    <div class="col-md-8 col-sm-12 mx-auto">
        <div class="card shadow-sm mt-3">
            <div class="card-body">
				<h1>Crear post</h1>

				<?php echo $__env->make('partials.validation-errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

				<form method="POST" enctype="multipart/form-data" action="<?php echo e(route('posts.store')); ?>">
					<?php echo $__env->make('posts._form', ['btnText' => 'Guardar'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				</form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\Backend_Challenge\resources\views/posts/create.blade.php ENDPATH**/ ?>