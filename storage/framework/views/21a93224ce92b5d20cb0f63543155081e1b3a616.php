

<?php $__env->startSection('name','Editar'); ?>

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm mt-3">
            <div class="card-body">
				<h1>Editar post</h1>

				<?php echo $__env->make('partials.validation-errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

				<form method="POST" enctype="multipart/form-data" action="<?php echo e(route('posts.update', $post)); ?>">
					<?php echo method_field('PATCH'); ?>
					<?php echo $__env->make('posts._form', ['btnText' => 'Actualizar'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				</form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\Backend_Challenge\resources\views/posts/edit.blade.php ENDPATH**/ ?>