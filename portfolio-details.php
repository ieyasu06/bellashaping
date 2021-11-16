<?php

$services = array(0 => array("Packages","Silver Session","1 hour","160","This procedure is done using radio frequency, cavitation, and laser lipo in any (1) one of the following areas: abdomen, waist, back, thighs, arm, or inner thighs. Book a consultation meeting with us so we can recommend the specific areas we need to prioritize in your session."),
                  1 => array("Packages","Gold Session","2 hours","280","This procedure is our best-seller and it aims to burn and shape the body especially in the mommy pouch area and minimize cellulite appearance. The package consists of Cavitation, Lipo Matt 360, Radio frequency, and Vacuum therapy. The treatment is done in two (2) areas of your choice: abdomen, waist, back, thighs, arm, or inner thighs. Book a consultation with us so we can recommend the specific areas we need to prioritize in your session."),
                  2 => array("Packages","Diamond Session","3 hours","350","This is the most intense package from  Bella Shaping using radio frequency, cavitation, and laser lipo. The procedure involves three (3) body area shaping sessions of your choice: abdomen, waist, arms, thighs, back, sides, armpit. This aims to burn and shape the body especially in the mommy pouch area and minimize cellulite appearance.  Book a consultation with us so we can recommend the specific areas we need to prioritize in your session."),
                  3 => array("","Full Body Makeover","4 hours","450","This is a 4-hour complete makeover session with treatment focused on tummy, back, side, thighs, butt area. "),
                  4 => array("","RF Skin Tightening","1 hour","150","This is a nonsurgical and noninvasive skin tightening and anti-aging treatment that stimulates the skin's ability to produce collagen and tighten up any loose skin, diminishes fine lines, scars and stretch marks."),
                  5 => array("","Full Face Lifting","1 hour","200","This treatment is a skin lifting procedure for face that helps reduce wrinkles, focused on the cheeks, under eye and forehead. Helps keep a youthful look for the skin. "),
                  6 => array("Lipo Matt 360","One Area","1 hour","150","This is a noninvasive produre that is fast and effective in breaking down fat cells for fat loss and detoxification, it helps reduce the appearance of cellulites, increase collagen formation and benefits weight loss. The procedure is for 1 hour focused on tummy, waist and back area."),
                  7 => array("Lipo Matt 360","One Area","30 mins","65","This is a noninvasive produre that is fast and effective in breaking down fat cells for fat loss and detoxification, it helps reduce the appearance of cellulites, increase collagen formation and benefits weight loss. The procedure is done for 30 minutes focused on tummy, waist and back area."),
                  8 => array("Lipo Matt 360","Two Areas","1 hour","250","This is a noninvasive produre that is fast and effective in breaking down fat cells for fat loss and detoxification, it helps reduce the appearance of cellulites, increase collagen formation and benefits weight loss. This treatment can be done on your stomach, lower back, upper back, arms, front of thighs, and back of thighs. The duration is for 1 hour focused on 2 areas."),
                  9 => array("","Cellulite Treatment","70mins","130","This is a cellulite treatment that helps reduce the appearance of cellulites and promotes tightening of the skin. The procedure is done using vacuum therapy, RF skin tightening and wood therapy on both legs."),
                  10 => array("Consultation","","","50","A consultation session to help and guide you on your journey to weight loss and beautiful body. "),
);




if(isset($_GET["service"]))
{
  $service_id = $_GET["service"];
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bella Shaping -SHAPING THE FUTURE OF BEAUTY</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="assets/img/favicon/site.webmanifest">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart - v1.7.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <span>Bella Shaping</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#testimonials">Testimonials</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <!-- <ol>
          <li><a href="index.html">Home</a></li>
          <li>Portfolio Details</li>
        </ol> -->
        <h2>Services</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-1.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-2.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-3.jpg" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Service information</h3>
              <ul>
                <li><strong>Price</strong>: <?php echo $services[$service_id][3]; ?> </li>
                <li><strong>Duration</strong>: <?php echo $services[$service_id][2]; ?> </li>
                <!-- <li><strong>Project date</strong>: 01 March, 2020</li>
                <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li> -->
              </ul>
            </div>
            <div class="portfolio-description">
              <h2><?php if($service_id==7||$service_id==8)
                          echo $services[$service_id][0]." ".$services[$service_id][1];
                        else
                          echo $services[$service_id][1];
                          
                  ?> </h2>
              <p>
                <?php echo $services[$service_id][4]; ?>
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  <!-- ======= About Section ======= -->
    <section id="contact" class="about">

      <div class="container gx-0" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <h2>CONTACT US</h2>
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <p><i class="bi bi-geo-alt me-2" style="color: #FF66C4;"></i> 5541 Arrow Highway, Montclair, CA 91763</p>
              <p><i class="bi bi-telephone me-2" style="color: #FF66C4;"></i> 909-990-7644</p>
              <p><i class="bi bi-envelope me-2" style="color: #FF66C4;"></i> <a href="mailto:bellashaping@gmail.com">bellashaping@gmail.com</a></p>
            </div>
          </div>

        </div>
      </div>

    </section><!-- End About Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container" style="visibility: hidden;">
      <div class="copyright">
        &copy; Copyright <strong><span>FlexStart</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>