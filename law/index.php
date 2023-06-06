<?php

session_start();

if(!isset($_SESSION['id'])&&!isset($_SESSION['username'])){
    header('location: ../index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Evans - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
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
	      <a class="navbar-brand" href="index.php">Lawrence</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
				<li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
				<li class="nav-item"><a href="../logout.php" class="nav-link">Logout</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section id="home-section" class="hero">
    	<h1 class="vr text-center">Law</h1>
		  <div class="js-fullheight home-wrap d-flex">
		  	<div class="half order-md-last"></div>
		  	<div class="half">
			  	<div class="home-slider owl-carousel">
			      <div class="slider-item js-fullheight">
			      	<div class="overlay"></div>
			        <div class="container-fluid p-0">
			          <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
			          	<div class="one-third img js-fullheight" style="background-image:url(images/d1.jpg);">
			          	</div>
			        	</div>
			        </div>
			      </div>

			      <div class="slider-item js-fullheight">
			      	<div class="overlay"></div>
			        <div class="container-fluid p-0">
			          <div class="row d-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
			          	<div class="one-third img js-fullheight" style="background-image:url(images/d2.jpg);">
			          		<div class="overlay"></div>
			          	</div>
			        	</div>
			        </div>
			      </div>
			    </div>
			  </div>
	    </div>
    </section>


    <section class="ftco-section ftco-intro">
    	<div class="container">
			<h3>My TOP 3 Dota2 Favorite Heroes</h3>
			<br>
			<div class="row">
				<div class="col-md-6">
					<img src="./images/am.jpg" alt="" class="img-fluid">
				</div>
				<div class="col-md-6">
					<h3>ANTI-MAGE</h3>
					<hr>
					<p style="color: green; display: inline-block; text-align: right;">AGILITY</p>
					<p>Should Anti-Mage have the opportunity to gather his full strength, few can stop his assaults. Draining mana from enemies with every strike or teleporting short distances to escape an ambush, cornering him is a challenge for any foe</p>
					<a class="btn btn-info" href="https://www.dota2.com/hero/anti-mage">Learn more</a>
				</div>
			</div>
			<div class="row mt-4">
				<div class="col-md-6">
					<img src="./images/fv.jpg" alt="" class="img-fluid">
				</div>
				<div class="col-md-6">
					<h3>FACELESS VOID</h3>
					<hr>
					<p style="color: green; display: inline-block; text-align: right;">AGILITY</p>
					<p>Time is everything to Faceless Void. He speeds time to dash between locations, manipulates it to dodge attacks, stops it in a large area to devastate his foes, and given enough of it to gather resources, he can make himself unbelievably powerful.</p>
					<a class="btn btn-info" href="https://www.dota2.com/hero/facelessvoid">Read more</a>
				</div>
			</div>
			<div class="row mt-4">
				<div class="col-md-6">
					<img src="./images/jugg.webp" alt="" class="img-fluid">
				</div>
				<div class="col-md-6">
					<h3>JUGGERNAUT</h3>
					<hr>
					<p style="color: green; display: inline-block; text-align: right;">AGILITY</p>
					<p>In a flurry of slashes, Juggernaut cuts down his foes. Sprinting and spinning into battle with reckless abandon, and nearly invincible once he is able to begin his assault, stopping Juggernaut can often be just as difficult as surviving him.</p>
					<a class="btn btn-info" href="https://www.dota2.com/hero/juggernaut">Read more</a>
				</div>
			</div>
    	</div>
    </section>

	<section class="testimony-section">
		<div class="container">
		  <div class="row ftco-animate justify-content-center">
			  <div class="col-md-5 d-flex">
				  <div class="testimony-img" style="background-image: url(images/dota.jpg);"></div>
			  </div>
			<div class="col-md-7 py-5 pl-md-5">
				<div class="heading-section heading-section-white pt-4 ftco-animate">
					<h2 class="mb-0">Dota2 Hero Lines</h2>
				  </div>
			  <div class="carousel-testimony owl-carousel ftco-owl">
				<div class="item">
				  <div class="testimony-wrap pb-4">
					<div class="text">
					  <p class="mb-4">Never in all the world’s making and remaking have I witnessed an outcome that was more unequivocally in the bag.</p>
					</div>
					<div class="d-flex">
						<div class="user-img" style="background-image: url(images/et.jpg)">
						</div>
						<div class="pos ml-3">
							<p class="name">Elder Titan</p>
						  <span class="position">Strength</span>
						</div>
					  </div>
				  </div>
				</div>
				<div class="item">
				  <div class="testimony-wrap pb-4">
					<div class="text">
					  <p class="mb-4">Throughout the aeons I have been known by many names…but my true name of power…is Carl.</p>
					</div>
					<div class="d-flex">
						<div class="user-img" style="background-image: url(images/inv.jpg)">
						</div>
						<div class="pos ml-3">
							<p class="name">Invoker</p>
						  <span class="position">Intelligence</span>
						</div>
					  </div>
				  </div>
				</div>
				<div class="item">
				  <div class="testimony-wrap pb-4">
					<div class="text">
					  <p class="mb-4">I have known from an early age, since the Avernal Font’s first and greatest revelation, that this one would be in the bag.</p>
					</div>
					<div class="d-flex">
						<div class="user-img" style="background-image: url(images/abdn.jpg)">
						</div>
						<div class="pos ml-3">
							<p class="name">Abaddon</p>
						  <span class="position">Strength</span>
						</div>
					  </div>
				  </div>
				</div>
				<div class="item">
				  <div class="testimony-wrap pb-4">
					<div class="text">
					  <p class="mb-4">It’s in the bag, mate. Yeah, go on, you see if it’s not. Open it up and see if it’s not in there. I’m telling you, it’s a lock, mate.</p>
					</div>
					<div class="d-flex">
						<div class="user-img" style="background-image: url(images/bb.jpg)">
						</div>
						<div class="pos ml-3">
							<p class="name">Bristleback</p>
						  <span class="position">Strength</span>
						</div>
					  </div>
				  </div>
				</div>
				<div class="item">
				  <div class="testimony-wrap pb-4">
					<div class="text">
					  <p class="mb-4">Never in the long history of the Earth has there ever been a battle more in the bag than this one.</p>
					</div>
					<div class="d-flex">
						<div class="user-img" style="background-image: url(images/es.jpg)">
						</div>
						<div class="pos ml-3">
							<p class="name">Earth Spirit</p>
						  <span class="position">Strength</span>
						</div>
					  </div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </section>

	  <section class="ftco-section ftco-intro bg-light">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-sm-3">
					<img src="./images/sf2.jpg" alt="" class="img-fluid">
				</div>
    			<div class="col-sm-3">
					<img src="./images/sf.jpg" alt="" class="img-fluid">
				</div>
    			<div class="col-sm-3">
					<img src="./images/bb.jpg" alt="" class="img-fluid">
				</div>
    			<div class="col-sm-3">
					<img src="./images/sven.jpg" alt="" class="img-fluid">
				</div>
    		</div>
    	</div>
    </section>

    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Portfolio</a></li>
                <li><a href="#" class="py-2 d-block">Privacy</a></li>
                <li><a href="#" class="py-2 d-block">Terms Condition</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Home</a></li>
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Work</a></li>
                <li><a href="#" class="py-2 d-block">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
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
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>