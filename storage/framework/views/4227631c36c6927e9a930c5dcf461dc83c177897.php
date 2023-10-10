<?php $__env->startSection('title', 'Admin User Applied details'); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-2">left</div>
        <div class="col-10">
            <!-- wirte content from here open -->
            <h3 class="mt-1 text-primary"> User view Details</h3>
            <hr>
            <hr>
            <div class="container">
                <div class="card shadow">
                    <div class="card-header"> user view details </div>
                    <div class="card-bod">
                        <div class="row">
                            <div class="col-md-9 mt-2 ml-2">
                                <p class="p-5 shadow"> <span class="text-warning"> About Me</span> : Lorem ipsum dolor
                                    sit, amet consectetur adipisicing elit. Obcaecati pariatur provident quidem corporis
                                    ad fugit tempore voluptatum rem soluta ea, iusto, beatae dicta, labore eveniet alias
                                    nemo temporibus ratione. Fugit? </p>
                            </div>
                            <div class="col-md-2 mt-2">
                                <img src="<?php echo e(asset('studentImage/'.$users->image)); ?>"
                                    alt="Your Image" class="img-fluid rounded-circle shadow border border-white "
                                    width="200">
                            </div>

                            <div class="col-md-12">
                                <!-- table open -->
                                <div class="card-body">
                                    <table class="table table-striped shadow">
                                        <tbody>

                                            <tr>
                                                <th>Name</th>
                                                <td><?php echo e($users->name); ?></td>
                                                <th>Email</th>
                                                <td><?php echo e($users->email); ?></td>
                                                <th>Phone</th>
                                                <td><?php echo e($users->phone); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Eduction</th>
                                                <td><?php echo e($users->phone); ?></td>
                                                <th>12th passout</th>
                                                <td><?php echo e($users->email); ?></td>
                                                <th>10th passout</th>
                                                <td><?php echo e($users->email); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Country</th>
                                                <td><?php echo e($users->name); ?></td>
                                                <th>State</th>
                                                <td><?php echo e($users->email); ?></td>
                                                <th>City</th>
                                                <td><?php echo e($users->email); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Current Company</th>
                                                <td><?php echo e($users->name); ?></td>
                                                <th>Current CTC</th>
                                                <td><?php echo e($users->email); ?></td>
                                                <th>Expectation CTC</th>
                                                <td><?php echo e($users->email); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Key Skils</th>
                                                <td><?php echo e($users->name); ?></td>
                                                <th>Exp Years</th>
                                                <td><?php echo e($users->email); ?></td>
                                                <th>Notice Priod</th>
                                                <td><?php echo e($users->email); ?></td>
                                            </tr>
                                            <tr>
                                                <th>LinkedIn ID</th>
                                                <td><?php echo e($users->name); ?></td>
                                                <th>GitHub Id</th>
                                                <td><?php echo e($users->email); ?></td>
                                                <th>Passport</th>
                                                <td><?php echo e($users->email); ?></td>
                                            </tr>

                                            <tr>
                                    <th>Status</th>
                                    <?php if($users->is_blocked == 1): ?>
                                    <td class="text-danger"> Block</td>

                                    <?php elseif($users->is_blocked == 0): ?>
                                    <td class="text-success"> UnBlock</td>

                                    <?php endif; ?>
                                </tr>

                                        </tbody>
                                    </table>
                                    <div class="row">
                                        <div class="col-md-8"></div>
                                        <div class="col-md-4">
                                            <tr>
                                                <td>
                                                    <a href="<?php echo e(route('applied.jobs.view', ['course' => $courseGet->course])); ?>"
                                                        class="text-white btn btn-warning"> <i class="fa fa-home"></i>
                                                        Back </a>
                                                    <a href="<?php echo e(url('admin-applied-jobs-edit', $users->id)); ?>"
                                                        class="text-white btn btn-danger" id="blockUserButton" data-toggle="modal" data-target="#blockUserModal"> <i class="fa fa-borad"></i>
                                                        Block User</a>
                                                    <a href="<?php echo e(url('admin-download-pdf', $users->id)); ?>"
                                                        class="text-white btn btn-success"> <i class="fa fa-borad"></i>
                                                        Download CV</a>
                                                </td>
                                            </tr>
                                        </div>
                                    </div>
                                </div>
                                <!-- table close -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- wirte content from here close -->
        </div>
    </div>
</div>


<!-- model open -->
<div class="modal fade" id="blockUserModal" tabindex="-1" role="dialog" aria-labelledby="blockUserModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="blockUserModalLabel">Block User Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to block this user?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <?php if($users->is_blocked): ?>
    <!-- Show the "Unblock User" button -->
    <button id="unblockUserButton" class="btn btn-success">Unblock User</button>
<?php else: ?>
    <!-- Show the "Block User" button -->
    <button id="blockUserButton" class="btn btn-danger">Block User</button>
<?php endif; ?>

            </div>
        </div>
    </div>
</div>

<!-- model close -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Handle the click event on the "Block User" button
        $("#blockUserButton").click(function() {
            var userId = "<?php echo e($users->id); ?>"; // Replace with the actual user ID
            // Send an AJAX request to your Laravel route to block the user
            $.ajax({
                url: "<?php echo e(route('block.user', ['id' => $users->id])); ?>", // Replace with your actual route
                type: "POST",
                data: {
                    _token: "<?php echo e(csrf_token()); ?>", // Add the CSRF token
                },
                success: function(response) {
                    // Handle success (e.g., show a success message)
                    // alert("User blocked successfully!");
                    // Hide the "Block User" button and show the "Unblock User" button
                    $("#blockUserButton").hide();
                    $("#unblockUserButton").show();
                },
                error: function() {
                    // Handle error (e.g., show an error message)
                    alert("Error blocking user. Please try again.");
                },
            });
        });

        // Handle the click event on the "Unblock User" button
        $("#unblockUserButton").click(function() {
            var userId = "<?php echo e($users->id); ?>"; // Replace with the actual user ID
            // Send an AJAX request to your Laravel route to unblock the user
            $.ajax({
                url: "<?php echo e(route('unblockUser.user', ['id' => $users->id])); ?>", // Replace with your actual route
                type: "POST",
                data: {
                    _token: "<?php echo e(csrf_token()); ?>", // Add the CSRF token
                },
                success: function(response) {
                    // Handle success (e.g., show a success message)
                    // alert("User unblocked successfully!");
                    // Hide the "Unblock User" button and show the "Block User" button
                    $("#unblockUserButton").hide();
                    $("#blockUserButton").show();
                },
                error: function() {
                    // Handle error (e.g., show an error message)
                    alert("Error unblocking user. Please try again.");
                },
            });
        });
    });
</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practice-code\mycv\resources\views/admin/applied-jobs/edit.blade.php ENDPATH**/ ?>