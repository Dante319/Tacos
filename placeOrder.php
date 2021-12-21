<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "tacos");
$order = "SELECT * FROM orders ORDER BY idOrder_ID DESC LIMIT 1";
$result = $connect->query($order);
$row = mysqli_fetch_array($result);
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1">
	<title>TACOS website</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="./css/placeOrder.css">
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
				<?php
					foreach($_SESSION["shopping_cart"] as $keys => $values)
					{
						$item_id = $values["item_id"];
						$item_name = $values["item_name"];
						$item_price = $values["item_price"];
						$item_quantity = $values["item_quantity"];
					}
					$total = $_SESSION['total'];

				?>

				<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="./orderPlaced.php" method='post'>

        <div class="row">
          <div class="col-25">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York">

            <div class="row">
              <div class="col-25">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-25">
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone" placeholder="123456789">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">

            <div class="row">
              <div class="col-25">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-25">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>

        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>


						<br><br><br>
					</div>
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
