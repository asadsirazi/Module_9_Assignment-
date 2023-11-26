 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <h1 class="logo me-auto me-lg-0"><a href="/">Asad Sirazi</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="<?php echo e(Request::is('/') ? 'active' : ''); ?>" href="<?php echo e(url('/')); ?>">Home</a></li>
          <li><a class="<?php echo e(Request::is('about') ? 'active' : ''); ?>" href="<?php echo e(url('about')); ?>">About Me</a></li>
          <li><a class="<?php echo e(Request::is('projects') ? 'active' : ''); ?>" href="<?php echo e(url('projects')); ?>">Projects</a></li>
          <li><a class="<?php echo e(Request::is('contact') ? 'active' : ''); ?>" href="<?php echo e(url('contact')); ?>">Contact</a></li>
      </ul>
      
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links">
        <a href="https://wa.me/+8801832591765" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
        <a href="https://www.facebook.com/asadsirazi" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/asadsirajy" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/in/asad-hossain-sirazi-159611277/" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>

    </div>

  </header><!-- End Header --><?php /**PATH D:\Laravel\MyPortfolio\resources\views/Layouts/header.blade.php ENDPATH**/ ?>