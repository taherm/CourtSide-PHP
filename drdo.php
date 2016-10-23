
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
<title>Basketball courts </title>
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
		<!---header--->
		<!---banner--->
		
			<div class="container">
			
				<h2><b>DRDO</b></h2>
				</div>
			
		
		<!---banner--->
		<div class="content">
			<div class="properties-section">
				<div class="container">
				<div class="properties-grids">
					<div class="col-md-9 properties-left">
						<div class="flexslider">
							<ul class="slides">
								<li data-thumb="images/basketball/45-indoor.jpg">
									<div class="thumb-image"> <img src="images/basketball/45-indoor.jpg" data-imagezoom="true" class="img-responsive"> </div>
								</li>
								<li data-thumb="images/basketball/45-indoor1.jpg">
									 <div class="thumb-image"> <img src="images/basketball/45-indoor1.jpg" data-imagezoom="true" class="img-responsive"> </div>
								
								
								</li>
							</ul>
						</div>
						<div class="clearfix"></div>
						<div class="properties-details">
							<div class="col-md-2 properties-detail">
								<h5><span>94</span> ft length</h5>
							</div>
							<div class="col-md-2 properties-detail">
								<h5><span>50</span> ft width</h5>
							</div>
							<div class="col-md-2 properties-detail">
								<h5><span>10</span>ft hoops</h5>
							</div>
							<div class="col-md-2 properties-detail">
								<h5><span>2</span> parking</h5>
							</div>
							<div class="col-md-2 properties-detail">
								<h5>Washroom</h5>
							</div>
							<div class="col-md-2 properties-detail">
								<a href="javascript:window.print()"> print</a>
							</div>
							<div class="clearfix"></div>
						</div>
						<p>This is a indoor basketball court located at ITPL Bangalore.It has a well maintained artificial surface..It cost 1000 per hour.It was started in the year 2010.The owner of the soccer city is Karthik Naidu </p>
					
							<div class="contact-me">
							<h4>Book Court</h4>
							<form method="post" action="baskdb.php">
								<table  height="600" align="center" frame="box" style="border-color:gray;background-color:lightblue;border-width:12px 2;">
								<tr>
			<th colspan="2"width="600" height="50"><h3><center><b>FILL UP THE DETAILS</b></center></h3></th>
			</tr>
								<tr>
			<th width="600" height="50"><h3><center>Name</center></h3>
			</th>
			<th width="600" height="50"><input type="text"name="txt1" id="name"style="width:500px;background-color:white"
			onblur="javascript:valname(this.value)"></th>
			</tr>
			<tr>
					<th width="600" height="50"><h3><center>E-mail Id</center></h3></th>
					<th width="600" height="50"><input type="email"name="txt2"id="em"style="width:500px;background-color:white"onblur="javascript:valemail(this.value)" ></th>
					</tr>
					<tr>
					<th width="600" height="50"><h3><center>Phone number</center></h3></th>
					<th width="600" height="50"><input type="text" name="txt3"id="ph"  maxlength="10"style="width:500px;background-color:white" onblur="javascript:valphno(this.value)"></th>
					</tr>
					<tr>
					<th width="600" height="50"><h3><center>Date</center></h3></th>
					<th width="600" height="50"><input type="date" name="date" id="date" style="width:500px;background-color:white"></th>
					</tr>			
					<tr>			
					<th width="600" height="50"><h3><center>Choose Slot</center></h3><br></th>
								
							<th width="600" height="50">	<select style="width:200px;height:30px;"name="slot">
								<option>6-7 AM</option>
								<option>7-8 AM</option>
								<option>8-9 AM</option>
								<option>9-10 AM</option>
								<option>4-5 PM</option>
								<option>5-6 PM</option>
								<option>6-7 PM</option>
								<option>7-8 PM</option>
								<option>8-9 PM</option>
								<option>9-10 PM</option>
								<option>10-11 PM</option>
								<option>11-12 PM</option>
								</select><br><br><br>
								<br></th>
					</tr>
					<tr>	
								<th width="600" height="50"><center><input type="submit" value="Submit"style="width:100px" ></center></th>
								<th width="600" height="50"><center><input type="reset" value="Clear"style="width:100px" ></center></th>
								</tr>
					</table>
								<input type="text" name="txt6" value="1" style="display:none">
								<input type="text" name="txt0" value="drdo" style="display:none">
								<input type="text" name="txt4" value="1000" style="display:none">
								</form>
							
							<script>
function valname(name)
{
	
   var pattern=/[^a-z|^A-Z|^\s]/;
if(pattern.test(name))
{
alert("Only alphabets from a-z and A-Z are allowed");
document.getElementById("name").focus();
document.getElementById("name").value = "";

//window.location="ss.php";
}

}
function valemail(email)
{
	
   var pattern=/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

if(!pattern.test(email))
{
alert("Enter valid E-mail ID");
//window.location="ss.php";
document.getElementById("em").value = "";
 document.getElementById("em").focus();
}
}
function valphno(phno)
{
	
   var pattern=(/^\d{10}$/);
if(!pattern.test(phno))
{
alert("Enter Valid Phone Number");
//window.location="ss.php";
document.getElementById("ph").value = "";
 document.getElementById("ph").focus();
}

}

 </script>
							
						</div>
						<div class="contact-me">
						<h4>Cancel Booking</h4>
						<form method="post" action="bascan.php">
						<table  height="300" align="center" frame="box" style="border-color:gray;background-color:lightblue;border-width:12px 2;">
								<tr>
						<th colspan="2"width="600" height="50"><h3><center><b>You can cancel your booking here</b></center></h3></th>
						</tr>
						<tr>
						<th width="600" height="50"><center>
						<h3>Enter Booking ID</center></th>
						
						<th  width="600" height="50"align="center"><center>
						<input type="text" name="bkid" style="width:300px;background-color:white"></center></th>
						</tr>
						<tr>
						<th  width="600" height="50"><center><input type="submit" value="Submit"style="width:100px" ></center></th>
						<th width="600" height="50"><center><input type="reset" value="Clear"style="width:100px"></center></th>
						</tr>
						</table>
						<input type="text" name="txt0" value="drdo" style="display:none">
						<input type="text" name="txt6" value="1" style="display:none"><br><br>
						
						</form>
						</div>
						
						<div class="idxpress-top">
						<h3><b>View Routes</b></h3>
								<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:440px;width:700px;'><div id='gmap_canvas' style='height:440px;width:700px;'></div><div><small><a href="http://embedgooglemaps.com">									embed google maps							</a></small></div><div><small><a href="http://www.proxysitereviews.com/">proxy sites</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(13.021648377105311,77.72944300058587),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(13.021648377105311,77.72944300058587)});infowindow = new google.maps.InfoWindow({content:'<strong>DRDO</strong><br>itpl,banglore,india<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
							</div>
						</div>
						</div>
						<div class="col-md-3 properties-right">
						<div class="properties-top">
							<h4>Karthik</h4>
							<img src="images/t1.png" class="img-responsive" alt=""/>
							<ul class="">
								<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i> Office : 080-24857349</li>
								<li><i class="glyphicon glyphicon-phone" aria-hidden="true"></i> Mobile : 9847634521</li>
								<li><i class="glyphicon glyphicon-print" aria-hidden="true"></i> Fax : 0091-789-456100</li>
							</ul>
							</div>
							<div>
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