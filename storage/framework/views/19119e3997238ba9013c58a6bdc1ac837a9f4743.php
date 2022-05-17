<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $__env->yieldContent('name','Ejemplo'); ?></title>
	<link rel="stylesheet" href="/css/app.css">
	<script type="text/javascript" src="/js/app.js" defer></script>
</head>
<body style="padding-top: 7rem;">
	<div class="container-fluid">
		<?php echo $__env->make('partials/nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php echo $__env->yieldContent('content'); ?>
	</div>
</body>
</html><?php /**PATH D:\laragon\www\Backend_Challenge\resources\views/layout.blade.php ENDPATH**/ ?>