<!-- php code for storing -->
								<?php
								$courtid=$_POST['txt6'];
								$flag=0;
								$courtname=$_POST['txt0'];
									$name=$_POST['txt1'];
									$email=$_POST['txt2'];
									$phno=$_POST['txt3'];
									$dt=$_POST['date'];
									$slot=$_POST['slot'];
									$price=$_POST['txt4'];
								$id=rand(10,1000);
								$mysqli=new mysqli("localhost","root","","courtside");
								while($flag==0)
								{
								$sql="select * from football where bk_id='$id'";
									$res=$mysqli->query($sql);
	

									if ($res->num_rows>0) {	
										$flag=0;
										$id=rand(10,1000);
																	
									}
									else
									{
										$flag=1;
									}
								}
								
								$dt=$_POST['date'];
								$slot=$_POST['slot'];
								if(empty($name) || empty($email) || empty($phno) || empty($slot) || empty($dt))
								{
								if($courtid=='1')
									{
								?>
								<script>
								alert("ENTER ALL DETAILS..... ");
								window.location="ss.php";
							
								</script>
								<?php
									}
									else if($courtid=='2')
									{
										?>
										<script>
								alert("ENTER ALL DETAILS..... ");
								window.location="kog.php";
								</script>
								<?php
									}
									else if($courtid=='3')
									{
										?>
										<script>
								alert("ENTER ALL DETAILS..... ");
								window.location="letsplay.php";
								</script>
								<?php
									}
									else if($courtid=='4')
									{
										?>
										<script>
								alert("ENTER ALL DETAILS..... ");
								window.location="xlr.php";
								</script>
								<?php
									}
									else if($courtid=='5')
									{
										?>
										<script>
								alert("ENTER ALL DETAILS..... ");
								window.location="fn.php";
								</script>
								<?php
									}
									else if($courtid=='6')
									{
										?>
										<script>
								alert("ENTER ALL DETAILS..... ");
								window.location="nama.php";
								</script>
								<?php
									}
									else
									{
										
									}
								}
								else
								{
									
									//$loc=$_POST['txt5'];
		
									$sql="select * from football where courtname='$courtname' AND slot='$slot' AND bkdate='$dt'";
									$res=$mysqli->query($sql);
	

									if ($res->num_rows>0) {									
									
									if($courtid=='1')
									{
								?>
								<script>
								alert("THIS SLOT HAS ALREADY BEEN BOOKED TRY ANOTHER SLOT..... ");
								window.location="ss.php";
								</script>
								<?php
									}
									else if($courtid=='2')
									{
										?>
										<script>
								alert("THIS SLOT HAS ALREADY BEEN BOOKED TRY ANOTHER SLOT..... ");
								window.location="kog.php";
								</script>
								<?php
									}
									else if($courtid=='3')
									{
										?>
										<script>
								alert("THIS SLOT HAS ALREADY BEEN BOOKED TRY ANOTHER SLOT..... ");
								window.location="letsplay.php";
								</script>
								<?php
									}
									else if($courtid=='4')
									{
										?>
										<script>
								alert("THIS SLOT HAS ALREADY BEEN BOOKED TRY ANOTHER SLOT..... ");
								window.location="xlr.php";
								</script>
								<?php
									}
									else if($courtid=='5')
									{
										?>
										<script>
								alert("THIS SLOT HAS ALREADY BEEN BOOKED TRY ANOTHER SLOT..... ");
								window.location="fn.php";
								</script>
								<?php
									}
									else if($courtid=='6')
									{
										?>
										<script>
								alert("THIS SLOT HAS ALREADY BEEN BOOKED TRY ANOTHER SLOT..... ");
								window.location="nama.php";
								</script>
								<?php
									}
									else
									{
										
									}
								}
									else
									{
										$sql1="INSERT INTO football (courtname,custname,phoneno,email,slot,bkdate,price,bk_id) VALUES ('$courtname','$name','$phno','$email','$slot','$dt','$price','$id')";
										$data = $mysqli->query($sql1);
										if($data)
											{
																							
												$to = $email;
												$subject = "CourtSide";
												$txt = "Hello,$name your booking on courtside is completed..Your booking Id is $id and your slot is $slot in $courtname.Booking charges is $price..!!Thankyou for using CourtSide..!!";
												$headers = "From: vickyvignesh170@gmail.com" . "\r\n" .
												"CC:";
												$g=mail($to,$subject,$txt,$headers);
												if($g)
												echo"mail sent";
												else
												echo "mail not sent";
										session_start(); 
								$_SESSION['myid']=$id;
								?>
								
								<script>
								alert("YOUR BOOKING HAS BEEN COMPLETED..... ");		
								
								//window.open("print.php");
								window.location="print.php";
								
								</script>
								<?php
								}
										else
										{
											if($courtid=='1')
									{
								?>
								<script>
								alert("YOUR BOOKING COULD NOT BE COMPLETED..... ");
								window.location="ss.php";
								</script>
								<?php
									}
									else if($courtid=='2')
									{
										?>
										<script>
								alert("YOUR BOOKING COULD NOT BE COMPLETED..... ");
								window.location="kog.php";
								</script>
								<?php
									}
									else if($courtid=='3')
									{
										?>
										<script>
								alert("YOUR BOOKING COULD NOT BE COMPLETED..... ");
								window.location="letsplay.php";
								</script>
								<?php
									}
									else if($courtid=='4')
									{
										?>
										<script>
								alert("YOUR BOOKING COULD NOT BE COMPLETED..... ");
								window.location="xlr.php";
								</script>
								<?php
									}
									else if($courtid=='5')
									{
										?>
										<script>
								alert("YOUR BOOKING COULD NOT BE COMPLETED..... ");
								window.location="fn.php";
								</script>
								<?php
									}
									else if($courtid=='6')
									{
										?>
										<script>
								alert("YOUR BOOKING COULD NOT BE COMPLETED..... ");
								window.location="nama.php";
								</script>
								<?php
									}
									else
									{
										
									}
								}
									}
								}
									?>
										
