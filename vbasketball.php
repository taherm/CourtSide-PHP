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
<title>Update stock</title>
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
							<li><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i><a href="adlogout.php">Logout</a></li>
							
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
								<h1><a href="index1.php"><span>Court</span>Side</a></h1>
</a>
							</div>
						</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li class="active"><a href="stkdet.php">Home <span class="sr-only"></span></a></li>
																													


										<li><a href="addstk.php">Add Stock</a></li>
										<li><a href="viewstk.php">View Stock</a></li>
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
												<li><a href="vswim.php">Swimming</a></li>
											</ul>	
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
			
					
				</form>														
						<br>
						<center><table border="5"frame="box" width="800"height="600"style="border-color:gray;background-color:lightblue;border-width:12px 2;"></center>
						<tr>
						<th><h3><center><b>Customer Name</b><center></h3></th>
						<th><h3><center><b>Court Name</b><center></h3></th>
						<th><h3><center><b>Phone Number</b><center></h3></th>
						<th><h3><center><b>Price</b><center></h3></th>
						<th><h3><center><b>E-mail Id</b><center></h3></th>
						<th><h3><center><b>Slot</b><center></h3></th>
						<th><h3><center><b>Booked Date</b><center></h3></th>
                            <th><h3><center><b>Booked Id</b><center></h3></th>
						</tr>
						
						<?php
								$conn = new mysqli("localhost","root","","courtside"); 
								$sql="select * from basketball";
								$res=$conn->query($sql);
									
										if ($res->num_rows>0) {
									while($row = $res->fetch_array())
									{
								echo"<tr><h3><center><td>".$row['custname']."</td></center></h3><h3><center><td>".$row['courtname']."</td></center></h3><h3><center><td>".$row['phoneno']."</td></center></h3><h3><center><td>".$row['price']."</td></center></h3><h3><center><td>".$row['email']."</td></center></h3><h3><center><td>".$row['slot']."</td></center></h3><h3><center><td>".$row['bkdate']."</td></center></h3><h3><center><td>".$row['bk_id']."</td></center></h3></tr>";
									}
								}
									else{
										
									
								?>
								<script>
								alert("Could not retive the data....");
								window.location="purdet.php";
								</script>
								<?php
									}
									?>
						
						</table>
					 <br>
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