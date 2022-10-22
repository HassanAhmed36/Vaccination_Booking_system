<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>E-vaccination</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="user-user-assets/img/favicon.png" rel="icon">
  <link href="user-assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="user-assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="user-assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="user-assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="user-assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="user-assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="user-assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="user-assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="user-assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: OnePage - v4.9.0
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <!-- <h1 class="logo"><a href="index.html"><b>Onepage</b></a></h1> -->
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="index.html" class="logo"><img src="user-assets/img/logo.png" alt="" class="img-fluid"></a>

            <nav id="navbar" class="navbar">
            <ul>
                    <li><a class="nav-link scrollto active" href="/vaccine/index.php">Home</a></li>
                    <li><a class="nav-link scrollto" href="/vaccine/about.php">About</a></li>
                    <li><a class="nav-link scrollto" href="/vaccine/contact.php">Contact</a></li>
                    <?php
                       if(@$_SESSION['role'] == 3 or !@$_SESSION['role']){

                           echo 
                           '<li><a class="nav-link scrollto" href="/vaccine/childrigester.php">Rigester child</a></li>
                           <li><a class="nav-link scrollto" href="/vaccine/booking.php">Booking
                                   appointment</a></li>';
                       }  
                       ?>
                       <?php
if(@$_SESSION['role'] == 1 or @$_SESSION['h_name']  ){
                           echo '<li><a class="nav-link scrollto" href="/vaccine/dashboard.php">Dashboard</a></li>';
                       }  
                       ?>   
                            
                    <?php
          if (@$_SESSION['name'] || @$_SESSION['h_name'] ) {
            echo '<li><a class="getstarted scrollto" href="/vaccine/logout.php">Logout</a></li>';
           
          }else{
            echo '<li><a class="getstarted scrollto" href="/vaccine/login.php">Login</a></li>
            <li><a class="getstarted scrollto" href="/vaccine/Register.php">Rigester</a></li>';
          }

          
        ?>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header --><!-- End Header -->

  <!-- ======= Hero Section ======= -->
 

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. </p>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section>

    <!-- ======= Counts Section ======= -->
  <!-- End Counts Section -->

    <!-- ======= About Video Section ======= -->
   <!-- End About Video Section -->

    <!-- ======= Clients Section ======= -->
    <!-- End Clients Section -->

    <!-- ======= Testimonials Section ======= -->
   n><!-- End Testimonials Section -->

    <!-- ======= Services Section ======= -->
    <!-- End Sevices Section -->

    <!-- ======= Cta Section ======= -->
   <!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
   <!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
   
    <!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
   <!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>OnePage</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>OnePage</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="user-assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="user-assets/vendor/aos/aos.js"></script>
  <script src="user-assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="user-assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="user-assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="user-assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="user-assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="user-assets/js/main.js"></script>

</body>

</html>