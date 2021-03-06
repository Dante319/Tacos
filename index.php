<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1">
    <title>TACOS website</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/animate.css">
    <link rel="stylesheet" href="./css/animate.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
          <a href="#" class="navbar-brand">TACOS (Logo)</a>
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

  <div id="header" class="header">
    <div class="container" id="head">
      <div class="row">
        <div class="col-lg-12 col-md-12 wow bounceInLeft" data-wow-delay="0.5s">
            <h1>TACOS</h1>
            <div class="search-container"  id="search">
              <form action="/action_page.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
              </form>
            </div>
          <p class="wow fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dignissim imperdiet sem, id placerat ipsum aliquam eget. Sed eget lacinia felis. Phasellus quis augue imperdiet, interdum eros quis, pulvinar metus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus dictum justo eget sapien dapibus cursus. Nam in magna lobortis lacus dictum molestie ut sed ante. Nam blandit ex vitae mi ultrices, vel aliquet tellus lacinia.</p>
          <button class="btn btn-lg btn-primary">Buy Now</button>
          <button class="btn btn-lg btn-success">View Detail</button>
        </div>
      </div>
    </div>
  </div>

  <!-- End header -->

  <!-- Featured -->

  <div id="featured" class="featured">
    <div class="container">
      <h2 class="wow fadeInUp" class="wow fadeInUp">Featured</h2><br>
      <p class="wow fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dignissim imperdiet sem, id placerat ipsum aliquam eget. Sed eget lacinia felis. Phasellus quis augue imperdiet, interdum eros quis, pulvinar metus. </p>
      <div class="row">
        <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="1.8s">
          <img src="./img/burger.jpeg">
          <h4>Burger and Fries</h4>
          <p class="wow fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
        </div>
        <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="1.4s">
          <img src="./img/lemon_rice.jpg">
          <h4>Lemon Rice</h4>
          <p class="wow fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
        </div>
        <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="0.8s">
          <img src="./img/pancake.jpeg">
          <h4>Pancakes</h4>
          <p class="wow fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
        </div>
        <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="0.4s">
          <img src="./img/burrito.jpeg">
          <h4>Burrito</h4>
          <p class="wow fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
        </div>
      </div>
    </div>
  </div>

  <!-- End Featured -->

  <!-- Restaurants -->

  <div id="restaurants" class="restaurants">
    <div class="container">
      <div class="row">
        <h2 class="wow fadeInUp">Restaurants</h2>
        <p class="wow fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
        <div class="col-lg-3 col-md-3 wow flipInY" data-wow-delay="0.8s">
          <div class="packages">
            <h4>Bronze</h4><br>
            <img src="./img/pancake.jpeg">
            <p class="wow fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <hr>
            <li>100 Users</li>
            <li>SSL Certificate</li>
            <li>Online Support</li>
            <li>300GB Disk Space</li>
            <li>800 Email Addresses</li>
            <li>MySQL Database</li>
            <button type="button" class="btn btn-success">Get Started</button>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 wow flipInY" data-wow-delay="1.2s">
          <div class="packages">
            <h4>Gold</h4><br>
            <img src="./img/pancake.jpeg">
            <p class="wow fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <hr>
            <li>100 Users</li>
            <li>SSL Certificate</li>
            <li>Online Support</li>
            <li>300GB Disk Space</li>
            <li>800 Email Addresses</li>
            <li>MySQL Database</li>
            <button type="button" class="btn btn-success">Get Started</button>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 wow flipInY" data-wow-delay="1.6s">
          <div class="packages">
            <h4>Silver</h4><br>
            <img src="./img/pancake.jpeg">
            <p class="wow fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <hr>
            <li>100 Users</li>
            <li>SSL Certificate</li>
            <li>Online Support</li>
            <li>300GB Disk Space</li>
            <li>800 Email Addresses</li>
            <li>MySQL Database</li>
            <button type="button" class="btn btn-success">Get Started</button>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 wow flipInY" data-wow-delay="2.0s">
          <div class="packages">
            <h4>Premium</h4><br>
            <img src="./img/pancake.jpeg">
            <p class="wow fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <hr>
            <li>100 Users</li>
            <li>SSL Certificate</li>
            <li>Online Support</li>
            <li>300GB Disk Space</li>
            <li>800 Email Addresses</li>
            <li>MySQL Database</li>
            <button type="button" class="btn btn-success">Get Started</button>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>

  <!-- End Restaurants -->

  <!-- Team -->
  <div id="team" class="team">
    <div class="container">
      <div class="row">
        <h2 class="wow fadeInUp">Team</h2>
          <p class="wow fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
          <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="1.8s">
            <img src="./img/ppl1.jpg" class="img-circle" alt="person1">
            <h4>Jane Doe</h4>
            <b>CEO and Founder</b>
            <p class="wow fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
          </div>
          <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="1.6s">
              <img src="./img/ppl2.jpeg" class="img-circle" alt="person2">
              <h4>John Doe</h4>
              <b>CEO and Founder</b>
              <p class="wow fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
              <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
          </div>
          <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="1.2s">
              <img src="./img/ppl3.jpeg" class="img-circle" alt="person3">
              <h4>Jane Doe</h4>
              <b>CEO and Founder</b>
              <p class="wow fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
              <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
          </div>
          <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="0.8s">
              <img src="./img/ppl4.jpeg" class="img-circle" alt="person4">
              <h4>John Doe</h4>
              <b>CEO and Founder</b>
              <p class="wow fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
              <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
          </div>
      </div>
    </div>
  </div>

  <!-- End Team -->

  <!-- Clients -->

  <div id="clients" class="clients">
    <div class="container">
      <div class="row">
        <h2 class="wow fadeInUp">Trusted by</h2>
        <p class="wow fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="1.8s">
          <li><img src="./img/ggl.jpg"  alt="Google"></li>
        </div>
        <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="1.6s">
            <li><img src="./img/ig.jpg"  alt="Instagram"></li>
        </div>
        <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="1.2s">
            <li><img src="./img/hy.jpg" alt="Hyundai"></li>
        </div>
        <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="0.8s">
            <li><img src="./img/volks.jpg"  alt="Volkswagen"></li>
        </div>
      </div>
    </div>
  </div>

  <!-- End Clients -->

  <!-- Contact -->

  <div id="contact" class="contact">
    <div class="container">
      <div class="row">
        <h2 class="wow fadeInUp">Contact</h2>
        <p class="wow fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <div class="col-lg-6 col-md-6">
          <div class="input-group input-group-lg wow fadeInUp" data-wow-delay="0.8s">
            <span class="input-group-addon" id="sizing-addon1">
              <i class="fa fa-user" aria-hidden="true"></i>
            </span>
            <input type="text" class="form-control" aria-describedby="sizing-addon1" placeholder="Full Name">
        </div>
        <div class="input-group input-group-lg wow fadeInUp" data-wow-delay="1.2s">
          <span class="input-group-addon" id="sizing-addon1">
            <i class="fa fa-envelope" aria-hidden="true"></i>
          </span>
          <input type="text" class="form-control" aria-describedby="sizing-addon1" placeholder="Email Address">
      </div>
      <div class="input-group input-group-lg wow fadeInUp" data-wow-delay="1.6s">
        <span class="input-group-addon" id="sizing-addon1">
          <i class="fa fa-phone" aria-hidden="true"></i>
        </span>
        <input type="text" class="form-control" aria-describedby="sizing-addon1" placeholder="Phone Number">
    </div>
    </div>
        <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.8s">
          <div class="input-group">
            <textarea name="name" id="" rows="6" cols="80" class="form-control"></textarea>
          </div>
          <button class="btn btn-lg wow fadeInUp" data-wow-delay="0.8s">Submit your message</button>
        </div>
    </div>
  </div>
</div>
  <!--End Contact -->

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
        <p><i class="fa fa-square-o" aria-hidden="true"></i>&emsp;About Us</p>
        <p><i class="fa fa-square-o" aria-hidden="true"></i>&emsp;Privacy</p>
        <p><i class="fa fa-square-o" aria-hidden="true"></i>&emsp;Terms and Conditions</p><br>
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
