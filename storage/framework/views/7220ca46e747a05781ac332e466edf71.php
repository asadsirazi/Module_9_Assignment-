<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kelly Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo e(asset('img/favicon.png')); ?>" rel="icon">
  <link href="<?php echo e(asset('img/apple-touch-icon.png')); ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo e(asset('vendor/aos/aos.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('vendor/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('vendor/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
</head>
<body>
  <?php echo $__env->make('Layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php echo $__env->yieldContent('content'); ?>




<?php echo $__env->make('Layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?php echo e(asset('vendor/purecounter/purecounter_vanilla.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/aos/aos.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/glightbox/js/glightbox.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/swiper/swiper-bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/waypoints/noframework.waypoints.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/php-email-form/validate.js')); ?>"></script>
  
    <!-- Template Main JS File -->
    <script src="<?php echo e(asset('js/main.js')); ?>"></script>
  
  </body>
  
  </html><?php /**PATH D:\Laravel\MyPortfolio\resources\views/Layouts/masterLayout.blade.php ENDPATH**/ ?>