  <?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "tacos";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "SELECT * FROM `Restaurant`";

// for method 1

$result1 = mysqli_query($connect, $query);

// for method 2

$result2 = mysqli_query($connect, $query);

$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option value=\"$row2[1]\">$row2[1]</option>";
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1">
    <title>TACOS website</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/order.css">
    <link rel="stylesheet" href="./css/animate.css">
    <link rel="stylesheet" href="./css/animate.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="./js/script.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
            <li><a href="order.php">Order</a></li>
            <li><a href="#team">Team</a></li>
            <li><a href="#clients">Clients</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>

  <!-- End of Nav Bar -->

  <!-- Header -->

  <div id="header" class="header">
    <div class="container" id="head">
      <div class="row">
        <div class="col-lg-12 col-md-12 wow bounceInLeft" data-wow-delay="0.5s">
            <h1>PLACE YOUR ORDER</h1>
              <br><br><br>
              <select>
               <?php while($row1 = mysqli_fetch_array($result1)):;?>
               <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>
               <?php endwhile;?>
             </select>
             <br><br>

              <select id="second-choice">
                <option>Please choose from above</option>
              </select>
              <br><br><br>
            </div>
          <button class="btn btn-lg btn-primary">Buy Now</button>
          <button class="btn btn-lg btn-success">View Detail</button>
      </div>
    </div>
  </div>

  <!-- End header -->

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
