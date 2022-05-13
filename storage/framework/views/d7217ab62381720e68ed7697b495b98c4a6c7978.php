

<?php $__env->startSection('name','Posts'); ?>

<?php $__env->startSection('content'); ?>
	<h1>Posts</h1>

	<table>
		<tr>
			<th>Titulo</th>
			<th>Descripcion</th>
			<th>Creado</th>
		</tr>
			<?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
				<tr>
					<td><a href="<?php echo e(route('home.show', $post)); ?>"><?php echo e($post->titulo); ?></a></td>
					<td><?php echo e($post->descripcion); ?></td>
					<td><?php echo e($post->created_at->format('d/m/Y')); ?></td>
				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
				<tr>
					<td>No hay posts para mostrar</td>
				</tr>
			<?php endif; ?>
	</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\Backend_Challenge\resources\views/home.blade.php ENDPATH**/ ?>