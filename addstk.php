
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
<title>Add stock</title>
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
                                                <li><a href="vswim.php">Swimming</a></li></ul>
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
				
			
				  
				
				
                   
				
				
				
					<h1><b><center>Add New Stock</center></b></h1>
			
			<div class="contact-me" >
			<form action="" method="post" enctype="multipart/form-data">
			<table  height="600" align="center" frame="box" style="border-color:gray;background-color:lightblue;border-width:12px 2;">
			
			
			
			</tr>
			<tr>
			<th width="600" height="50"><h3><center><b>STOCK NAME</b></center></h3></th>
			<td width="600" height="50"><center><input type="text" name="nm"id="name"style="width:500px;background-color:white"onblur="javascript:valname(this.value)"></center></td>
			</tr>
			<tr>
			<th width="600" height="50"><h3><center><b>STOCK ID</b></center></h3></th>
			<td width="600" height="50"><center><input type="text" name="sid"id="sid"style="width:500px;background-color:white"onblur="javascript:valfee(this.value)"></center></td>
			</tr>
			
			<tr>
			<th width="600" height="50"><h3><center><b>QUANTITY<b></center></h3></th>
			<td width="600" height="50"><center><input type="text" name="qn"id="qn" maxlength="10"style="width:500px;background-color:white"onblur="javascript:valq(this.value)"></center></td>
			</tr>
			<tr>
			<th width="600" height="50"><h3><center><b>Price<b></center></h3></th>
			<td width="600" height="50"><center><input type="text" name="pr"id="pr" maxlength="10"style="width:500px;background-color:white"onblur="javascript:valpr(this.value)"></center></td>
			</tr>
			<tr>
			<th width="600" height="50"><h3><center><b>UPLOAD PRODUCT IMGAGE<b><center></h3></th>
			<td width="600" height="150"><html>

				Select image to upload:
			<input type="file" name="cimage" id="cimage" >
			
			<?php
		if(isset($_POST["submit"]))
		{
			$conn =new mysqli("localhost","root","","courtside");
			$sname=$_POST['nm'];
			$sid=$_POST['sid'];
			$qan=$_POST['qn'];
			$price=$_POST['pr'];
			//$venue=$_POST['venue'];
			#$torname=$_POST['cimage'];
			
    if(isset($_FILES['cimage'])){
      $errors= array();
      $file_name = $_FILES['cimage']['name'];
      $file_size =$_FILES['cimage']['size'];
      $file_tmp =$_FILES['cimage']['tmp_name'];
      $file_type=$_FILES['cimage']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['cimage']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
       
	    $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 330971520){         
		$errors[]="File size must be excately 2 MB";
      }
      
      if(empty($errors)==true){
        if(move_uploaded_file($file_tmp,"./stock/".$file_name))
		{
		echo "Success";			
   		$sql = "INSERT INTO `stock`(`proid`, `proname`, `stock`, `proimg`, `price`) VALUES ($sid,'$sname','$qan','$file_name','$price')";
		$result = $conn->query($sql);
		}
         else{
			 echo"File size must be less than 2 MB";			 
      }
	  }
      else {
         print_r($errors);
      }
   



	}
		
		}

     
         
    
?>

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
function valfee(phno)
{	
   var pattern=(/^[0-9]*$/);
if(!pattern.test(phno))
{
alert("Stock Id should only be Numeric value");
//window.location="ss.php";
document.getElementById("sid").value = "";
 document.getElementById("sid").focus();
}

}
function valq(phno)
{
	
   var pattern=(/^[0-9]*$/);
if(!pattern.test(phno))
{
alert("Quantity should only be Numeric value");
document.getElementById("qn").value = "";
 document.getElementById("qn").focus();
}

}
function valpr(phno)
{
	
   var pattern=(/^[0-9]*$/);
if(!pattern.test(phno))
{
alert("Price should only be Numeric value");
document.getElementById("pr").value = "";
 document.getElementById("pr").focus();
}

}
   </script>
			<tr>
			<td width="600" height="50"><center>
			 <input type="submit" value="ADD" name="submit"></center></td>
			<td width="600" height="50"><center><input type="reset" value="CLEAR" >	</center>	
			</td>
			</tr>
			</table>
			
			</div>
			<br>
						 
                 
					</div>			
				</form>														
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