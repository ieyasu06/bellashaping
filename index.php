<?php

//Import PHP mailer files and functions
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'assets/phpmailer/Exception.php';
require "assets/phpmailer/PHPMailer.php";
require 'assets/phpmailer/SMTP.php';


if(isset($_POST['send_email']))
{

    //Get data from form upon submit.
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];

    $mail = new PHPMailer(true);


    //Set recepients of the email
    $email = "bellashaping@gmail.com"; 
    $name = "Bella Shaping";

    $email1 = "nobunaga_hidetada@yahoo.com"; 
    $name1 = "Jolo";


    $email_from =$email;
    $name_from = $name;
    $send_using_gmail = 1;

    // Send mail using Gmail
    if($send_using_gmail){
        $mail->IsSMTP(); // telling the class to use SMTP
        $mail->SMTPAuth = true; // enable SMTP authentication
        $mail->SMTPSecure = "ssl"; // sets the prefix to the servier
        $mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
        $mail->Port = 465; // set the SMTP port for the GMAIL server
        $mail->Username = "bellashaping101mail@gmail.com"; // GMAIL username
        $mail->IsHTML(false);
        $mail->Password = "Checkbox123!"; // GMAIL password
    }

    // Typical mail data
    $mail->AddAddress($email, $name);
    $mail->AddAddress($email1, $name1);

    $mail->SetFrom($email_from, $name_from);
    $mail->Subject = "Inquiry";
    $mail->Body = $message;

    try{
        //Try sending email here
        $mail->Send();

        $success=true;
    } catch(Exception $e){
        // backend notif if sending failed.
        echo "Fail :(";
    }
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
          <li><a class="nav-link scrollto" href="#portfolio">Services</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#testimonials">Testimonials</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <!-- <video id="video1" preload="" autoplay="" muted="" playsinline="" loop="">
      <source src="assets/img/banner/Banner Video.mp4" type="video/mp4">
    </video> -->

    <div class="container">
      <div class="row">

        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">

        </div>

        <div class="col-lg-6 text-center"> <!-- d-flex flex-column justify-content-center -->
          
          <img src="assets/img/logo-bella.png" style="max-width: 58%; position: relative;" class="rounded float-right" alt="">
          <h1 data-aos="fade-up">SHAPING THE</h1>
          <h1 data-aos="fade-up" data-aos-delay="400">FUTURE OF BEAUTY</h1>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-center">
              <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Learn More</span>
                <!-- <i class="bi bi-arrow-right"></i> -->
              </a>
            </div>
          </div>
        </div>
        
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <section class="wedo">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>WHAT WE DO</h2>
        </header>

        <div class="row">
          <div class="col-lg-12 justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et ligula viverra, facilisis sem non, egestas purus. Pellentesque tortor lacus, faucibus ut mollis et, scelerisque nec tortor. Etiam interdum lorem vitae sem suscipit scelerisque. Sed semper, nulla nec molestie fringilla, metus ante auctor nisl, in ultricies nibh magna a magna. Morbi lorem est, tincidunt euismod posuere id, suscipit non massa. Ut turpis ex, pellentesque eget nulla et, blandit sodales nisl. In pellentesque imperdiet facilisis. In posuere eu ipsum quis fringilla. Etiam id ex vitae nibh eleifend facilisis eu ut est. Curabitur vel diam tempus, porttitor magna nec, vulputate arcu. Etiam consequat lectus ac leo sagittis, non convallis dui venenatis. Morbi scelerisque lectus in quam ultricies aliquet.</p>
              
            </div>
          </div>

          

        </div>
      </div>
    </section>

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Services</h2>
          <!-- <p>Services</p> -->
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-packages">Packages</li>
              <li data-filter=".filter-lipomatt">Lipo Matt 360</li>
              <li data-filter=".filter-consult">Consultation</li>
            </ul>
          </div>
        </div>

        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-packages">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Silver Session</h4>
                <!-- <p>$160.00 / 1 hour</p>
                <p>This procedure is done using radio frequency, cavitation, and laser lipo in any (1) one of the following areas: abdomen, waist, back, thighs, arm, or inner thighs. Book a consultation meeting with us so we can recommend the specific areas we need to prioritize in your session.</p> -->
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Silver Session"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.php?service=0" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-packages">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Gold Session</h4>
                <!-- <p>$280.00 / 2 hours</p>
                <p>This procedure is our best-seller and it aims to burn and shape the body especially in the mommy pouch area and minimize cellulite appearance. The package consists of Cavitation, Lipo Matt 360, Radio frequency, and Vacuum therapy. The treatment is done in two (2) areas of your choice: abdomen, waist, back, thighs, arm, or inner thighs. Book a consultation with us so we can recommend the specific areas we need to prioritize in your session.</p> -->
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Gold Session"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.php?service=1" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-packages">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Diamond Session</h4>
                <!-- <p>$350.00 / 3 hours</p>
                <p>This is the most intense package from  Bella Shaping using radio frequency, cavitation, and laser lipo. The procedure involves three (3) body area shaping sessions of your choice: abdomen, waist, arms, thighs, back, sides, armpit. This aims to burn and shape the body especially in the mommy pouch area and minimize cellulite appearance.  Book a consultation with us so we can recommend the specific areas we need to prioritize in your session.</p> -->
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Diamond Session"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.php?service=2" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-packages">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Full Body Makeover</h4>
                <!-- <p>$450.00 / 4 hours</p>
                <p>This is a 4-hour complete makeover session with treatment focused on tummy, back, side, thighs, butt area. </p> -->
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Full Body Makeover"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.php?service=3" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>RF Skin Tightening</h4>
                <!-- <p>$150.00/ 1 hour</p>
                <p>This is a nonsurgical and noninvasive skin tightening and anti-aging treatment that stimulates the skin's ability to produce collagen and tighten up any loose skin, diminishes fine lines, scars and stretch marks.</p> -->
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="RF Skin Tightening"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.php?service=4" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Full Face Lifting</h4>
                <!-- <p>$200.00 / 1 hour</p>
                <p>This treatment is a skin lifting procedure for face that helps reduce wrinkles, focused on the cheeks, under eye and forehead. Helps keep a youthful look for the skin. </p> -->
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Full Face Lifting"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.php?service=5" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-lipomatt">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Lipo Matt 360</h4>
                <!-- <p>$150.00 / 1 hour</p>
                <p>$65.00 / 30 mins</p>
                <p>This is a noninvasive produre that is fast and effective in breaking down fat cells for fat loss and detoxification, it helps reduce the appearance of cellulites, increase collagen formation and benefits weight loss. The procedure is for 1 hour/30 mins focused on tummy, waist and back area.</p> -->
                <p>One Area</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Lipo Matt 360 One Area"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.php?service=6" title="More Details"><i class="bi bi-link"></i></a>
                </div>
                <p>Two Area</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Lipo Matt 360 Two Area"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.php?service=6" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-lipomatt">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Cellulite Treatment</h4>
                <!-- <p>$250.00 / 1 hour</p>
                <p>This is a noninvasive produre that is fast and effective in breaking down fat cells for fat loss and detoxification, it helps reduce the appearance of cellulites, increase collagen formation and benefits weight loss. This treatment can be done on your stomach, lower back, upper back, arms, front of thighs, and back of thighs. The duration is for 1 hour focused on 2 areas.</p> -->
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Cellulite Treatment"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.php?service=7" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-consult">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Consultation</h4>
                <!-- <p>$130.00 / 70mins</p>
                <p>This is a cellulite treatment that helps reduce the appearance of cellulites and promotes tightening of the skin. The procedure is done using vacuum therapy, RF skin tightening and wood therapy on both legs.</p> -->
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Consultation"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.php?service=8" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Portfolio Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container-fluid gx-0" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-7 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/Legs pink2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-5 justify-content-center text-center" data-aos="fade-up" data-aos-delay="200" style="background: #FF66C4;">
            <div class="content">

              <h2>ABOUT US</h2>
              <p>Our goal is to motivate and inspire everyone to feel beautiful while working towards the best version of themselves. Our passion is to provide the right services to help our clients look and feel beautiful.</p>
              <p>It is our vision to inspire beauty and self care to everyone.</p>
            </div>
          </div>

          

        </div>
      </div>

    </section><!-- End About Section -->

    <!-- ======= Filler Section ======= -->
    <!-- <section style="background: url(assets/img/bella-legs.jpg) no-repeat top center; background-size: cover;">

      <div class="container gx-0" data-aos="fade-up">
        <div class="row">

          <div class="col-lg-5 d-flex align-items-center text-lg-start text-center" data-aos="zoom-out" data-aos-delay="200">
            <div class="w-100 text-lg-start text-center">
              <p class="bella-url">bellashaping.com</p>
            </div>
          </div>

          <div class="col-lg-7 text-lg-end text-center" data-aos="fade-up" data-aos-delay="200">
            <img src="assets/img/logo-bella.png" class="img-fluid" alt="">
          </div>

          

        </div>
      </div>

    </section> --><!-- End Filler Section -->

    <!-- ======= Testimonials Section ======= -->
    <!-- <section id="testimonials" class="testimonials">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Our Review</h2>
        </header>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                </div>
                <p>
                  The results are amazing! I am so happy with how my skin looks like now.
                  <h3>Kristine</h3>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                </div>
                <p>
                  Excellent and quick service, probably the best I have ever had.
                  <h3>Anna</h3>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">  
                </div>
                <p>
                  I love the wood therapy. It's so relaxing.  Rhoda did a good job! I'll be back after 2 weeks.
                  <h3>Samantha</h3>
                </p>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section> --><!-- End Testimonials Section -->


    <section id="instagram" class="instagram">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>@BELLASHAPING</h2>
        </header>

        <div class="row gx-0">

          <div class="col-lg-12 text-center justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <p>Nulla id ornare purus. Fusce aliquet sit amet enim vitae sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi diam leo, mollis in nulla et, hendrerit egestas arcu. Aliquam turpis nibh, consequat ac maximus nec, condimentum vitae erat. Donec lacinia turpis magna, id semper sapien tincidunt non. Suspendisse porta justo eu sapien dictum, vel egestas eros vestibulum.</p>

              <p class="mt3 mb-5">
                <a href="https://facebook.com"><img src="assets/img/facebook.png" class="m-3 soc_img"></a>
                <a href="https://instagram.com/bellashaping"><img src="assets/img/instagram.png" class="m-3 soc_img"></a>
              </p>
            </div>
          </div>

        </div>

        <div  id="instafeed" class="row gy-4" data-aos="fade-up" data-aos-delay="200"></div>

      </div>
    </section>


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-6">

            <header class="section-header">
              <h2>GET IN TOUCH</h2>
            </header>

            <h4 class="mb-5">Hey! We are looking forward to start a project with you!</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.</p>

          </div>

          <div class="col-lg-6 d-flex justify-content-center">

            <div id="form_holder" class="text-center p-4">

              <p style="color: black; font-size: 40px; font-weight: bold;">CONTACT US</p>

              <form id="formModalDemo" name="formModalDemo" method="post">


                <div class="row pb-4">

                  <div class="col-12">
                    <div class="form-group">
                      
                      <input type="text" name="name" id="name" class="form-control" maxlength="150" placeholder="Name" required="">

                    </div>
                  </div>

                </div>


                <div class="row pb-4">

                  <div class="col-12">
                    <div class="form-group">
                      
                      <input type="email" name="email" id="email" class="form-control" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,63}$" maxlength="64" placeholder="Email Address" required="">

                    </div>
                  </div>

                </div>

                <div class="row pb-4">

                  <div class="col-12">
                    <div class="form-group">
                      
                      <textarea id="message" name="message" class="form-control" placeholder="Message" required="" row="6"></textarea>

                    </div>
                  </div>

                </div>


                <div class="row pb-4">

                  <div class="col-12 text-center">
                    <div class="form-group">

                      <button type="submit" id="send_email" name="send_email" class="btn btn-primary ps-4 pe-4"><b>Send</b></button>

                    </div>
                  </div>

                </div>


              </form>

            </div>


          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- <footer id="footer" class="footer">

    <div class="container" style="visibility: hidden;">
      <div class="copyright">
        &copy; Copyright <strong><span>FlexStart</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer> --><!-- End Footer -->

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
  <script type="text/javascript" src="assets/js/instafeed/dist/instafeed.min.js"></script>

  <?php
  $now = strtotime(date("Y-m-d")); // or your date as well
  $your_date = strtotime(date("2022-01-15"));
  $datediff = $now - $your_date;

  $datediff2 = round($datediff / (60 * 60 * 24));

  if($datediff2%60==0)
  {
    echo 1;
  }
  else
    echo 2;

  ?>

  <script type="text/javascript">
    var feed = new Instafeed({
      accessToken: 'IGQVJXY1lCTkl1VnNPN0FYWnJNWnRjTG1UUWYzMThjQlUwazludm81RGlPeW4wdnZAkWkx6RnBYaUVlZAXBrcTFmVVZA3RDJtX1RPaUVIQTZAraWdHYmlJZAk9sdzZAMQWJmdElDTWY5a1JB',
      template: '<div class="col-lg-3 col-md-6"><a href="{{link}}" title="{{caption}}" target="_blank"><img src="{{image}}" class="img-fluid" title="{{caption}}"></a></div>'
    });
    feed.run();
</script>

</body>

</html>


          