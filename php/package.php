<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pacine Tour</title>

  <!--swipper css link-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <!--Font awesome cdn link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <!--Custom (mine) css file link-->
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <!--header section starts-->
  <section class="header">
    <a href="../myindex.php" class="logo">Pacine Tour</a>
    <nav class="navbar">
      <a href="../myindex.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

  </section>

  <!--header section ends-->

  <div class="heading" style="background:url(../images/green-fields-with-wild-trees-2210x1473.jpg) no-repeat">
    <h1>packages</h1>
  </div>



  <!-- Package section starts here -->
  <section class="packages">
    <h1 class="headind-title">Top destinations</h1>

    <!-- 3rd Swiper -->
    <div class="swiper package-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide">Slide 1</div>
        <div class="swiper-slide">Slide 2</div>
        <div class="swiper-slide">Slide 3</div>
        <div class="swiper-slide">Slide 4</div>
        <div class="swiper-slide">Slide 5</div>
        <div class="swiper-slide">Slide 6</div>
        <div class="swiper-slide">Slide 7</div>
        <div class="swiper-slide">Slide 8</div>
        <div class="swiper-slide">Slide 9</div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>

    <div class="load-more"><span class="btn">Load More</span></div>
  </section>
  <!-- Package section ends here -->



  <!-- Footer section starts -->
  <section class="footer">
    <div class="box-container">
      <div class="box">
        <h3>Quick Links</h3>
        <a href="myindex.php"><i class="fas fa-angle-right"></i> home</a>
        <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
        <a href="package.php"><i class="fas fa-angle-right"></i> publications</a>
        <a href="book.php"><i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
        <h3>Extra Links</h3>
        <a href="#"><i class="fas fa-angle-right"></i> Ask Questions</a>
        <a href="#"><i class="fas fa-angle-right"></i> About Us</a>
        <a href="#"><i class="fas fa-angle-right"></i> Privacy Policy</a>
        <a href="#"><i class="fas fa-angle-right"></i> Terms of use</a>
      </div>

      <div class="box">
        <h3>Extra Links</h3>
        <a href="#"><i class="fas fa-phone"></i> +250787746988</a>
        <a href="#"><i class="fab fa-twitter"></i> @PNezerwa</a>
        <a href="#"><i class="fas fa-envelope"></i> pacineee@gmail.com</a>
        <a href="#"><i class="fas fa-map"></i> Kicukiro-Kigali-Rwanda</a>
      </div>

      <div class="box">
        <h3>Follow Me</h3>
        <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
        <a href="#"><i class="fab fa-facebook"></i> Facebook</a>
        <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
        <a href="#"><i class="fab fa-linkedin"></i> LinkedIn</a>
      </div>

    </div>

    <div class="credit"> <span>Copyright - <?php echo date('Y') ?> </span> | Developed by <span><a
          href="https://github.com/pacineee">Pacine</a></span> | All rights reserved...!</div>

  </section>
  <!-- Footer section ends -->

  <!--Swipper js file link-->
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

  <!--Custom JS file link-->
  <script src="../js/script.js"></script>
</body>

</html>