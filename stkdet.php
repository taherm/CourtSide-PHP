
<?php
session_start();
if(isset($_SESSION['admin_user']))
{
}
else
{

?>
<script>
	alert('This is only for admin');
	window.location='adminlog.php';
</script>
<?php
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Courtside</title>
<!---css--->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!---css--->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!---js--->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<!---js--->
<!---fonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
<!---fonts-->
<script src="js/responsiveslides.min.js"></script>
	 <script>
		$(function () {
		  $("#slider").responsiveSlides({
			auto:true,
			nav: false,
			speed: 500,
			namespace: "callbacks",
			pager:true,
		  });
		});
	</script>
<link href="css/owl.carousel.css" rel="stylesheet">
<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function() {
		$("#owl-demo").owlCarousel({
			items : 1,
			lazyLoad : true,
			autoPlay : true,
			navigation : false,
			navigationText :  false,
			pagination : true,
		});
		});
	</script>

</head>
<body>
		<!---header--->
			<div class="header-section">
				<div class="container">
					<div class="head-top">
						<div class="social-icon">
							<a href="#"><i class="icon"></i></a>
							<a href="#"><i class="icon1"></i></a>
							<a href="#"><i class="icon2"></i></a>
							<a href="#"><i class="icon3"></i></a>
							<a href="#"><i class="icon4"></i></a>
						</div>
						<div class="email">
						<ul>
							<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email: <a href="mailto:info@example.com">info@example.com</a> </li>
							<li><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i><a href="adlogout.php" >Logout</a></li>
							
						</ul>
						</div>
						<div class="clearfix"></div>
					</div>
					<nav class="navbar navbar-default">
					
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>				  
							<div class="navbar-brand">
								<h1><a href="#"><span>Court</span>Side</a></h1>
</a>
							</div>
						</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li class="active"><a href="index1.php">Home <span class="sr-only">(current)</span></a></li>
																													

							
																<li><a href="viewstk.php">View Stock</a></li>
																<li><a href="addstk.php">Add Stock</a></li>
																<li><a href="upstk.php">Update Stock</a></li>
																<li><a href="purdet.php">View Purchase Details</a></li>
                                                               <li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bookings<span class="caret"></span></a>
											<ul class="dropdown-menu">
												
												<li><a href="vfootball.php">Football</a></li>
												<li><a href="vbasketball.php">Basketball</a></li>
												<li><a href="vtennis.php">Tennis</a></li>
												<li><a href="vbadminton.php">Badminton</a></li>
												<li><a href="vcricket.php">Cricket</a></li>
                                                <li><a href="vswim.php">Swimming</a></li></ul>
																
							</ul>
							<div class="phone">
							<span><i class="glyphicon glyphicon-phone" aria-hidden="true"></i>1-999-4563-555</span>
							</div>
							<div class="clearfix"></div>
						</div>
					</nav>
				</div>
			</div>
		<!---header--->
		<!---banner--->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides" id="slider">
					<div class="slid banner1">
						 					</div>
					<div class="slid banner2">	
						  					</div>
					
					<div class="slid banner3">	
						
					</div>
					<div class="slid banner4">	
						
					</div>
				</ul>
			</div>
		</div>
<!---banner--->	<!---footer--->
			<!--copy-->
			<div class="copy-section">
				<div class="container">
					<p>&copy; 2016 Real Space. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
				</div>
			</div>
		<!--copy-->
<!-- login -->
			
								
			<!-- //login -->
			

</body>
</html>