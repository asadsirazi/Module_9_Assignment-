 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <h1 class="logo me-auto me-lg-0"><a href="/">Asad Sirazi</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="{{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a></li>
          <li><a class="{{ Request::is('about') ? 'active' : '' }}" href="{{ url('about') }}">About Me</a></li>
          <li><a class="{{ Request::is('projects') ? 'active' : '' }}" href="{{ url('projects') }}">Projects</a></li>
          <li><a class="{{ Request::is('contact') ? 'active' : '' }}" href="{{ url('contact') }}">Contact</a></li>
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

  </header><!-- End Header -->