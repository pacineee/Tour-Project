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
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <!--header section starts-->
  <section class="header">
    <a href="myindex.php" class="logo">Pacine Tour</a>
    <nav class="navbar">
      <a href="myindex.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

  </section>

  <!--header section ends-->

  <div class="heading"
    style="background:url(images/landscape-beautiful-spring-nature-hd-wallpaper_5120x2880.jpg) no-repeat">
    <h1>Book Now</h1>
  </div>



  <!-- Booking section starts here-->
  <section class="booking">
    <h1 class="heading-title">Get your Ticket</h1>
    <form action="booking-form.php" method="post" class="booking-form">
      <div class="flex">

        <div class="input-box">
          <span>Name: </span>
          <input type="name" placeholder="Enter your name" name="name">
        </div>
        <div class="input-box">
          <span>Email: </span>
          <input type="email" placeholder="Enter your email" name="email">
        </div>
        <div class="input-box">
          <span>Number: </span>
          <input type="number" placeholder="Enter your phone number" name="phone">
        </div>
        <div class="input-box">
          <span>Address: </span>
          <input type="text" placeholder="Enter your address" name="address">
        </div>
        <div class="input-box">
          <span>Place you want: </span>
          <input type="text" placeholder="Enter place you wanna visit" name="location">
        </div>
        <div class="input-box">
          <span>No. of guests: </span>
          <input type="number" placeholder="Number of guests" name="guests">
        </div>
        <div class="input-box">
          <span>Arrival: </span>
          <input type="date" name="arrivals">
        </div>
        <div class="input-box">
          <span>Leaving: </span>
          <input type="date" name="leaving">
        </div>

      </div>
      <input type="submit" value="submit" class="btn" name="send">
    </form>
  </section>
  <!-- Booking section ends here-->




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
  <script src="script.js"></script>
</body>

</html>