<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CocaCola Detail</title>
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

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>


  <main id="main">

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

        <p class="text-right"><a href="index.php" class="btn btn-info">Home</a></p>
          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
                 <div>
                    <div class="sketchfab-embed-wrapper"> 
                        <iframe allowfullscreen mozallowfullscreen="true"
                        webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" 
                        xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share width="700px" height="500px" src="https://sketchfab.com/models/bbbb22f40d6a49148db682ff9f2da9fe/embed"> 
                        </iframe>
                    </div>
                 </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
            <?php
            include("connect.php");

            $sql="select * from products  where id= 4";
            $result = mysqli_query($conn,$sql);
            $i=1;
            $data=mysqli_fetch_array($result);

            ?>
              <h3><?php if($data['title']){echo $data['title'];} echo '';?></h3>
              <strong>Created Date: </strong><?php if($data['created_at']){echo $data['created_at'];} echo '';?>
  
            </div>
            <?php $id = $data['id']; echo "<a href=edit.php?edit_id=$id class='btn btn-sm btn btn-info'>Edit</a>"; ?>
            <?php //$id = $data['id']; echo "<a href=index.php?del_id=$id class='btn btn-sm btn btn-danger'>Delete</a>"; ?>
            <div class="portfolio-description">
              <p><strong>Description</strong><br>
              <?php echo $data['description']?> 
              </p>
            </div>
        <h3>3D Model Gallery</h3>    
        <div class="col-lg-2"><div class="sketchfab-embed-wrapper"> <iframe title="Coca-Cola Glass Bottle" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/f23ca779d0fd4109998e4b6b19b33532/embed"> </iframe> <p style="font-size: 13px; font-weight: normal; margin: 5px; color: #4A4A4A;"> </p></div></div>
        <div class="col-lg-2"><div class="sketchfab-embed-wrapper"> <iframe title="Diet Coke" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/b58bf952e4f046de8571fa266fa03e76/embed"> </iframe> <p style="font-size: 13px; font-weight: normal; margin: 5px; color: #4A4A4A;"> </p></div></div>
          </div>

        </div>
      </div>

    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

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

</body>

</html>