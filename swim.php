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
<title>Swimming Pools </title>
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
				<h2>View Pools</h2>
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
											<h4><a href="bits.php">Bits Club</a></h4>
											<div class="forsale1">
												<div class="forsale-left">
													<a href="bits.php"><img src="images/pools/image.jpg" class="img-responsive" alt="/"></a>
												</div>
												<div class="forsale-right">
													<h5><label>300rs</label> per hour Outdoor pool </span></h5>
													<p>This pool ranges from 3 feet to 8 feet .It is well maintained clean pool.It is situated at Henur Bangalore</p>
													<a href="bits.php"class="button4">more details</a>
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
											<h4><a href="ksa.php">KSA</a></h4>
											<div class="forsale1">
												<div class="forsale-left">
													<a href="ksa.php"><img src="images/pools/thghhj.jpg" class="img-responsive" alt="/"></a>
												</div>
												<div class="forsale-right">
													<h5><label>200rs</label> Per <span>hour Indoor pool</span></h5>
													<p>This is a Indoor pool.It ranges from 3 feet to 12 feet.It is situated at Sivajinagar Bangalore</p>
													<a href="ksa.php"class="button4">more details</a>
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
											<h4><a href="swma.php">Swimmer's Arena</a></h4>
											<div class="forsale1">
												<div class="forsale-left">
													<a href="swma.php"><img src="images/pools/435.jpg" class="img-responsive" alt="/"></a>
												</div>
												<div class="forsale-right">
													<h5><label>400rs</label> Per Hour<span> Indoor pool</span></h5>
													<p>This is a Indoor pool.It ranges from 4 feet to 10 feet .It is located at Koramangla in Bangalore</p>
													<a href="swma.php"class="button4">more details</a>
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
											<h4><a href="bws.php">BWS Club</a></h4>
											<div class="forsale1">
												<div class="forsale-left">
													<a href="bws.php"><img src="images/pools/1E.jpg" class="img-responsive" alt="/"></a>
												</div>
												<div class="forsale-right">
													<h5><label>400</label> Per hour<span> Outdoor pool</span></h5>
													<p>This is a Outdoor pool.It ranges from 3 feet to 7 feet.It is located at Hebal Bangalore.</p>
													<a href="bws.php"class="button4">more details</a>
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
											<h4><a href="dol.php">Dolphin Club</a></h4>
											<div class="forsale1">
												<div class="forsale-left">
													<a href="dol.php"><img src="images/pools/gjhj.jpg" class="img-responsive" alt="/"></a>
												</div>
												<div class="forsale-right">
													<h5><label>400rs</label>  per hour<span>Outdoor pool</span></h5>
													<p>This is a Outdoor pool ranging from 3 feet to 8 feet.It is located at MG Road Bangalore.</p>
													<a href="dol.php"class="button4">more details</a>
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
											<h4><a href="ocean.php">Oceans Club</a></h4>
											<div class="forsale1">
												<div class="forsale-left">
													<a href="ocean.php"><img src="images/pools/swimming-pool.jpg" class="img-responsive" alt="/"></a>
												</div>
												<div class="forsale-right">
													<h5><label>300</label> Per hour<span> Outdoor pool</span></h5>
													<p>This is a Outdoor pool ranging from 3 feet to 9 feet.It is located at White Feild Bangalore.</p>
													<a href="ocean.php"class="button4">more details</a>
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
									<option value="">Koramangla</option>
									<option value="">Dumlur</option>
									<option value="">Hebal</option>
									<option value="">Henur</option>

									<option value="">White Feild</option>
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