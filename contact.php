<?php
if(isset($_POST['submit']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$message=$_POST['message'];
$date = date('Y-m-d H:i:s');
if (empty($name)||empty($name)||empty($message))
{
 echo " <div class='alert alert-danger'><strong>ERROR</strong> - Empty fields are not allowed !</div>";
 }
else
{
include "gallerie/connect.php";

$query="INSERT INTO tbl_message(name,email,message,date) VALUES ('$name','$email','$message','$date')";
if(mysqli_query($con,$query))
	{
echo " <div class='alert alert-success'>Votre message a été envoyé avec succès.</div>";
	}
	else
	{
		echo "error";
		print mysql_error();
	}


   }
}

?>
<!DOCTYPE HTML>

<html>
	<head>

	<title>cafféine | Contact</title>
	 <meta charset="UTF-8">

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Bootstrap DateTimePicker -->
	<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">



	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<style>

	h3{
	color: #ffffff;
	font-style: bold;
	}

	.form-control{
	background-color: #FFFFFF;}
	.btn-default{
	color:  #cc6600;
}
	li,a{
	color: #fff;
	font-size: 17px;
	}
	p,h,i{
	color: white;
	}
	ul{
	color:#DBC7AA;
	}
	j{
	color:white;
	font-size: 15px;

	}


	</style>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body id="example1" >

	<div id="page" >



	<!-- <div class="page-inner"> -->


	<nav  class="gtco-nav" role="navigation" >
		<div class="gtco-container">

			<div class="row">

				<div class="col-sm-4 col-xs-12">

					<div id="gtco-logo"><a href="index.html"><img src="images/logo+.png"  style="position:absolute;left:-1.1in;top:-0.3in;width:1.5in;height:1in;z-index:20;"/></a></div>
				</div>

				<div class="col-xs-8 text-right menu-1" >
					<ul>
						<li class="has-dropdown btn-cta"><a href="index.php"><span>Acceuil</span></a></li>
						<li class="has-dropdown btn-cta">	<a href="menu/menu.php"><span>Menu</span></a>	</li>

						<li class="has-dropdown btn-cta"><a href="contact.php"><span>Contact</span></a></li>
						<!--	<li class="has-dropdown btn-cta">	<a href="gallerie/admin/login.php"><span><i class="fa fa-user fa-fw"></i></span></a>	</li> -->

					</ul>
				</div>
			</div>

		</div>
	</nav>




	<div class="gtco-section" style="background-image: url(images/19.jpg)">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12">
					<div  class="col-md-6 animate-box">
					<h2 class="cursive-font primary-color"><br></br><br><b>Contactez-nous</b></h2>
					<form action="contact.php" method="post">
						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="name">Nom et prénom</label>
								<input type="text" id="name" name="name" class="form-control" placeholder="Nom et Prénom">
							</div>

						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="email">Email</label>
								<input type="text" id="email" name="email" class="form-control" placeholder="Votre adresse email">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="message">Message</label>
								<textarea name="message" id="message" name="message" cols="30" rows="10" class="form-control" placeholder="Votre message"></textarea>
							</div>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary" name="submit">Envoyer</button>

						</div>

					</form>
				</div>
				<div class="col-md-5 col-md-push-1 animate-box">

					<div class="gtco-contact-info">
						<h2 class="cursive-font primary-color"><br><br></br><b>Contact</b></h2>
						<a >
							Avenue Majida Boulila,<br> RUE IBN JAZZAR en face du centre <br>culturel Mohamed Jamoussi</li><br>
						 Numéro d'administration:	<a > 74 417 012</a> <br>
						 <a>Numéro de résérvation: </a><a>99848064</a><br>
							<a>Adresse e-mail: </a><a >caffeine.marketing2@gmail.com</a> <br><br>
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13115.011251089132!2d10.7512084!3d34.7366246!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaabb70c5fd3acf2e!2sCaffeine+2!5e0!3m2!1sfr!2stn!4v1524953977465" width="500" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

							</a>

					</div>
				</div>
			</div>
		</div>
	</div>

	<footer  role="contentinfo"  data-stellar-background-ratio="0.5" >
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row row-pb-md">
				<div class="col-md-12 text-center" >
					<div class="gtco-widget" >
						<br><br>
						<h3>contactez-nous</h3>
						<ul class="gtco-quick-contact">
						     <li><k><i class="fa fa-phone"></i>  administration &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; </k> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<k><i class="fa fa-phone"></i> résérvation</k></li>
							<li><a href="#">  74 417 012</a>  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 99 848 064</a></li>
							<br>
						</ul>
					</div>
					<div class="gtco-widget">
						<h3>Suivez-nous</h3>
						<ul class="gtco-social-icons">
							<li><a href="https://web.facebook.com/pg/caffeinetn/photos/?ref=page_internal"><i class="icon-facebook"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-12 text-center copyright">
					<j><small class="block"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&copy; Enetcom Junior Entreprise 2018</small> </j>
				</div>
			</div>
		</div>
	</footer>

	<!-- </div> -->

	</div>


	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>

	<script src="js/moment.min.js"></script>
	<script src="js/bootstrap-datetimepicker.min.js"></script>


	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>
