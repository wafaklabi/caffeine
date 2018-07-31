<!DOCTYPE HTML>
<head>
<title>Cafféine | Acceuil</title>
<link href="images/logo.ico"rel="shortcut icon">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
div.a{
height:500px;
width: 100%;
background-image:url("a envoyer/2.jpg");

}
</style>


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

    h4 {
    text-align: center;
    color:  #331a00;
}

    h3{
	color: #ffffff;
	text-align: center;
	font-style: bold;
	}
	h2 {
    text-align: center;
    text-transform: uppercase;
    color: #260300;
}
	}
	div.large {
    font-size: 500%;
}
	p{
	color:  white;
	}
    #example1 {
	background: url("a envoyer/18.jpg");
	background-size: 100% 100%;
	}

	h{
	color: white;
	font-size:18px;
	}
	k{
	color: white;
	font-size:15px;
	}


	</style>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>

	<div class="gtco-loader"></div>

	<div id="page">


	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">

			<div class="row">

				<div class="col-sm-4 col-xs-12">

					<div id="gtco-logo"><a href="index.php"><img src="images/logo+.png"  style="position:absolute;left:-1.1in;top:-0.3in;width:1.5in;height:1in;z-index:20;"/></a></div>
				</div>

				<div class="col-xs-8 text-right menu-1">
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
	<?php
include 'gallerie/connect.php';
?>
	<header id="gtco-header" class=" gtco-cover-md" role="banner" style="background-image: url(.jpg)" data-stellar-background-ratio="0.5" div class="w3-content w3-section" style="max-width:500px">
		<?php
	include "gallerie/connect.php";
	$sql = "SELECT * FROM tbl_slider where status='process'";
	$num_rows = mysqli_num_rows(mysqli_query($con,$sql));
	####### Fetch Results From Table ########

	$result = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($result))
	{$gimage=$row['image'];
	echo"<img class='mySlides' src='gallerie/admin/supload/$gimage' style='width:100%'>";
		}		?>



<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</header>
<div id="example1">

		<div class="overlay "   ></div>

		<div class="gtco-container  "  >
		 <h2 class="cursive-font large"  > <br></br>Qui sommes nous?  </h2>
<h3><p> N’hésitez pas de visiter le salon de thé des plus renommés de Sfax, "CAFFEINE" ... de quoi émoustiller vos papilles et passer un moment agréable tout auprès de vous !</p>
      <p> Fondé en 18 Mai 2014, ayant le certificat de la norme qualité ISO9001, "CAFFEINE", qui se situe à Avenue Majida Boulila , RUE IBN JAZZAR en face du centre culturel Mohamed Jamoussi , est le TOP pour se réunir entre copains et prendre le temps de papoter. On y trouve de nombreuses boissons chaudes, froides à savourer autour de gourmandes pâtisseries, de quoi s'accorder une pause gourmande à Sfax ?  "CAFFEINE" est de plus en plus demandé, surtout pour l’unicité de son concept culturel et calme et ses délices du chef.</p>
		<p>A notre adresse son propre identité : plutôt décontracté, plutôt chic, voire carrément luxueux, c’est le lieu de toutes les passions, où l'on perd la notion de temps… <p></h3>
<br><br><br><br>

		</div>


		<div class="row">

			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
					 <br></br>
						<span class="icon">
							<i class="ti-face-smile"></i>
						</span>
						<h>L'ENDROIT</h>
						<p><h4>Caffeine est l'endroit chic, calme et luxurueux.</h4></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
				<h2 class="cursive-font">CAFFEINE</h2>
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-truck"></i>
						</span>
						<h>LE SERVICE</h>
						<p><h4>La rapidité et l'excellence du service chez Caffeine.</h4></p>
					</div>
				</div>

				<div class="col-md-4 col-sm-6">

					<div class="feature-center animate-box" data-animate-effect="fadeIn">
					<br></br>
						<span class="icon">
							<i class="ti-thought"></i>
						</span>
						<h> NOS DELICES</h>
						<p><h4>Vous trouvez les meilleurs délices et saveurs chez nous!</h4></p>
					</div>
				</div>

				<div >
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
				    <h2 class="cursive-font"><b>BIENVENUE CHEZ-NOUS!</b><br></br></h2>
				    </div>
				</div>

			</div>



		<footer   role="contentinfo" style="background-image: url(images/img_bg_1.jpg)" data-stellar-background-ratio="0.5" >
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row row-pb-md">
				<div class="col-md-12 text-center" >
					<div class="gtco-widget" >
						<h3>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;contactez-nous</h3>
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
					<p><small class="block"><br></br>&copy; Enetcom Junior Entreprise 2018</small>
				</div>
			</div>
		</div>
	</footer>

</div>






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
