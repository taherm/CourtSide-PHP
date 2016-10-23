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
<title>Football courts </title>
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
							<div id="eleven">
							<div class="forsale-grids">
							
											<h4><a href="ss.php">Soccer City</a></h4>
											<div class="forsale1">
												<div class="forsale-left">
													<a href="ss.php"><img src="images/football/Soft-Surfaces-002.jpg" class="img-responsive" alt="/"></a>
												</div>
												<div class="forsale-right">
													<h5><label>2500rs</label>  per hour<span>  11-aside court</span></h5>
													<p>This is a 11-aside football court located at Marathhalli Bangalore.It has a well maintained european artificial turf.</p>
													<a href="#"class="button4">more details</a>
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
											<h4><a href="kog.php">Kicks on Grass</a></h4>
											<div class="forsale1">
												<div class="forsale-left">
													<a href="kog.php"><img src="images/football/fc.jpg" class="img-responsive" alt="/"></a>
												</div>
												<div class="forsale-right">
													<h5><label>2000rs</label> per hour 11-aside court</span></h5>
													<p>This is a 11-aside football court.It is well maintained with artificial turf.It is situated at bellendur Bangalore</p>
													<a href="#"class="button4">more details</a>
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
											<h4><a href="letsplay.php">Let's Play</a></h4>
											<div class="forsale1">
												<div class="forsale-left">
													<a href="letsplay.php"><img src="images/football/WoodsidePark-SoccerFields.jpg" class="img-responsive" alt="/"></a>
												</div>
												<div class="forsale-right">
													<h5><label>2500rs</label> Per <span>hour 5-aside court</span></h5>
													<p>This is a 5-aside football court.It is well maintained with duel colour artificial turf.It is situated at Ramamurthy nagar Bangalore</p>
													<a href="#"class="button4">more details</a>
												</div>
												<div class="clearfix"></div>
												<ul>
													<li><img src="images/par.png"height="50"width="50"></li>
													<li><img src="images/was.png"height="50"width="50"></li>
													<li><img src="images/water.jpg"height="50"width="50"></li>
																								</ul>

											</div>
										</div>		
										</div> <!-- 11 aside -->
										
										<div id="five">
										<div class="forsale-grids">
											<h4><a href="xlr.php">Xlr8</a></h4>
											<div class="forsale1">
												<div class="forsale-left">
													<a href="xlr.php"><img src="images/football/Turf-Field.jpg" class="img-responsive" alt="/"></a>
												</div>
												<div class="forsale-right">
													<h5><label>1000rs</label> Per Hour<span>5-aside indoor court</span></h5>
													<p>This is a 5-aside indoor football court.It has mat turf with nets around.Football studs can't be woren only trainers or sports shoes.It is located at Baglur in Bangalore</p>
													<a href="#"class="button4">more details</a>
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
											<h4><a href="fn.php">Football Nation</a></h4>
											<div class="forsale1">
												<div class="forsale-left">
													<a href="fn.php"><img src="images/football/dsd.jpg" class="img-responsive" alt="/"></a>
												</div>
												<div class="forsale-right">
													<h5><label>800</label> Per hour<span> 5-aside football court</span></h5>
													<p>This is a 5-aside football court with well maintained artificial turf.It is located at Tc palya Bangalore.</p>
													<a href="#"class="button4">more details</a>
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
											<h4><a href="nama.php">Namma Greens</a></h4>
											<div class="forsale1">
												<div class="forsale-left">
													<a href="nama.php"><img src="images/football/nama.jpg" class="img-responsive" alt="/"></a>
												</div>
												<div class="forsale-right">
													<h5><label>1000</label> Per hour<span> 5-aside football court</span></h5>
													<p>This is a 5-aside football court with well maintained artificial turf.It is located at Airport road Bangalore.</p>
													<a href="#"class="button4">more details</a>
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
								<select class="sel2" name="sel1">
									<option value="">All Locations</option>
									<option value="">Marathalli</option>
									<option value="">Ramamurthy nagar</option>
									<option value="">Bellendur</option>
									<option value="">Baglur</option>
									<option value="">Tc palya</option>
									<option value="">Airport Road</option>
								</select>
								<h5>Court Type</h5>
								<select class="sel2" name="sel2">
								    <option value="all">All types</option>
									<option value="five">5-aside</option>
									<option value="eleven">11-aside</option>
									
								</select>
							</div>
							
							<div class="search1">
							<form method="post" action="search.php">
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