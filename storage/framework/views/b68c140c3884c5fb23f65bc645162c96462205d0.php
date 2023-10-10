<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Home'); ?></title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/open-iconic-bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/animate.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/owl.theme.default.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/magnific-popup.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/aos.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/ionicons.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap-datepicker.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/jquery.timepicker.css')); ?>">


    <link rel="stylesheet" href="<?php echo e(asset('assets/css/flaticon.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/icomoon.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">

</head>
<body>
     

<!--============================== menu open ========================================= -->
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container-fluid px-md-4	">
	      <a class="navbar-brand" href="index.html">HR <Span class="text-warning">Brain</Span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="<?php echo e(url('/')); ?>" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="<?php echo e(route('pages.browsejob')); ?>" class="nav-link">Browse Jobs</a></li>
	          <li class="nav-item"><a href="<?php echo e(route('pages.candidate')); ?>" class="nav-link">Canditates</a></li>
	          <li class="nav-item"><a href="<?php echo e(route('pages.blog')); ?>" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="<?php echo e(route('pages.contact')); ?>" class="nav-link">Contact</a></li>
	          <!-- <li class="nav-item cta mr-md-1"><a href="<?php echo e(route('pages.new.post')); ?>" class="nav-link">Post a Job</a></li> -->
	          <li class="nav-item cta mr-md-1"><a href="<?php echo e(route('product.index')); ?>" class="nav-link">Flip cart</a></li>
	          <li class="nav-item cta cta-colored"><a href="<?php echo e(route('pages.job.post')); ?>" class="nav-link">Want a Job</a></li>
	          <li class="nav-item cta cta-info mr-md-1"><a href="<?php echo e(route('pages.cv.index')); ?>" class="nav-link">Cv Build</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
<!--============================== menu close ========================================= -->
  

  
<?php echo $__env->yieldContent('content'); ?>





<!-- footer open -->
<footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
        	<div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Skillhunt Jobboard</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Employers</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="pb-1 d-block">Browse Candidates</a></li>
                <li><a href="#" class="pb-1 d-block">Post a Job</a></li>
                <li><a href="#" class="pb-1 d-block">Employer Listing</a></li>
                <li><a href="#" class="pb-1 d-block">Resume Page</a></li>
                <li><a href="#" class="pb-1 d-block">Dashboard</a></li>
                <li><a href="#" class="pb-1 d-block">Job Packages</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Candidate</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="pb-1 d-block">Browse Jobs</a></li>
                <li><a href="#" class="pb-1 d-block">Submit Resume</a></li>
                <li><a href="#" class="pb-1 d-block">Dashboard</a></li>
                <li><a href="#" class="pb-1 d-block">Browse Categories</a></li>
                <li><a href="#" class="pb-1 d-block">My Bookmarks</a></li>
                <li><a href="#" class="pb-1 d-block">Candidate Listing</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Account</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="pb-1 d-block">My Account</a></li>
                <li><a href="#" class="pb-1 d-block">Sign In</a></li>
                <li><a href="#" class="pb-1 d-block">Create Account</a></li>
                <li><a href="#" class="pb-1 d-block">Checkout</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="" target="_blank">ali</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
<!-- footer close -->


  <script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/jquery-migrate-3.0.1.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/popper.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/jquery.easing.1.3.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/jquery.waypoints.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/jquery.stellar.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/owl.carousel.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/jquery.magnific-popup.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/aos.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/jquery.animateNumber.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/scrollax.min.js')); ?>"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?php echo e(asset('assets/js/google-map.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>

</body>
</html><?php /**PATH C:\xampp\htdocs\practice-code\mycv\resources\views/layouts/master.blade.php ENDPATH**/ ?>