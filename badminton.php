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
<title>Badminton courts </title>
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
							<li><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i><a href="logout.php" >Logout</a></li>
							
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
							</div>
						</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li><a href="index2.php">Home <span class="sr-only">(current)</span></a></li>
								

<ul class="nav navbar-nav">
								
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery <span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a href="2columnsgallery.html">2 Columns Gallery</a></li>
												<li><a href="3columnsgallery.html">3 Columns Gallery</a></li>
												<li><a href="4columnsgallery.html">4 Columns Gallery</a></li>
											</ul>
									</li>
								<li><a href="blog.html">Blog</a></li>
								<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages<span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a href="mainbooking.php">MainBooking</a></li>
												<li><a href="football.php">Football</a></li>
												<li><a href="basketball.php">Basketball</a></li>
												<li><a href="tennis.php">Tennis</a></li>
												<li><a href="badminton.php">Badminton</a></li>
												<li><a href="cricket.php">Cricket</a></li>
												<li><a href="swim.php">Swimming</a></li>
											</ul>

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
	
			<div class="container">
				<h2>View Courts</h2>
			</div>
		
		<!---banner--->
		<div class="content">
			<div class="properties-section">
				<div class="container">
				<div class="properties-grids">
					<div class="col-md-9 forsales-left">
						<div class="forsale">
							<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
								
								<div id="myTabContent" class="tab-content">
									<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
<!-- Starting of court -->
			
							
										<div class="forsale-grids">
											<h4><a href="ppa.php">Prakash padukone Acedamy</a></h4>
											<div class="forsale1">
												<div class="forsale-left">
													<a href="ppa.php"><img src="images/badminton/badminton2_(1).jpg" class="img-responsive" alt="/"></a>
												</div>
												<div class="forsale-right">
													<h5><label>600rs</label> per hour Synthetic Court </span></h5>
													<p>This is a Synthetic court.It is well maintained .It is situated at Dumlur Bangalore</p>
													<a href="ppa.php"class="button4">more details</a>
												</div>
												<div class="clearfix"></div>
												<ul>
													<li><img src="images/par.png"height="50"width="50"></li>
													<li><img src="images/was.png"height="50"width="50"></li>
													<li><img src="images/water.jpg"height="50"width="50"></li>
																								</ul>

											</div>
										</div>	
										<div class="forsale-grids">
											<h4><a href="raca.php">RacketArena</a></h4>
											<div class="forsale1">
												<div class="forsale-left">
													<a href="raca.php"><img src="images/badminton/IMG_1121.jpg" class="img-responsive" alt="/"></a>
												</div>
												<div class="forsale-right">
													<h5><label>700rs</label> Per <span>hour Indoor court</span></h5>
													<p>This is a Blue Synthetic court.It is well maintained artificial flooring.It is situated at Ramamurthy nagar Bangalore</p>
													<a href="raca.php"class="button4">more details</a>
												</div>
												<div class="clearfix"></div>
												<ul>
													<li><img src="images/par.png"height="50"width="50"></li>
													<li><img src="images/was.png"height="50"width="50"></li>
													<li><img src="images/water.jpg"height="50"width="50"></li>
																								</ul>

											</div>
										</div>		
										<div class="forsale-grids">
											<h4><a href="shs.php">ShuttlerStop</a></h4>
											<div class="forsale1">
												<div class="forsale-left">
													<a href="shs.php"><img src="images/badminton/badminton.jpg" class="img-responsive" alt="/"></a>
												</div>
												<div class="forsale-right">
													<h5><label>800rs</label> Per Hour<span>Wooden indoor court</span></h5>
													<p>This is a Wooden indoor court.It has well polished wooden flooring.It is located at Baglur in Bangalore</p>
													<a href="shs.php"class="button4">more details</a>
												</div>
												<div class="clearfix"></div>
												<ul>
													<li><img src="images/par.png"height="50"width="50"></li>
													<li><img src="images/was.png"height="50"width="50"></li>
													<li><img src="images/water.jpg"height="50"width="50"></li>
																								</ul>


											</div>
										</div>	
										<div class="forsale-grids">
											<h4><a href="bda.php">Badminton Arena</a></h4>
											<div class="forsale1">
												<div class="forsale-left">
													<a href="bda.php"><img src="images/badminton/badminton-court-1286438.jpg" class="img-responsive" alt="/"></a>
												</div>
												<div class="forsale-right">
													<h5><label>800</label> Per hour<span> Wooden court</span></h5>
													<p>This is a Wooden court with duel wood flooring.It is located at Henur Bangalore.</p>
													<a href="bda.php"class="button4">more details</a>
												</div>
												<div class="clearfix"></div>
												<ul>
													<li><img src="images/par.png"height="50"width="50"></li>
													<li><img src="images/was.png"height="50"width="50"></li>
													<li><img src="images/water.jpg"height="50"width="50"></li>
																								</ul>

												</div>
											</div>
											
											
											<div class="forsale-grids">
											<h4><a href="kba.php">KBA</a></h4>
											<div class="forsale1">
												<div class="forsale-left">
													<a href="kba.php"><img src="images/badminton/dfd.jpg" class="img-responsive" alt="/"></a>
												</div>
												<div class="forsale-right">
													<h5><label>600rs</label>  per hour<span>Synthetic Court</span></h5>
													<p>This is a Synthetic Court located at MG Road Bangalore.It has a well maintained Synthetic flooring.</p>
													<a href="kba.php"class="button4">more details</a>
												</div>
												<div class="clearfix"></div>
												<ul>
													<li><img src="images/par.png"height="50"width="50"></li>
													<li><img src="images/was.png"height="50"width="50"></li>
													<li><img src="images/water.jpg"height="50"width="50"></li>
																								</ul>
											</div>
										</div>		

											<div class="forsale-grids">
											<h4><a href="lsm.php">Let's Smash</a></h4>
											<div class="forsale1">
												<div class="forsale-left">
													<a href="lsm.php"><img src="images/badminton/Badminton_0.jpg" class="img-responsive" alt="/"></a>
												</div>
												<div class="forsale-right">
													<h5><label>800</label> Per hour<span> Synthetic court</span></h5>
													<p>This is a Synthetic court with well maintained artificial turf.It is located at Airport road Bangalore.</p>
													<a href="lsm.php"class="button4">more details</a>
												</div>
												<div class="clearfix"></div>
												<ul>
													<li><img src="images/par.png"height="50"width="50"></li>
													<li><img src="images/was.png"height="50"width="50"></li>
													<li><img src="images/water.jpg"height="50"width="50"></li>
																								</ul>


											
						
													</div>											
									</div>
</div>

<!-- End Of Courts -->
								
										
								</div>
							</div>
						</div>
					</div>

<!-- End Of grid view -->

					<div class="col-md-3 properties-right">
						<div class="properties-top">
							<h4>Find Your Court</h4>
							<div class="yourplace">
								<h5>Prefered location</h5>
								<select class="sel2">
									<option value="">All Locations</option>
									<option value="">MG Road</option>
									<option value="">Ramamurthy nagar</option>
									<option value="">Dumlur</option>
									<option value="">Baglur</option>
									<option value="">Henur</option>

									<option value="">Airport Road</option>
								</select>
								<h5>Court Type</h5>
								<select class="sel2">
								    <option value="">All types</option>
									<option value="">Indoor</option>
									<option value="">Outdoor</option>
									
								</select>
							</div>
							
							<div class="search1">
							<form>
								<input type="submit" value="Search">
							</form>
							</div>
						</div>
											<div class="clearfix"></div>
				</div>
				</div>
			</div>
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
			<form method="post" action="logout.php">
											
											
											</form>
			<!-- //login -->
			
</body>
</html>