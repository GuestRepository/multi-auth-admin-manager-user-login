<?php $__env->startSection('title', 'Admin Jobs Applied'); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-2">left</div>
        <div class="col-10">
            <!-- wirte content from here open -->
            <h1> Applied Jobs List</h1>
            <table class="table">
        <thead>
            <tr>
                <th>Course Name</th>
                <th>Applied Jobs</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $courseCounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $courseCount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($courseCount->course); ?></td>
                <td><?php echo e($courseCount->user_count); ?>   </td>
                <td>
                    <a href="<?php echo e(route('applied.jobs.view', ['course' => $courseCount->course])); ?>" class="btn btn-primary">View Users</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
            <!-- wirte content from here close -->
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practice-code\mycv\resources\views/admin/applied-jobs/index.blade.php ENDPATH**/ ?>