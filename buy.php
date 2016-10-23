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
<title>buy </title>
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
								<h1><a href="index.html"><span>Court</span>Side</a></h1>
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


										<li><a href="gears.php">Main Page</a></li>
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
		<?php 
		error_reporting(0);
			
			$pname=$_POST['pnm'];
			$price=$_POST['pr'];
			$conn = new mysqli("localhost","root","","courtside"); 
			$pid=$_POST['id'];
										

?>
			<h1><b><center>BUY GEAR</center></b></h1>
			
			<div class="contact-me" >
			<form action="buydb.php" method="post" enctype="multipart/form-data">
			<table  height="600" align="center" frame="box" style="border-color:gray;background-color:lightblue;border-width:12px 2;">
			<tr>
			<th colspan="2"width="600" height="50"><h3><center><b>FILL IN THE DETAILS</b></center></h3></th>
			</tr>
			<tr>
			<th width="600" height="50"><h3><center><b>Customer Name<b></center></h3></th>
			<td width="600" height="50"><center><input type="text" name="tnm" id="tm" style="width:500px;background-color:white"onblur="javascript:valname(this.value)" ></center></td>
			
			</tr>
			<tr>
			<th width="600" height="50"><h3><center><b>Phone Number</b></center></h3></th>
			<td width="600" height="50"><center><input type="text" name="phno"id="name"maxlength="10"style="width:500px;background-color:white"onblur="javascript:valphno(this.value)"></center></td>
			</tr>
			<tr>
			<th width="600" height="50"><h3><center><b>EMAIL ID<b></center></h3></th>
			<td width="600" height="50"><center><input type="text" name="eid"id="em"style="width:500px;background-color:white"onblur="javascript:valemail(this.value)"></center></td>
			</tr>
			<tr>
			<th width="600" height="50"><h3><center><b>Product Name<b></center></h3></th>
			<td width="600" height="50"><center><input type="text" name="pnm" id="ph" style="width:500px;background-color:white"value="<?php echo $pname?>"readonly></center></td>
			</tr>
			<tr>
			<th width="600" height="50"><h3><center><b>Product Id<b></center></h3></th>
			<td width="600" height="50"><center><input type="text" name="pid" id="ph" style="width:500px;background-color:white"value="<?php echo $pid?>"readonly></center></td>
			</tr>
			<tr>
			<th width="600" height="50"><h3><center><b>Product Price<b></center></h3></th>
			<td width="600" height="50"><center><input type="text" name="pp"id="ph" style="width:500px;background-color:white"value="<?php echo $price?>"readonly></center></td>
			</tr>
			<tr>
			<th width="600" height="50"><h3><center><b>Quantity<b></center></h3></th>
			<td width="600" height="50"><center><input type="text" name="qn"id="ph" maxlength="10"style="width:500px;background-color:white"onblur="javascript:valfee(this.value)"></center></td>
			</tr>
			
		<!--	<tr>
			<th width="600" height="50"><h3><center><b>ENTRY FEE<b></center></h3></th>
			<td width="600" height="50"><center><input type="text" name="price"id="ef"style="width:500px;background-color:white"disabled></center></td>
			</tr>
			<tr>
			<th width="600" height="50"><h3><center><b>Venue<b><center></h3></th>
			<td width="600" height="50"><center><input type="text" name="venue"id="ven" style="width:500px;background-color:white"disabled></center></td>
			</tr>-->
			<tr>
			<td width="600" height="50"><center>
			 <input type="submit" value="BUY" name="submit"></center></td>
			<td width="600" height="50"><center><input type="reset" value="CLEAR" >	</center>	
			</td>
			</tr>
			</table>
			</form>
			</div>
			<br>
			<script>
			
			function theFocus() {
    document.getElementById("tm").title="Message";
}
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
function valven(name)
{
	
   var pattern=/[^a-z|^A-Z|^\s]/;
if(pattern.test(name))
{
alert("Only alphabets from a-z and A-Z are allowed");
document.getElementById("name").focus();
document.getElementById("ven").value = "";

//window.location="ss.php";
}

}
function valtname(name)
{
	
   var pattern=/[^a-z|^A-Z|^\s]/;
if(pattern.test(name))
{
alert("Only alphabets from a-z and A-Z are allowed");
document.getElementById("tm").focus();
document.getElementById("tm").value = "";

//window.location="ss.php";
}

}
function valadd(name)
{
	
   var pattern=/[^0-9][^a-z|^A-Z|^\s]/;
if(pattern.test(name))
{
alert("Enter Valid Address");
document.getElementById("add").focus();
document.getElementById("add").value = "";

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
function valfee(phno)
{	
   var pattern=(/^[0-9]*$/);
if(!pattern.test(phno))
{
alert("Enter Valid Amount");
//window.location="ss.php";
document.getElementById("ph").value = "";
 document.getElementById("ph").focus();
}

}

 </script>	
			
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
				