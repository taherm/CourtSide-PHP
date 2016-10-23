<?php
session_start();
if(isset($_SESSION['login_user']))
{
}
else
{

?>
<script>
	alert('You have not logged in');
	window.location='index1.php';
</script>
<?php
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Mainbooking courtside</title>
<!---css--->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!---css--->

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
<!-- FlexSlider -->
	 <script src="js/jquery.flexslider.js"></script>
		<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
			<script>
			// Can also be used with $(document).ready()
				$(window).load(function() {
				$('.flexslider').flexslider({
				animation: "slide",
				controlNav: "thumbnails"
				});
				});
			</script>
			<!-- //FlexSlider-->
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
							<li><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i><a href="logout.php">Logout</a></li>
						
						</ul>
						</div>
						<div class="clearfix"></div>
					</div>
					<nav class="navbar navbar-default">
					<!---Brand and toggle get grouped for better mobile display--->
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
								<li class="active"><a href="index2.php">Home <span class="sr-only">(current)</span></a></li>
																													<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery <span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a href="2columnsgallery.html">2 Columns Gallery</a></li>
												<li><a href="3columnsgallery.html">3 Columns Gallery</a></li>
												<li><a href="4columnsgallery.html">4 Columns Gallery</a></li>
											</ul>
									</li>



																			<li><a href="blog.html">Blog</a></li>
																<li><a href="contact.html">Contact</a></li>
							</ul>
</div>
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
		
		<!---banner--->
		
			<div class="content">
			<div class="agent-section">
				<div class="container">
					<div class="agent-grids">
						<div class="col-md-6 agent-grid">
							<div class="agent-left">
								<img src="images/football/stb.jpg" height="200"width="300"  alt="/">
							</div>
							<div class="agent-right">
								<h4>Football Court</h4>
								<ul>
								<li>Free Parking</li>
								<li>Washroom</li>
								
							</ul>
							<a href="football.php" class="button3 hvr-shutter-out-horizontal">Start Kicking</a>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="col-md-6 agent-grid">
							<div class="agent-left">
								<img src="images/basketball/405109.jpg"height="200"width="300"  alt="/">
							</div>
							<div class="agent-right">
								<h4>Basketball Court</h4>
								<ul>
								<li>Free Parking</li>
								<li>Washroom</li>

							</ul>
							<a href="basketball.php" class="button3 hvr-shutter-out-horizontal">Start Dribbling</a>
							</div>
							<div class="clearfix"></div>
						</div>
					<div class="clearfix"></div>
					</div>
					<div class="agent-grids1">
						<div class="col-md-6 agent-grid">
							<div class="agent-left">
								<img src="images/court_tennis6.jpg"height="200"width="300"  alt="/">
							</div>
							<div class="agent-right">
								<h4>Tennis Court</h4>
								<ul>
								<li>Free Parking</li>
								<li>Washroom</li>


							</ul>
							<a href="tennis.php" class="button3 hvr-shutter-out-horizontal">Start Acing</a>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="col-md-6 agent-grid">
							<div class="agent-left">
								<img src="images/ccc.jpg"height="200"width="300"  alt="/">
							</div>
							<div class="agent-right">
								<h4>Cricket Court</h4>
								<ul>
								<li>Free Parking</li>
								<li>Washroom</li>


							</ul>
							<a href="cricket.php" class="button3 hvr-shutter-out-horizontal">Start Hitting</a>
							</div>
							<div class="clearfix"></div>
						</div>
					<div class="clearfix"></div>
					</div>
					<div class="agent-grids">
						<div class="col-md-6 agent-grid">
							<div class="agent-left">
								<img src="images/badmin.jpg"height="200"width="300"  alt="/">
							</div>
							<div class="agent-right">
								<h4>Badminton Court</h4>
								<ul>
								<li>Free Parking</li>
								<li>Washroom</li>


							</ul>
							<a href="badminton.php" class="button3 hvr-shutter-out-horizontal">Start Smashing</a>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="col-md-6 agent-grid">
							<div class="agent-left">
								<img src="images/sw.jpg"height="200"width="300"  alt="/">
							</div>
							<div class="agent-right">
								<h4>Swimming Pools</h4>
								<ul>
								<li>Free Parking</li>
								<li>Washroom</li>


							</ul>
							<a href="swim.php" class="button3 hvr-shutter-out-horizontal">Start Swimming</a>
							</div>
							<div class="clearfix"></div>
						</div>
					<div class="clearfix"></div>
					</div>
				</div>
			</div>
		
		<!---footer--->
			<div class="footer-section">
				<div class="container">
					<div class="footer-grids">
						<div class="col-md-3 footer-grid">
							<h4>About Courtside</h4>
							<p>This site was developed using html,jQuery,css,php.This site has been created to for booking of courts of any sport to organize or take part in any tournament and also helps you buy sports gears..</p>
						</div>
						<div class="col-md-3 footer-grid"><img src="images/Picture-2821.png" class="img-responsive"height="300" width="300" alt=""/>
							
						</div>
						<div class="col-md-3 footer-grid">
							<h4>Get In Touch</h4>
							<p>8901 Marmora Road</p>
							<p>Glasgow, DO4 89GR.</p>
							<p>Freephone : +1 234 567 890</p>
							<p>Telephone : +1 234 567 890</p>
							<p>FAX : + 1 234 567 890</p>
							<p>E-mail : <a href="mailto:example@mail.com"> example@mail.com</a></p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<!---footer--->
			<!--copy-->
			<div class="copy-section">
				<div class="container">
					<p>&copy; 2016 Real Space. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
				</div>
			</div>
		<!--copy-->
<!-- login -->
			<form method="post" action="logout.php">
											
											
											</form>
								
			<!-- //login -->
			

</body>
</html>