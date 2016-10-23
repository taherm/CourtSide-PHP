
   <?php 
  error_reporting(0);
								$mysqli=new mysqli("localhost","root","","courtside");
								if(empty($_POST['tnm']) || empty($_POST['nm']) || empty($_POST['eid']) || empty($_POST['phno']) )
								{
						
								?>
								<script>
								alert("ENTER ALL DETAILS..... ");
								window.location="treg.php";
							
								</script>
								<?php
									}
									else
									{
										$tourname=$_POST['tnm'];
										$tname=$_POST['nm'];
										$email=$_POST['eid'];
										$phone=$_POST['phno'];
										
										$sql="select * from host where turname='$tourname' ";
										$res=$mysqli->query($sql);
	

										if ($res->num_rows>0) 
										
										{
											$sql1="INSERT INTO jointour(tourname,teamname,email,phno) VALUES ('$tourname','$tname','$email','$phone')";
											
											$data = $mysqli->query($sql1);
											
											if($data)
											{
												$to = $email;
												$subject = "CourtSide";
												$txt = "Hello,$tname your Registration on courtside is completed..You have now been registered for $tourname ..!!Thankyou for using CourtSide..!!";
												$headers = "From: vickyvignesh170@gmail.com" . "\r\n" .
												"CC:";
												$g=mail($to,$subject,$txt,$headers);
												if($g)
												echo"mail sent";
												else
												echo "mail not sent";
												session_start(); 
												$_SESSION['tourname']=$tourname;
												session_start(); 
												$_SESSION['teamname']=$tname;
									?>
						
								
								<script>
								alert("YOUR REGISTRATION HAS BEEN COMPLETED..... ");		
								//window.open('joinprint.php');
								window.location="joinprint.php";
								
								</script>
								<?php
											}
											else										
											{
								?>
								<script>
								alert("BOOKING COULD NOT BE COMPLETED..... ");
								window.location="treg.php";
							
								</script>
								<?php
											}	
									
										}
										else
										{
								?>
								<script>
								alert("BOOKING COULD NOT BE COMPLETED..... ");
								window.location="treg.php";
							
								</script>
								<?php
										}	
									}
									
									
								?>