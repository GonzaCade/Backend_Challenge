<!DOCTYPE html>
<html>
<head>
	<title>Mensaje Recibido</title>
</head>
<body>
	<p>Recibiste un mensaje de: <?php echo e($msg['nombre']); ?> - <?php echo e($msg['email']); ?></p><br>
	<p><strong>Asunto:</strong><?php echo e($msg['asunto']); ?></p><br>
	<p><strong>Contenido:</strong><?php echo e($msg['contenido']); ?></p>
</body>
</html><?php /**PATH D:\laragon\www\Backend_Challenge\resources\views/emails/message-received.blade.php ENDPATH**/ ?>