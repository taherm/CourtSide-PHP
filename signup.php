<?php
if(empty($_POST['nem']) || empty($_POST['npass']) || empty($_POST['nm']))
		{
		?>
<script>
		alert("Please enter Username or Password ");
			  window.location="index1.php";
</script>
<?php
	}
else
	{
		
		$username=$_POST['nem'];
		
		
		$mysqli=new mysqli("localhost","root","","courtside");
		
		$sql="select * from courtlogin where username='$username'";
		$res=$mysqli->query($sql);
	
		if ($res->num_rows>0)
			{
		?>
		<script>
		alert("Username alredy exists..try another UserName ");
			  window.location="index1.php";
		</script>
<?php
		}
		
		else {

	//$userName = $_POST['nem'];
	$name = $_POST['nm'];
	$password =  $_POST['npass'];
	$sql = "INSERT INTO courtlogin (username,password,name) VALUES ('$username','$password','$name')";
	$data = $mysqli->query($sql);
	if($data)
	{
	
?>
<script>
		alert("YOUR REGISTRATION IS COMPLETED...");
			  window.location="index1.php";
</script>
<?php
		}
	}
	}
	
?>

