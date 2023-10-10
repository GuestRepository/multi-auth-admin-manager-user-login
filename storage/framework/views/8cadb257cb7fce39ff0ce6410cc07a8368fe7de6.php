<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Admin Home'); ?></title>

    



<link rel="stylesheet" href="<?php echo e(asset('assets/admin/admin-css/bootstrap.min.css')); ?>">
  <script src="<?php echo e(asset('assets/admin/admin-css/jquery.slim.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/admin/admin-css/popper.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/admin/admin-css/bootstrap.bundle.min.js')); ?>"></script>

<!------ Include the above in your HEAD tag ---------->

<link href="<?php echo e(asset('assets/admin/admin-css/font-awesome.min.css')); ?>" rel="stylesheet">

<link rel="stylesheet" href="<?php echo e(asset('assets/admin/admin-css/style.css')); ?>">

</head>
<body>



<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="#">Sidebar Nav</a>
  <button
    class="navbar-toggler"
    type="button"
    data-toggle="collapse"
    data-target="#navbarCollapse"
    aria-controls="navbarCollapse"
    aria-expanded="false"
    aria-label="Toggle navigation"
  >
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto sidenav" id="navAccordion">
      <li class="nav-item active">
        <a class="nav-link" href="#"> <i class="fa fa-dashboard fa-lg"></i> Dashboard </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#"> <i class="fa fa-user fa-lg"></i>  <?php echo e(Auth::user()->name); ?></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo e(route('admin.applied.jobs.index')); ?>"> <i class="fa fa-jobs fa-lg"></i> Applied Jobs </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#"> <i class="fa fa-edit fa-lg"></i> Category </a>
      </li>
      <li class="nav-item active">
        <a
          class="nav-link nav-link-collapse"
          href="#"
          id="hasSubItems"
          data-toggle="collapse"
          data-target="#collapseSubItems2"
          aria-controls="collapseSubItems2"
          aria-expanded="false"
        ><i class="fa fa-key py-2 fa-lg"></i> Item 2</a>
        <ul class="nav-second-level collapse" id="collapseSubItems2" data-parent="#navAccordion">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span class="nav-link-text">Item 2.1</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span class="nav-link-text">Item 2.2</span>
            </a>
          </li>
        </ul>
      </li>


      <li class="nav-item active">
        <a class="nav-link" href="#"> <i class="fa fa-lock fa-lg"></i> Item 3</a>
      </li>
      <li class="nav-item active">
        <a
          class="nav-link nav-link-collapse"
          href="#"
          id="hasSubItems"
          data-toggle="collapse"
          data-target="#collapseSubItems4"
          aria-controls="collapseSubItems4"
          aria-expanded="false"
        > <i class="fa fa-lock fa-lg"></i> Item 4</a>
        <ul class="nav-second-level collapse text-center" id="collapseSubItems4" data-parent="#navAccordion">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span class="nav-link-text">Item 4.1</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span class="nav-link-text">Item 4.2</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span class="nav-link-text">Item 4.2</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#"> <i class="fa fa-lock fa-lg"></i> Item 5</a>
      </li>

      <li class="nav-item active">
              <a class="nav-link" href="<?php echo e(route('logout')); ?>"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"> <i class="fa fa-sign-out fa-lg"></i>
                  <?php echo e(__('Logout')); ?>

              </a>
              <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                  <?php echo csrf_field(); ?>
              </form>
      </li>

    </ul>
    <ul class="navbar-nav ml-auto mt-2 mt-md-0">
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa fa-bell">
            <span class="badge badge-info">11</span>
          </i>
          Test
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa fa-globe">
            <span class="badge badge-success">11</span>
          </i>
          Test
        </a>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-envelope-o">
            <span class="badge badge-primary">11</span>
          </i>
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

<?php echo $__env->yieldContent('content'); ?>




</body>
</html>

<script>
    $(document).ready(function() {
  $('.nav-link-collapse').on('click', function() {
    $('.nav-link-collapse').not(this).removeClass('nav-link-show');
    $(this).toggleClass('nav-link-show');
  });
});

</script><?php /**PATH C:\xampp\htdocs\practice-code\mycv\resources\views/layouts/admin-master.blade.php ENDPATH**/ ?>