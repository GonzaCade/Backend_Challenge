<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
	<title><?php echo $__env->yieldContent('name','Ejemplo'); ?></title>
	<link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">
	<script src="<?php echo e(mix('js/app.js')); ?>"></script>
</head>
<body style="padding-top: 4rem;">
	<div id="app" class="d-flex h-screen justify-content-between flex-column">
		<header>
			<?php echo $__env->make('partials/nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			<?php echo $__env->make('partials.status', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</header>

		<main class="py-4">
			<?php echo $__env->yieldContent('content'); ?>
		</main>
	</div>
</body>
</html><?php /**PATH D:\laragon\www\Backend_Challenge\resources\views/layout.blade.php ENDPATH**/ ?>