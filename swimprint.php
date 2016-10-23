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
<title>Booking details</title>
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
			
			<!-- cdn for modernizr, if you haven't included it already -->
<script src="http://cdn.jsdelivr.net/webshim/1.12.4/extras/modernizr-custom.js"></script>
<!-- polyfiller file to detect and load polyfills -->
<script src="http://cdn.jsdelivr.net/webshim/1.12.4/polyfiller.js"></script>
<script>
  webshims.setOptions('waitReady', false);
  webshims.setOptions('forms-ext', {types: 'date'});
  webshims.polyfill('forms forms-ext');
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
			<h1><center><b>BOOKING DETAILS</b></center></h1>
		<!---header--->
<?php
//session_start();
$bkid=$_SESSION['myid'];
$mysqli=new mysqli("localhost","root","","courtside");
$sql="select * from swim where bk_id='$bkid'";
									$res=$mysqli->query($sql);
	

									if ($res->num_rows>0) {	
									
									while($row = $res->fetch_array())
    {
    $crt =$row['courtname'];
    $name =$row['custname'];
    $phno =$row['phoneno'];  
	$em =$row['email'];
	$slot =$row['slot'];
    $bkd =$row['bkdate'];
	$price =$row['price'];
	//$bkid =$row['bk_id'];  	
} 
									}
									else 
									{
										?>
										<script>
								alert("PLEASE ENTER CORRECT BOOKING ID..... ");
								window.location="swim.php";
							
								</script>
										<?php
									}
?>
<table width="50%" align="center" border="5"style="background-color:lightblue;">
<tr>
<th width="300"height="70"><center>COURT NAME</center></th>
<td width="300"height="70"><center><input type="text" name="cn" style="width:300px;background-color:lightblue;"value="<?php echo $crt;?>"  disabled></center></td>
</tr>
<tr>
<th width="300"height="70"><center>CUSTOMER NAME</center></th>
<td width="300"height="70"><center><input type="text" name="name"style="width:300px;background-color:lightblue;width:300;"value="<?php echo $name;?>"  disabled></center></td>
</tr>
<tr>
<th width="300"height="70"><center>PHONE NO</center></th>
<td width="300"height="70"><center><input type="text" name="ph" style="width:300px;background-color:lightblue;"value="<?php echo $phno;?>" disabled></center></td>
</tr>
<tr>
<th width="300"height="70"><center>EMAIL<center></th>
<td width="300"height="70"><center><input type="text" name="em"style="width:300px;background-color:lightblue;" value="<?php echo $em;?>"  disabled></center></td>
</tr>
<tr>
<th width="300"height="70"><center>SLOT</center></th>
<td width="300"height="70"><center><input type="text" name="sl" style="width:300px;background-color:lightblue;" value="<?php echo $slot;?>" disabled></center></td>
</tr>
<tr>
<th width="300"height="70"><center>BOOKING DATE</center></th>
<td width="300"height="70"><center><input type="text" name="bd"style="width:300px;background-color:lightblue;" value="<?php echo $bkd;?>"  disabled></center></td>
</tr>
<tr>
<th width="300"height="70"><center>PRICE</center></th>
<td width="300"height="70"><center><input type="text" name="pr" style="width:300px;background-color:lightblue;" value="<?php echo $price;?>" disabled></center></td>
</tr>
<tr>
<th width="300"height="70"><center>BOOKING ID</center></th>
<td width="300"height="70"><center><input type="text" name="id" style="width:300px;background-color:lightblue;" value="<?php echo $bkid;?>" disabled></center></td>
</tr>

<tr>
<th colspan="2" width="300"height="70"><a href="javascript:window.print()"><b><center> PRINT</center></b></a></th>

</tr>
</table>
</form>
<br>

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