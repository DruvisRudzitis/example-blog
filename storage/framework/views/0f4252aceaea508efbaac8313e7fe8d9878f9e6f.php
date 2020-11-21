<?php $__env->startSection('content'); ?>
    <div class="container">
        <a href="<?php echo e(route('articles.index')); ?>" class="btn btn-primary btn-sm">
            Back
        </a>
        <form method="post" action="<?php echo e(route('articles.update', $article)); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Your article title" value="<?php echo e($article->title); ?>">
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea class="form-control" name="content" id="content" cols="30" rows="5"><?php echo e($article->content); ?></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/druvis/PhpstormProjects/laravel3/example-blog/resources/views/articles/edit.blade.php ENDPATH**/ ?>