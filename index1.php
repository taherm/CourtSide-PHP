

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
							<li><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i><a href="#" data-toggle="modal" data-target="#myModal">Login</a></li>
							<li><i class="glyphicon glyphicon-lock" aria-hidden="true"></i><a href="#" data-toggle="modal" data-target="#myModal1">Register</a></li>
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
<!---banner--->
	<!-- missing -->
			<div class="friend-agent">
				<div class="container">
					<div class="friend-grids">
						<div class="col-md-4 friend-grid">
				<a href="#"><img src="images/logos/p.png"></a>
							<h4>Book a court</h4>
							<p>We provide you the facility to book courts of various sport online .</p>
						</div>
						<div class="col-md-4 friend-grid">
				<a href="#">			<img src="images/logos/p1.png"></a>
							<h4>Tournaments</h4>
							<p>Helps you oraganize or take part in tournaments.</p>
						</div>
						<div class="col-md-4 friend-grid">
		<a href="#">					<img src="images/logos/p2.png"></a>
							<h4>Find gears</h4>
							<p>You can buy the sports gears here.</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
						<!---testimonials--->
					<div class="testimonials">
						<div class="container">
							<h3>testimonial</h3>
							<span></span>
							<div id="owl-demo" class="owl-carousel">
								<div class="item">
									<div class="col-md-2 testmonial-img">
										<img src="images/t1.png" class="img-responsive" alt=""/>
									</div>
									<div class="col-md-10 testmonial-text">
										<p>It is a wonderful site that helps you book courts to play..buy gadgets..you should try it...</p><h4 style="float:left">Karthik</h4>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="item">
									<div class="col-md-2 testmonial-img">
										<img src="images/t2.png" class="img-responsive" alt=""/>
									</div>
									<div class="col-md-10 testmonial-text">
										<p>This site makes my wrok so easy because me and my friends play often and its really helpful to have this site to book courts and also helps us take part in tournaments.</p>
										<h4 style="float:left">Dheeraj</h4>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="item">
									<div class="col-md-2 testmonial-img">
										<img src="images/t3.png" class="img-responsive" alt=""/>
									</div>
									<div class="col-md-10 testmonial-text">
										<p>The site is really good its for all the sports lads out there...do try it.</p>
										<h4 style="float:left">Vicky </h4>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
					</div>
					<!---testmonials--->
	</div>				
					<!---footer--->
					<div class="footer-section">
													<div class="footer-grids">
								<div class="col-md-3 footer-grid">
									<h4>About CourtSide</h4>
									<p>This site was developed using html,jQuery,css,php.This site has been created to for booking of courts of any sport to organize or take part in any tournament and also helps you buy sports gears.</p>
								</div>
								<div class="col-md-3 footer-grid">
									<img src="images/Picture-2821.png" class="img-responsive"height="300" width="300" alt=""/>
									
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
							<p>&copy; 2016 Courtside. All rights reserved | Design by <a href="http://w3layouts.com">vignesh</a></p>
						</div>
					</div>
				<!--copy-->
<!-- login -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body real-spa">
							<div class="login-grids">
								<div class="login">
									
									<div class="login-right">
										<form method="post" action="login.php">
											<h3>Login</h3>
											<p>Username</p><input type="text" name="em"></br>
											<p>Password</p><input type="password" name="pwd">			
											<h4><a href="#">Forgot password</a> / <a href="#">Create new password</a></h4>
											<div class="single-bottom">
												<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>Remember Me.</label>
											</div>
											<input type="submit" value="Login Now" >
											</form>
											
										
									</div>
																
								</div>
								<p>By logging in you agree to our <a href="#">Terms</a> and <a href="#">Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //login -->
			<!-- Register -->
			<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body real-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-right">
										<form method="post" action="signup.php">
											<h3>Register </h3>
											<p>Name</p>
											<input type="text"  name="nm">	
											<p>E-mail Id</p>
											<input type="text"  name="nem">	
											<p>Password</p>
											<input type="password" name="npass">	
											
											<input type="submit" value="Register Now" >
										</form>
									</div>
									<div class="clearfix"></div>								
								</div>
								<p>By logging in you agree to our <a href="#">Terms</a> and <a href="#">Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //Register -->
</body>
</html>