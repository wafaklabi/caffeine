<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Cafféine | Menu</title>
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
<link rel="stylesheet" href="../css/animate.css">
<!-- Icomoon Icon Fonts-->
<link rel="stylesheet" href="../css/icomoon.css">
<!-- Themify Icons-->
<link rel="stylesheet" href="../css/themify-icons.css">
<!-- Bootstrap  -->
<link rel="stylesheet" href="../css/bootstrap.css">

<!-- Magnific Popup -->
<link rel="stylesheet" href="../css/magnific-popup.css">

<!-- Bootstrap DateTimePicker -->
<link rel="stylesheet" href="../css/bootstrap-datetimepicker.min.css">



<!-- Owl Carousel  -->
<link rel="stylesheet" href="../css/owl.carousel.min.css">
<link rel="stylesheet" href="../css/owl.theme.default.min.css">

<!-- Theme style  -->
	<link rel="stylesheet" href="../css/style.css">

<!-- Modernizr JS -->
<script src="../js/modernizr-2.6.2.min.js"></script>


<!-- PAGE'S BASE CSS -->
<style type="text/css">



.elem  * {
	box-sizing: border-box;
	margin: 0 !important;
}
.elem  .col-lg-3 .col-md-3 .col-sm-4{
	display: inline-block;
	font-size: 0;
	width: 35%;
	border: 20px solid transparent;
	border-bottom: none;
	background: #fff;
	padding: 10px;
	height: auto;
	background-clip: padding-box;

}
.elem > span {
	display: block;
	cursor: pointer;
	height: 0;
	padding-bottom:	70%;
	background-size: cover;
	background-position: center center;
}
h3{
color: #ffffff;
font-size: 25px;
font-style: bold;
}
p{
font-size: 16px;
}
li{
text-align: center;
font-size: 18px;
}
p,i{
color:  white;
}
k{
color:  white;
font-size: 16px;
}
a{
color:  white;
font-size: 16px;
}

</style>






<!-- LIGHTBOX FADING SHOW/HIDE EFFECT (as explained in documentation) -->
<style type="text/css">
.lcl_fade_oc.lcl_pre_show #lcl_overlay,
.lcl_fade_oc.lcl_pre_show #lcl_window,
.lcl_fade_oc.lcl_is_closing #lcl_overlay,
.lcl_fade_oc.lcl_is_closing #lcl_window {
	opacity: 0 !important;
}
.lcl_fade_oc.lcl_is_closing #lcl_overlay {
	-webkit-transition-delay: .15s !important;
	transition-delay: .15s !important;
}
</style>






<!-- //////////////////////////////////////////////// -->
<!-- REQUIRED ELEMENTS -->

<script src="lib/jquery.js" type="text/javascript"></script>

<script src="js/lc_lightbox.lite.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/lc_lightbox.css" />


<!-- SKINS -->
<link rel="stylesheet" href="skins/minimal.css" />


<!-- ASSETS -->
<script src="lib/AlloyFinger/alloy_finger.min.js" type="text/javascript"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- //////////////////////////////////////////////// -->
<!-- //////////////////////////////////////////////// -->

</head>

<body>


	<div id="page">


	<!-- <div class="page-inner"> -->

	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">

			<div class="row">

				<div class="col-sm-4 col-xs-12">

					<div id="gtco-logo"><a href="index.html"><img src="../images/logo+.png"  style="position:absolute;left:-1.1in;top:-0.3in;width:1.5in;height:1in;z-index:20;"/></a></div>
				</div>

				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li class="has-dropdown btn-cta"><a href="../index.php"><span>Acceuil</span></a></li>
						<li class="has-dropdown btn-cta">	<a href="menu.php"><span>Menu</span></a>	</li>

						<li class="has-dropdown btn-cta"><a href="../contact.php"><span>Contact</span></a></li>
							<!--	<li class="has-dropdown btn-cta">	<a href="gallerie/admin/login.php"><span><i class="fa fa-user fa-fw"></i></span></a>	</li> -->

					</ul>
				</div>
			</div>

		</div>
	</nav>
	<div  class="gtco-section"  id="gtco-header"  role="banner" style="background-image: url(../images/19.jpg)" data-stellar-background-ratio="0.5">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h1 class="cursive-font" >Notre Menu</h1>
					<p></p>
				</div>
			</div>

			<?php
	include '../gallerie/connect.php';
	?>

	<div class="content">
		<?php
	include "../gallerie/connect.php";
	$sql = "SELECT * FROM tbl_menu where status='process'";
	$num_rows = mysqli_num_rows(mysqli_query($con,$sql));
	####### Fetch Results From Table ########

	$result = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($result))
	{$gimage=$row['image'];
		$gname=$row['name'];
	echo "  <div class='col-lg-3 col-md-3 col-sm-4'> <a class='elem fh5co-card-item image-popup' href='../gallerie/admin/gupload/$gimage' title='MENU' data-lcl-txt='$gname' data-lcl-thumb='../gallerie/admin/gupload/$gimage'>
				<div class='overlay'><i class='ti-plus'></i></div><span style='background-image: url(../gallerie/admin/gupload/$gimage);'></span>
		</a></div>";
		}		?>


   		<br/><br/>
   	</div>
</div>


<br><br><br><br><br><br><br>

<footer  role="contentinfo"  data-stellar-background-ratio="0.5" >
<div class="overlay"></div>
<div class="gtco-container">
	<div class="row row-pb-md">
		<div class="col-md-12 text-center" >
			<div class="gtco-widget" >
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
			<p><small class="block"><br><br>&copy; Enetcom Junior Entreprise 2018</small>
		</div>
	</div>
</div>
</footer>
<div class="gototop js-top">
<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>
</div>




<!-- </div> -->

</div>



<!-- jQuery -->
<script src="../js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="../js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="../js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="../js/jquery.waypoints.min.js"></script>
<!-- Carousel -->
<script src="../js/owl.carousel.min.js"></script>
<!-- countTo -->
<script src="../js/jquery.countTo.js"></script>

<!-- Stellar Parallax -->
<script src="../js/jquery.stellar.min.js"></script>

<!-- Magnific Popup -->
<script src="../js/jquery.magnific-popup.min.js"></script>
<script src="../js/magnific-popup-options.js"></script>

<script src="../js/moment.min.js"></script>
<script src="../js/bootstrap-datetimepicker.min.js"></script>


<!-- Main -->
<script src="../js/main.js"></script>




<!-- //////////////////////////////////////////////// -->
<!-- LIGHTBOX INITIALIZATION -->
<script type="text/javascript">
$(document).ready(function(e) {

	// live handler
	lc_lightbox('.elem', {
		wrap_class: 'lcl_fade_oc',
		gallery : true,
		thumb_attr: 'data-lcl-thumb',

		skin: 'minimal',
		radius: 0,
		padding	: 0,
		border_w: 0,
	});

});
</script>
<!-- //////////////////////////////////////////////// -->
<!-- //////////////////////////////////////////////// -->

</body>
</html>
