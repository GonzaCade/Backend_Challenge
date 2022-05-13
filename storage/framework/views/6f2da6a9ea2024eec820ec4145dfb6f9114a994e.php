

<?php $__env->startSection('name','Home'); ?>

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm mt-3">
            <div class="card-body">
				<h1>Home</h1>
				<table class="table table-sm table-hover">
					<tr>
						<th>Titulo</th>
						<th>Descripcion</th>
						<th>Creado</th>
					</tr>
						<?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
							<tr>
								<td><a href="<?php echo e(route('posts.show', $post->slug)); ?>"><?php echo e($post->titulo); ?></a></td>
								<td><?php echo e($post->descripcion); ?></td>
								<td><?php echo e($post->created_at->format('d/m/Y')); ?></td>
							</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
							<tr>
								<td colspan="3">No hay posts para mostrar</td>
							</tr>
						<?php endif; ?>
				</table>
				<a class="btn btn-primary" href="<?php echo e(route('posts.create')); ?>">Crear post</a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\Backend_Challenge\resources\views/posts/index.blade.php ENDPATH**/ ?>