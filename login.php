<?php
	session_start(); 
	if(empty($_POST['em']) || empty($_POST['pwd']))
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
		
		$username=$_POST['em'];
		$password=$_POST['pwd'];
		
		$mysqli=new mysqli("localhost","root","","courtside");
		
		$sql="select * from courtlogin where password='$password' AND username='$username'";
		$res=$mysqli->query($sql);
	

		if ($res->num_rows>0) {

		
			$_SESSION['login_user']=$username; // Initializing Session
			header("location:index2.php"); // Redirecting To Other Page
		}
		else {
			?>
<script>
	alert("Username or Password is invalid");
	window.location='index1.php';
</script>
		<?php
			
			session_destroy();
			//header("location:index1.php");
	}

	}

?>