<?php
include("connect.php");

if(isset($_GET['del_id']))
{
	$id=$_GET['del_id'];
	
	$sql="delete from products where id='".$id."'";
	$result=mysqli_query($conn,$sql);
	
	header('location:index.php');
	
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>3D App</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css"
  href="http://www.x3dom.org/download/x3dom.css">
</link>
<script type="text/javascript"
    src="http://www.x3dom.org/download/x3dom.js">
</script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">3D Model App</a></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto " href="#">About</a></li>
          <li class="dropdown"><a href="#portfolio"><span>Models</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="product_details.php">Cocacola</a></li>
              <li><a href="product_details_sprite.php">Sprite</a></li>
              <li><a href="product_details_fanta.php">Fanta</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <table class="table table-bordered table-striped" id="content">
  </table>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Chilling Time is Winning Time</h2>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown"></h2>
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">

    <!-- ======= Icon Boxes Section ======= -->
    <section id="icon-boxes" class="icon-boxes">
      <div class="container">

        <div class="row">
          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-3 mb-lg-0" data-aos="fade-up">
            <div class="icon-box"> <br><br><br>
              <img class="d-block w-100" src="assets/img/coca-cola.png" alt="Coca Cola"><br><br>
           </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-3 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <img class="d-block w-100" src="assets/img/sprtie.png"  alt="Coca Cola Can">
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-3 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <img class="d-block w-100" src="assets/img/fanta.png" alt="Coca Cola Can">
           </div>
          </div>
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/coca-cola.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/sprtie.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/fanta.png" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>
    </section><!-- End Clients Section -->


    <!-- ======= Portfoio Section ======= -->
    <section id="portfolio" class="portfoio">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Brand</h2>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Coca-Cola</li>
              <li data-filter=".filter-sprite">Sprite</li>
              <li data-filter=".filter-fanta">Fanta</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/cocacola_can.png" width="170px" height="170px" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Coca Cola</h4>
              <p></p>
              <p class="text-left"><a href="add.php" class="btn btn-sm btn btn-secondary">Add Product</a></p>
              <a href="product_details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-sprite">
            <img src="assets/img/sprite-cann.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Sprite</h4>
              <p></p>
              <p class="text-left"><a href="add.php" class="btn btn-sm btn btn-secondary">Add Product</a></p>              
              <a href="product_details_sprite.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-fanta">
            <img src="assets/img/fanata-can.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Fanta</h4>
              <p></p>
              <p class="text-left"><a href="add.php" class="btn btn-sm btn btn-secondary">Add Product</a></p>              
              <a href="product_details_fanta.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Portfoio Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact Us</h2>
        </div>

        <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">

          <div class="col-lg-5">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
              </div>

            </div>

          </div>

          <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
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
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>3D App 2022</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
  $(document).ready(function(){
  $.ajax({url:"select.php",
  success:function(dataabc){
      //console.log(dataabc);
    $("#content").html(dataabc);		
  }});


  });
</script>
</body>

</html>