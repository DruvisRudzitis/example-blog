<?php $__env->startSection('content'); ?>
    <div class="container">
        <a href="<?php echo e(route('articles.create')); ?>" class="btn btn-primary btn-sm">
            Create new article
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Updated at</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($article->id); ?></th>
                        <td><?php echo e($article->title); ?></td>
                        <td><?php echo e($article->created_at->format('Y-m-d h:i')); ?></td>
                        <td><?php echo e($article->updated_at->format('Y-m-d h:i')); ?></td>
                        <td>
                            <a href="<?php echo e(route('articles.edit', $article)); ?>" class="btn btn-sm btn-warning">
                                Edit
                            </a>
                            <form method="post" action="<?php echo e(route('articles.destroy', $article)); ?>" style="display: inline-block">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/druvis/PhpstormProjects/laravel3/example-blog/resources/views/articles/index.blade.php ENDPATH**/ ?>