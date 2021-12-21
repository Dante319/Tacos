<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "tacos");
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
					<li><a href="#team">Team</a></li>
					<li><a href="#clients">Clients</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</div>
		</div>
	</div>

<!-- End of Nav Bar -->

<!--Header -->

  <?php
    $order = "SELECT * FROM orders ORDER BY idOrder_ID DESC LIMIT 1";
    $result = $connect->query($order);
    if (mysqli_num_rows($result)==0)
      $orderId = 100;
    else
    {
      $row = mysqli_fetch_array($result);
      $orderId = $row['idOrder_ID'] + 1;
    }
    $cust = "SELECT * FROM customer ORDER BY idCustomer_ID DESC LIMIT 1";
    $result = $connect->query($cust);
    if (mysqli_num_rows($result)==0)
      $custId = 5000;
    else
    {
      $row = mysqli_fetch_array($result);
      $custId = $row['idCustomer_ID'] + 1;
    }

    $customer_name = $_POST['firstname'];
    $customer_addr = $_POST['address'] . ', ' . $_POST['city'] . ', ' . $_POST['state'];
    $customer_phone = $_POST['phone'];
    $customer_email = $_POST['email'];
    $customer_cardName = $_POST['cardname'];
    $customer_cardNumber = $_POST['cardnumber'];
    $customer_expMonth = $_POST['expmonth'];
    $customer_expYear = $_POST['expyear'];
    $customer_CVV = $_POST['cvv'];
    $bill = $_SESSION['total'];
    $order_query = "INSERT INTO orders(idOrder_ID, Customer_name, idCustomer_ID, Bill) VALUES ($orderId, '$customer_name', $custId, $bill)";
    $customer_query = "INSERT INTO customer(idCustomer_ID,Name,Address,Phone,email,cardName,cardNumber,expMonth,expYear,CVV) VALUES ($custId, '$customer_name', '$customer_addr', $customer_phone, '$customer_email', '$customer_cardName', '$customer_cardNumber', '$customer_expMonth', $customer_expYear, $customer_CVV)";

    $connect->query($order_query);
    $connect->query($customer_query);
   ?>

   <div class="container">
     <br />
     <br />
     <br />
     <h3 align="center">Thank you for choosing us! Your order has been successfully placed.</h3><br/>
     <br /><br />

   </div>

<!-- End of Header -->

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
<?php session_destroy();
$connect->close(); ?>
<!-- End Footer -->


<script src="js/wow.min.js"></script>
					 <script>
					 new WOW().init();
					 </script>
</body>
</html>
