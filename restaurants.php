<?php

$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"tacos");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1">
    <title>TACOS website</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/products.css">
    <link rel="stylesheet" href="./css/animate.css">
    <link rel="stylesheet" href="./css/animate.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/headhesive.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/modernizr/modernizr-2.7.2.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script src="./js/fresh_script.js"></script>
  </head>
  <body>

    <!-- Nav Bar -->

    <div id="myNavbar" class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#" class="navbar-brand">TACOS</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">Home</a></li>
            <li><a href="restaurants.php">Restaurants</a></li>
            <!--<li><a href="order.php">Order</a></li>-->
            <li><a href="#team">Team</a></li>
            <li><a href="#clients">Clients</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>

  <!-- End of Nav Bar -->

  <!-- Header -->

  <div id="restaurants" class="restaurants">
    <div class="container">
      <div class="row">
        <h1><font color="#23b683">RESTAURANTS</font></h1>

      </div>
    </div>
  </div>
  <br>
  <br>
  <!-- End Header -->
  <!-- Gallery -->
  <div id="gallery" class="gallery">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4">


  <!-- Trigger the Modal -->
  <img id="myImg1" src="./img/gfc.jpg"  width="300" height="200" >

  <!-- The Modal -->
  <div id="myModal1" class="modal">
  <span class="close"></span>
  <img class="modal-content" id="img01">
  <div id="caption1">
  </div>
  </div>
  <br>
  <br>
  <a href="gfc.php">GFC</a>
  <h5>Good Fried Chicken</h5>

  <br>
  </div>

        <div class="col-lg-4 col-md-4">
          <img id="myImg2" src="./img/board.jpeg" width="300" height="200">

          <!-- The Modal -->
          <div id="myModal2" class="modal">
          <span class="close"></span>
          <img class="modal-content" id="img02">
          <div id="caption2">
          </div>
          </div>
          <br>
          <br>
          <a href="#">FastF</a>
          <h5>This is the second product</h5>

          </div>

        <div class="col-lg-4 col-md-4">
          <img id="myImg3" src="./img/back3-.jpg" width="300" height="200">

          <!-- The Modal -->
          <div id="myModal3" class="modal">
          <span class="close"></span>
          <img class="modal-content" id="img03">
          <div id="caption3">
          </div>
          </div>
          <br>
          <br>
          <a href="#">McD</a>
          <h5>This is the third product</h5>
       </div>
    </div>
    <br>
    <br>
    <div class="row">
      <div class="col-lg-4 col-md-4">


    <!-- Trigger the Modal -->
    <img id="myImg4" src="./img/nature_1.jpg"  width="300" height="200" >

    <!-- The Modal -->
    <div id="myModal4" class="modal">
    <span class="close"></span>
    <img class="modal-content" id="img04">
    <div id="caption4">
    </div>
    </div>
    <br>
    <br>
    <a href="#">Link to Product</a>
    <h5>This is the fourth product</h5>

    <br>
    </div>

      <div class="col-lg-4 col-md-4">
        <img id="myImg5" src="./img/nature_2.jpg" width="300" height="200">

        <!-- The Modal -->
        <div id="myModal5" class="modal">
        <span class="close"></span>
        <img class="modal-content" id="img05">
        <div id="caption5">
        </div>
        </div>
        <br>
        <br>
        <a href="#">Link to Product</a>
        <h5>This is the fifth product</h5>

        </div>

      <div class="col-lg-4 col-md-4">
        <img id="myImg6" src="./img/nature_3.jpg" width="300" height="200">

        <!-- The Modal -->
        <div id="myModal6" class="modal">
        <span class="close"></span>
        <img class="modal-content" id="img06">
        <div id="caption6">
        </div>
        </div>
        <br>
        <br>
        <a href="#">Link to Product</a>
        <h5>This is the sixth product</h5>
     </div>
    </div>
    <br>
    <br>
    <div class="row">
      <div class="col-lg-4 col-md-4">


  <!-- Trigger the Modal -->
  <img id="myImg7" src="./img/industrial_1.jpg"  width="300" height="200" >

  <!-- The Modal -->
  <div id="myModal7" class="modal">
  <span class="close"></span>
  <img class="modal-content" id="img07">
  <div id="caption7">
  </div>
  </div>
  <br>
  <br>
  <a href="#">Link to Product</a>
  <h5>This is the seventh product</h5>

  <br>
  </div>

      <div class="col-lg-4 col-md-4">
        <img id="myImg8" src="./img/industrial_2.jpg" width="300" height="200">

        <!-- The Modal -->
        <div id="myModal8" class="modal">
        <span class="close"></span>
        <img class="modal-content" id="img08">
        <div id="caption8">
        </div>
        </div>
        <br>
        <br>
        <a href="#">Link to Product</a>
        <h5>This is the eigth product</h5>

        </div>

      <div class="col-lg-4 col-md-4">
        <img id="myImg9" src="./img/industrial_3.jpg" width="300" height="200">

        <!-- The Modal -->
        <div id="myModal9" class="modal">
        <span class="close"></span>
        <img class="modal-content" id="img09">
        <div id="caption9">
        </div>
        </div>
        <br>
        <br>
        <a href="#">Link to Product</a>
        <h5>This is the ninth product</h5>
     </div>
  </div>


    </div>
  </div>



  <div class="clearfix"></div>
  <br>

  <!-- Footer -->

  <div id="footer" class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4">
          <h4>Contact Us</h4>
          <p><i class="fa fa-home" aria-hidden="true"></i>&emsp;392, First main Street, Ch - 302306</p>
          <p ><i class="fa fa-envelope" aria-hidden="true"></i>&emsp;xyz@hmail.com</p>
          <p><i class="fa fa-phone" aria-hidden="true"></i>&emsp;+91 000000000</p>
        <p><i class="fa fa-globe" aria-hidden="true"></i>&emsp;www.index.html</p><br>
      </div>
      <div class="col-lg-4 col-md-4">
        <h4>About</h4>
        <p><i class="fa fa-square-o" aria-hidden="true"></i>About Us</p>
        <p><i class="fa fa-square-o" aria-hidden="true"></i>Privacy</p>
        <p><i class="fa fa-square-o" aria-hidden="true"></i>Terms and Conditions</p><br>
        </div>
      <div class="col-lg-4 col-md-4">
        <h4>Stay in touch</h4>
        <a href="#"><i class="social fa fa-facebook" aria-hidden="true"></i></a>
        <a href="#"><i class="social fa fa-twitter" aria-hidden="true"></i></a>
        <a href="#"><i class="social fa fa-linkedin" aria-hidden="true"></i></a>
        <a href="#"><i class="social fa fa-pinterest" aria-hidden="true"></i></a>
        <a href="#"><i class="social fa fa-youtube-play" aria-hidden="true"></i></a><br>
        <br>
        <input type="email" placeholder="Subcribe for Updates">
        <button class="btn btn-success">Subscribe</button>
        </div>
    </div>
  </div>
</div>

<!-- End Footer -->


<script src="js/wow.min.js"></script>
             <script>
             new WOW().init();
             </script>
  </body>
</html>
