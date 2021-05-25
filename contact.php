<?php
include "connection.php";

 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Everland Hotel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">Everland Hotel</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="rooms.html" class="nav-link">Rooms</a></li>
          <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
          <li class="nav-item "><a href="about.html" class="nav-link">About Us</a></li>
          <li class="nav-item active"><a href="contact.php" class="nav-link">Contact</a></li>
          <li class="nav-item"><a href="bookastay.php" class="nav-link">Book A Stay</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->



  <div class="block-30 block-30-sm item" style="background-image: url('images/bg_5.jpg');" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-10">
          <span class="subheading-sm">Contact</span>
          <h2 class="heading">Get In Touch</h2>
        </div>
      </div>
    </div>
  </div>




  <div class="site-section">
    <div class="container">
      <div class="row block-9">
        <div class="col-md-6 pr-md-5">
          <form name="contactus" action="#" method="post">
            <div class="form-group">
              <input type="text" class="form-control px-3 py-3" name="name" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control px-3 py-3" name="email" placeholder="Your Email">
            </div>
            <div class="form-group">
              <input type="text" class="form-control px-3 py-3" name="subject" placeholder="Subject">
            </div>
            <div class="form-group">
              <textarea name="message"  cols="30" rows="7" class="form-control px-3 py-3" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" name="submit" class="btn btn-primary py-3 px-5">
            </div>
          </form>


        </div>

        <div class="col-md-6" id="map"></div>
      </div>
    </div>
  </div>





  <footer class="footer">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-6 col-lg-4">
          <h3 class="heading-section">About Us</h3>
          <p class="mb-5">Everland has 149 luxurious guest rooms, including the Single Rooms, Deluxe Rooms, Presidential Suites and a suite that is equipped with the finest features and facilities. We focus on tending to your needs, giving you an experience like no other.</p>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="block-23">
            <h3 class="heading-section">Contact Info</h3>
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">Chandigarh University Chandigarh, Punjab</span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@mydomain.com</span></a></li>
                <li><span class="icon icon-clock-o"></span><span class="text">Monday &mdash; Sunday 8:00am - 10:00pm</span></li>
              </ul>
            </div>
        </div>


      </div>
      <div class="row pt-5">
        <div class="col-md-12 text-left">
          <p>

            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |  Made by Deepak & Shruti.

          </p>
        </div>
      </div>
    </div>
  </footer>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>

  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/main.js"></script>


  <?php

    if(isset($_POST['submit']))
    {

      mysqli_query($db,"INSERT INTO `contactus` VALUES('$_POST[name]','$_POST[email]','$_POST[subject]','$_POST[message]');");
  ?>
  <script type="text/javascript">
    alert("Message Send");
  </script>
  <?php
    }

  ?>

  </body>
</html>
