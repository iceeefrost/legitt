<?php include 'forms/config.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Legit Tech Tips — Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/2018_Linus_Tech_Tips_logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <script src="https://kit.fontawesome.com/ceb8b66c45.js" crossorigin="anonymous"></script>


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


  <!-- =======================================================
  * Template Name: Dewi - v4.9.1
  * Template URL: https://bootstrapmade.com/dewi-free-multi-purpose-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.php" class="logo"><img src= "assets/img/2018_Linus_Tech_Tips_logo.svg.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li class="dropdown"><a href="#services" class="nav-link scrollto"><span>Getting Started</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="assembly.php">How to assemble a System Unit</a></li>
              <li><a href="install.php">How to install an OS for new PC </a></li>
              <li><a href="reset.php">Reset/Format a Computer</a></li>
              <li><a href="troubleshoot.php">Tips for Troubleshooting</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="#about">Get Started</a></li>
          <li class="dropdown"><a class=" nav-link scrollto"><span><i class="fa-regular fa-circle-user" style="font-size:25px;"></i></i></span></a>
            <ul>
              <li><a href="login.php">Log In</a></li>
              <li><a href="reg.php">Register</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
      <h1>Manage. Upgrade. Troubleshoot</h1>
      <h2>Welcome to Legit Tech Tips! How can we help you? </h2>
    <!---SEARCH--
    <div class="search-container"  data-aos="fade-up">
      <div class="wrapper">
        <input type="text" name="search" id="search" placeholder="Type to search" autocomplete="chrome-off">
        <button class="input-btn">
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
        <div class="results">
          <ul>
          </ul>
        </div>
      </div>
    </div>
    <!--END OF SEARCH-->
      <div class="d-flex">
        <a href="reg.php" class="btn-get-started scrollto">Create New Account</a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-end">
          <div class="col-lg-11">
            <div class="row justify-content-end">

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="bi bi-emoji-smile"></i>
                  <span data-purecounter-start="0" data-purecounter-end="14" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Million+ Subscribers</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="bi bi-journal-richtext"></i>
                  <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Projects</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="bi bi-clock"></i>
                  <span data-purecounter-start="0" data-purecounter-end="14" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Years of experience</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="bi bi-award"></i>
                  <span data-purecounter-start="0" data-purecounter-end="48" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Awards</p>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6 video-box align-self-baseline" data-aos="zoom-in" data-aos-delay="100">
              <img src="assets/img/about.png" class="img-fluid" alt="">
              <img src="assets/img/chrome_2018-12-11_17-26-45.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-3 pt-lg-0 content">
            <h3>About Legit Tech Tips</h3>
            <p class="fst-italic">
              Legit Tech Tips is a passionate team of "professionally curious" experts in consumer technology and video production which aims to inform and educate people of all ages through our entertaining videos. We create product reviews, step-by-step computer build guides, and a variety of other tech-focused content.
            </p>
            <h3>Entrepreneur &amp; Tech Reviewer</h3>
            <p class="fst-italic">
              Linus Gabriel Sebastian is a Canadian entrepreneur, tech reviewer, and YouTuber from Surrey, British Columbia. Starting his online career as a host for the technology channel of NCIX—the computer software and hardware retailer—where he was an employee at the time, he is now the founder and CEO of ‘Linus Media Group’ that runs three YouTube channels geared towards tech-based content.
            </p>
           
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-rounded-right"></i> <strong>Birthday:</strong> 20 August 1986</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Website:</strong> https://linusmediagroup.com</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Phone:</strong> N/A</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>City:</strong> Surrey, British Columbia, Canada.</li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-rounded-right"></i> <strong>Age:</strong> 36</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Degree:</strong> N/A</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>PhEmailone:</strong> info@linusmediagroup.com</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Freelance:</strong> Unavailable</li>
                </ul>
              </div>
            </div>
            <p class = "regular">
              Legit Tech Tips is a full service production agency with decades of collective experience in web video and social media and influencer marketing. We've worked with brands as small as cottage-industry one-person operations all the way to large multinationals like Intel, IBM, and Cisco.
            </p>
          </div>

        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/Corsair_logo_800px.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/Cisco-logo.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/dBrand-Logo.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/300px-Intel-logo.svg.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/squarespace-logo.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/1024px-Shopify_logo_2018.svg.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Services Section ======  -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Getting Started</h2>
          <p>Check our Guides</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="200">
          <div class="col-md-6">
            <div class="icon-box">
              <i class="bi bi-laptop"></i>
              <h4><a href="assembly.html">Step-by-Step Procedure</a></h4>
                <p>Click this to know the steps on Assembling a PC</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class=" bi bi-regular bi-window"></i>
              <h4><a href="install.html">Install an OS</a></h4>
              <p>Click here to know how to install an operating system on PC</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-wrench"></i>
              <h4><a href="reset.html">Format/Reset A Computer</a></h4>
              <p>Click here to know how to reset a PC</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-gear"></i>
              <h4><a href="troubleshooting.html">Troubleshooting</a></h4>
              <p>Click here to know tips for troubleshooting</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">
        <h2>Group Members</h2>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>John Paul Vitancol</h3>
                <h4>Sysadmin</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Success is not final; failure is not fatal: it is the courage to continue that counts. – Winston Churchill
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Juan Carlos Mojica</h3>
                <h4>Sysadmin</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Play by the rules, but be ferocious. – Phil Knight
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Anamie Camalig</h3>
                <h4>Sysadmin</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Business opportunities are like buses, there’s always another one coming. – Richard Branson
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Marielle Sangalang</h3>
                <h4>Sysadmin</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Every problem is a gift—without problems we would not grow. – Anthony Robbins
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
            <!-- End testimonial item -->
              <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Crisel Dumalogdog</h3>
                <h4>Sysadmin</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Every problem is a gift—without problems we would not grow. – Anthony Robbins
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->
              <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-6.jpg" class="testimonial-img" alt="">
                <h3>Jushua Jay Jimenez</h3>
                <h4>Sysadmin</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Every problem is a gift—without problems we would not grow. – Anthony Robbins
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

              <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-7.jpg" class="testimonial-img" alt="">
                <h3>Christian Salinas</h3>
                <h4>Sysadmin</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Every problem is a gift—without problems we would not grow. – Anthony Robbins
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

    <div class=" section-title">
        <h2>Contact</h2>
        <p>Contact Us</p>
      </div>

      <div class="row">

        <div class="col-lg-6">

          <div class="row">
            <div class="col-md-12">
              <div class="info-box">
                <i class="bx bx-map"></i>
                <h3>Our Address</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-envelope"></i>
                <h3>Email Us</h3>
                <p>info@example.com<br>contact@example.com</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-phone-call"></i>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-6 mt-4 mt-lg-0">
          <form method="post" role="form" name ="frm" class="contact" action ="contact.php">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <br>
            <div class="text-center"><button type="submit" name="submit" class="btn btn-primary btn-lg" style ="background-color: #ff4a17; border:none;">Send Message</button></div>
          </form>
        </div>
      </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Legit Tech Tips</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
    
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>


          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Midterm Examination (Laboratory)</h4>
            <p>This website is for educational purposes only.</p>
      
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Dewi</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/dewi-free-multi-purpose-html-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://kit.fontawesome.com/ceb8b66c45.js" crossorigin="anonymous"></script>

</body>
</html>