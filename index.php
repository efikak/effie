<!DOCTYPE html>
<html>
	<head>
		<?php include 'Pages/header.php';?>
		<title>Effie K. | Web Stylist</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link rel="stylesheet" href="Pages/style.css">
		<link rel="icon" href="Pages/Images/effie-logo.png" type="image/gif" sizes="56x56">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
			.navbar-wrapper {
			    position:relative;
			}

			.fixed-top {
				background-color: rgb(255, 255, 255, 0.8);
			}

			.carousel {
			    top:0;
			}

			.carousel-inner {
			    width: 100%; 
			    overflow: hidden;
			    }

			.navbar {
			    position:absolute;
			    margin-top: 20px;
			    z-index:10;
			    background-color: rgb(0, 0, 0, 0); 
			    width:100%;
			}

			body > nav:nth-child(17) {
				display: none;
			}

		</style>
	</head>
	<body>
		<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">

		  <div class="carousel-inner">

		    <div class="carousel-item active banner">
		      <img src="Pages/carousel/type.jpg" class="d-block w-100">
		      <div class="carousel-caption d-none d-md-block">
		        <h1>Find more about me!</h1>
			        <div class="koympi">
						<a class="nav-link" href="CV.php"><button class="button white">
						  My Bio
						  <div class="button__horizontal"></div>
						  <div class="button__vertical"></div>
						</button></a>
					</div>
		      </div>
		    </div>

		    <div class="carousel-item banner">
		      <img src="Pages/carousel/telephone.jpg" class="d-block w-100">
		      <div class="carousel-caption d-none d-md-block">
		        <h1>Contact me... to create your unique Web Site</h1>
			        <div class="koympi">
						<a class="nav-link" href="contact.php"><button class="button white">
						  Let's get in touch
						  <div class="button__horizontal"></div>
						  <div class="button__vertical"></div>
						</button></a>
					</div>
		      </div>
		    </div>

		  </div>

		  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>

		  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>

		</div>

			<?php include 'Pages/footer.php';?>


		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

	
	</body>

</html>