


<?php $__env->startSection('name','Post | ' . $post->titulo); ?>

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm mt-3">
            <div class="card-body text-center justify-content-center">
				<h1><?php echo e($post->titulo); ?></h1>
				<img src="<?php echo e(asset($post->imagen)); ?>" alt="<?php echo e($post->titulo); ?>" class="img-fluid img-thmbnail" width="240vw">
				<p><?php echo e($post->descripcion); ?></p>
				<p><?php echo e($post->created_at); ?></p>

				<form method="POST" action="<?php echo e(route('posts.destroy', $post)); ?>">
					<?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
					<a class="btn btn-primary" href="<?php echo e(route('posts.edit', $post)); ?>">Editar</a>
					<button class="btn btn-danger">Eliminar</button>
				</form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\Backend_Challenge\resources\views/posts/show.blade.php ENDPATH**/ ?>