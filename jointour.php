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
<title>JOIN TOURNAMENT</title>
<!---css--->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!---css--->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Real Space Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
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
								<li class="active"><a href="index2.php">Home <span class="sr-only"></span></a></li>
																													<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery <span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a href="2columnsgallery.html">2 Columns Gallery</a></li>
												<li><a href="3columnsgallery.html">3 Columns Gallery</a></li>
												<li><a href="4columnsgallery.html">4 Columns Gallery</a></li>
											</ul>
									</li>


										<li><a href="tour.php">Main Page</a></li>
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
				
				<?php $conn = new mysqli("localhost","root","","courtside"); 
				$sql = "select * from host";
				$result=$conn->query($sql);
                   
				
				while($row = mysqli_fetch_assoc($result))
   				{
					echo "<form method='POST' action='treg.php'>";
				
				?>
					<table align="center" border="5" style="border-color:lightblue;background-color:lightblue;">
					<tr>
						<td height="400"width="600">		
						<img src="upload/<?php echo $row["broucherimg"]?> " height="400"width="600"  alt="/">
						<!--<center><a href="treg.php" class="button3 hvr-shutter-out-horizontal"><b>JOIN TOURNAMENT</b></a></center>-->
						</td>
							<td height="400"width="600">
							<table>
							<tr>
							<td colspan="2"><h3><center><b>TOURNAMENT DETAILS</b></center><br></td>
							</tr>
							<tr>
							<td><h3><center><b>Name</b></center><br></td>
							<td><input type="text" name="id" style="border-color:lightblue;background-color:lightblue;" value="<?php echo $row["turname"];?>" ></td></tr>
							<tr>
							<td><h3><center><b>Phone Number</b></center><br></td>
							<td><input type="text" name="ph" style="border-color:lightblue;background-color:lightblue;" value="<?php echo $row["phone"];?>" ></td></tr>
							<tr>
							<td><h3><center><b>Price</b></center><br></td>
							<td><input type="text" name="pr" style="border-color:lightblue;background-color:lightblue;" value="<?php echo $row["price"];?>" ></td></tr>
							<tr>
							<td><h3><center><b>Venue</b></center><br></td>
							<td><input type="text" name="ven" style="border-color:lightblue;background-color:lightblue;" value="<?php echo $row["Venue"];?>" ></td></tr>
							<tr>
							<td colspan="2"><b><center><input type="submit" value="JOIN TOURNAMENT" style="width:200px;height:50px;background-color:lightblue;color:white;"></center></b></td>
							</table>
								
                                
                                    </td>
                        
							</tr>
                           </table>
                            <br>
						 
                   
                    <?php 
					echo"</form>";
                } 
                    ?>
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
			
			<!-- //login -->
			<!-- Register -->
			
			<!-- //Register -->

</body>
</html>