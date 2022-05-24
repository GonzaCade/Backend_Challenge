

<?php $__env->startSection('name', 'Home'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row justify-content-center">
        <div class="col-md-8 col-sm-12 mx-auto">
            <div class="d-flex justify-content-between align-items-center">
                <h1>Home</h1>
                <a class="btn btn-primary" href="<?php echo e(route('posts.create')); ?>">Crear post</a>
            </div>
            <div class="d-flex flex-wrap justify-content-between align-items-start">
                <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="card border-0 shadow-sm mt-4 mx-auto" style="width: 18rem;">
                        <?php if($post->imagen): ?>
                            <img src="/storage/<?php echo e($post->imagen); ?>" class="card-img-top" alt="<?php echo e($post->titulo); ?>">
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($post->titulo); ?></h5>
                            <p class="card-text text-truncate"><?php echo e($post->descripcion); ?></p>
                            <a class="btn btn-primary"
                                href="<?php echo e(route('posts.show', $post->slug)); ?>">Ver mas...</a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="card-body">
                        <p class="card-text">No hay posts para mostrar</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\Backend_Challenge\resources\views/posts/index.blade.php ENDPATH**/ ?>