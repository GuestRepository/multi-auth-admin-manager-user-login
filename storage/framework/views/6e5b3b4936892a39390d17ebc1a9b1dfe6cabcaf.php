<?php $__env->startSection('title', 'Admin Jobs Applied List'); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-2">left</div>
        <div class="col-10">
            <!-- wirte content from here open -->

            <h1 class="text-warning">Applied Jobs Create List <span class="text-danger"><?php echo e($course); ?></span></h1>
            <?php $__currentLoopData = $getCourses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card mt-2 shadow">
                    <div class="card-header">
                        <h4> Name : <span class="text-primary"><?php echo e($user->name); ?></span></h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tbody>

                                <tr>
                                    <th>Name</th>
                                    <td><?php echo e($user->name); ?></td>
                                    <th>Email</th>
                                    <td><?php echo e($user->email); ?></td>
                                    <th>Email</th>
                                    <td><?php echo e($user->email); ?></td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td><?php echo e($user->phone); ?></td>
                                    <th>Email</th>
                                    <td><?php echo e($user->email); ?></td>
                                    <th>Email</th>
                                    <td><?php echo e($user->email); ?></td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td><?php echo e($user->name); ?></td>
                                    <th>Email</th>
                                    <td><?php echo e($user->email); ?></td>
                                    <th>Email</th>
                                    <td><?php echo e($user->email); ?></td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td><?php echo e($user->phone); ?></td>
                                    <th>Email</th>
                                    <td><?php echo e($user->email); ?></td>
                                    <th>Email</th>
                                    <td><?php echo e($user->email); ?></td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <?php if($user->is_blocked == 1): ?>
                                    <td class="text-danger"> Block</td>

                                    <?php elseif($user->is_blocked == 0): ?>
                                    <td class="text-success"> UnBlock</td>

                                    <?php endif; ?>
                                </tr>

                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md-9"></div>
                            <div class="col-md-3">
                                <tr>
                                    <td>
                                        <a href="<?php echo e(route('admin.applied.jobs.index')); ?>" class="text-white btn btn-warning"> <i class="fa fa-home"></i> Back  </a>
                                        <a href="<?php echo e(url('admin-applied-jobs-edit', $user->id)); ?>" class="text-white btn btn-warning"> <i class="fa fa-borad"></i> show details</a>
                                    </td>
                                </tr>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <!-- wirte content from here close -->
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practice-code\mycv\resources\views/admin/applied-jobs/show-applied-list.blade.php ENDPATH**/ ?>