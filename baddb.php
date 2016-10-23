<!-- php code for storing -->
								<?php
								$courtid=$_POST['txt6'];
								$flag=0;
								$id=rand(10,1000);
								$mysqli=new mysqli("localhost","root","","courtside");
								while($flag==0)
								{
								$sql="select * from badminton where bk_id='$id'";
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
								if(empty($_POST['txt1']) || empty($_POST['txt2']) || empty($_POST['txt3']) || empty($slot) || empty($dt))
								{
								if($courtid=='1')
									{
								?>
								<script>
								alert("ENTER ALL DETAILS..... ");
								window.location="ppa.php";
							
								</script>
								<?php
									}
									else if($courtid=='2')
									{
										?>
										<script>
								alert("ENTER ALL DETAILS..... ");
								window.location="raca.php";
								</script>
								<?php
									}
									else if($courtid=='3')
									{
										?>
										<script>
								alert("ENTER ALL DETAILS..... ");
								window.location="shs.php";
								</script>
								<?php
									}
									else if($courtid=='4')
									{
										?>
										<script>
								alert("ENTER ALL DETAILS..... ");
								window.location="bda.php";
								</script>
								<?php
									}
									else if($courtid=='5')
									{
										?>
										<script>
								alert("ENTER ALL DETAILS..... ");
								window.location="kba.php";
								</script>
								<?php
									}
									else if($courtid=='6')
									{
										?>
										<script>
								alert("ENTER ALL DETAILS..... ");
								window.location="lsm.php";
								</script>
								<?php
									}
									else
									{
										
									}
								}
								else
								{
									$courtname=$_POST['txt0'];
									$name=$_POST['txt1'];
									$email=$_POST['txt2'];
									$phno=$_POST['txt3'];
									$dt=$_POST['date'];
									$slot=$_POST['slot'];
									$price=$_POST['txt4'];
									//$loc=$_POST['txt5'];
		
									$sql="select * from badminton where courtname='$courtname' AND slot='$slot' AND bkdate='$dt'";
									$res=$mysqli->query($sql);
	

									if ($res->num_rows>0) {									
									
									if($courtid=='1')
									{
								?>
								<script>
								alert("THIS SLOT HAS ALREADY BEEN BOOKED TRY ANOTHER SLOT..... ");
								window.location="ppa.php";
							
								</script>
								<?php
									}
									else if($courtid=='2')
									{
										?>
										<script>
								alert("THIS SLOT HAS ALREADY BEEN BOOKED TRY ANOTHER SLOT..... ");
								window.location="raca.php";
								</script>
								<?php
									}
									else if($courtid=='3')
									{
										?>
										<script>
								alert("THIS SLOT HAS ALREADY BEEN BOOKED TRY ANOTHER SLOT..... ");
								window.location="shs.php";
								</script>
								<?php
									}
									else if($courtid=='4')
									{
										?>
										<script>
								alert("THIS SLOT HAS ALREADY BEEN BOOKED TRY ANOTHER SLOT..... ");
								window.location="bda.php";
								</script>
								<?php
									}
									else if($courtid=='5')
									{
										?>
										<script>
								alert("THIS SLOT HAS ALREADY BEEN BOOKED TRY ANOTHER SLOT..... ");
								window.location="kba.php";
								</script>
								<?php
									}
									else if($courtid=='6')
									{
										?>
										<script>
								alert("THIS SLOT HAS ALREADY BEEN BOOKED TRY ANOTHER SLOT..... ");
								window.location="lsm.php";
								</script>
								<?php
									}
									else
									{
										
									}
								}
									else
									{
										$sql1="INSERT INTO badminton (courtname,custname,phoneno,email,slot,bkdate,price,bk_id) VALUES ('$courtname','$name','$phno','$email','$slot','$dt','$price','$id')";
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
								//window.open('badprint.php?');
								window.location="badprint.php";
								
								</script>

								<?php
								}
										else
										
										{
											if($courtid=='1')
									{
								?>
								<script>
								alert("BOOKING COULD NOT BE COMPLETED..... ");
								window.location="ppa.php";
							
								</script>
								<?php
									}
									else if($courtid=='2')
									{
										?>
										<script>
								alert("BOOKING COULD NOT BE COMPLETED..... ");
								window.location="raca.php";
								</script>
								<?php
									}
									else if($courtid=='3')
									{
										?>
										<script>
								alert("BOOKING COULD NOT BE COMPLETED..... ");
								window.location="shs.php";
								</script>
								<?php
									}
									else if($courtid=='4')
									{
										?>
										<script>
								alert("BOOKING COULD NOT BE COMPLETED..... ");
								window.location="bda.php";
								</script>
								<?php
									}
									else if($courtid=='5')
									{
										?>
										<script>
								alert("BOOKING COULD NOT BE COMPLETED..... ");
								window.location="kba.php";
								</script>
								<?php
									}
									else if($courtid=='6')
									{
										?>
										<script>
								alert("BOOKING COULD NOT BE COMPLETED..... ");
								window.location="lsm.php";
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
										
