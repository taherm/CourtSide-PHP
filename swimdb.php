<!-- php code for storing -->
								<?php
								$courtid=$_POST['txt6'];
								$flag=0;
								$id=rand(10,1000);
								$mysqli=new mysqli("localhost","root","","courtside");
								while($flag==0)
								{
								$sql="select * from swim where bk_id='$id'";
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
								window.location="bits.php";
							
								</script>
								<?php
									}
									else if($courtid=='2')
									{
										?>
										<script>
								alert("ENTER ALL DETAILS..... ");
								window.location="ksa.php";
								</script>
								<?php
									}
									else if($courtid=='3')
									{
										?>
										<script>
								alert("ENTER ALL DETAILS..... ");
								window.location="swma.php";
								</script>
								<?php
									}
									else if($courtid=='4')
									{
										?>
										<script>
								alert("ENTER ALL DETAILS..... ");
								window.location="bws.php";
								</script>
								<?php
									}
									else if($courtid=='5')
									{
										?>
										<script>
								alert("ENTER ALL DETAILS..... ");
								window.location="dol.php";
								</script>
								<?php
									}
									else if($courtid=='6')
									{
										?>
										<script>
								alert("ENTER ALL DETAILS..... ");
								window.location="ocean.php";
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
		
									$sql="select * from swim where courtname='$courtname' AND slot='$slot' AND bkdate='$dt'";
									$res=$mysqli->query($sql);
	

									if ($res->num_rows>0) {									
									
									if($courtid=='1')
									{
								?>
								<script>
								alert("THIS SLOT HAS ALREADY BEEN BOOKED TRY ANOTHER SLOT..... ");
								window.location="bits.php";
							
								</script>
								<?php
									}
									else if($courtid=='2')
									{
										?>
										<script>
								alert("THIS SLOT HAS ALREADY BEEN BOOKED TRY ANOTHER SLOT..... ");
								window.location="ksa.php";
								</script>
								<?php
									}
									else if($courtid=='3')
									{
										?>
										<script>
								alert("THIS SLOT HAS ALREADY BEEN BOOKED TRY ANOTHER SLOT..... ");
								window.location="swma.php";
								</script>
								<?php
									}
									else if($courtid=='4')
									{
										?>
										<script>
								alert("THIS SLOT HAS ALREADY BEEN BOOKED TRY ANOTHER SLOT..... ");
								window.location="bws.php";
								</script>
								<?php
									}
									else if($courtid=='5')
									{
										?>
										<script>
								alert("THIS SLOT HAS ALREADY BEEN BOOKED TRY ANOTHER SLOT..... ");
								window.location="dol.php";
								</script>
								<?php
									}
									else if($courtid=='6')
									{
										?>
										<script>
								alert("THIS SLOT HAS ALREADY BEEN BOOKED TRY ANOTHER SLOT..... ");
								window.location="ocean.php";
								</script>
								<?php
									}
									else
									{
										
									}
								}
									else
									{
										$sql1="INSERT INTO swim (courtname,custname,phoneno,email,slot,bkdate,price,bk_id) VALUES ('$courtname','$name','$phno','$email','$slot','$dt','$price','$id')";
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
								//window.open('swimprint.php?');
								window.location="swimprint.php";
								
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
								window.location="bits.php";
							
								</script>
								<?php
									}
									else if($courtid=='2')
									{
										?>
										<script>
								alert("BOOKING COULD NOT BE COMPLETED..... ");
								window.location="ksa.php";
								</script>
								<?php
									}
									else if($courtid=='3')
									{
										?>
										<script>
								alert("BOOKING COULD NOT BE COMPLETED..... ");
								window.location="swma.php";
								</script>
								<?php
									}
									else if($courtid=='4')
									{
										?>
										<script>
								alert("BOOKING COULD NOT BE COMPLETED..... ");
								window.location="bws.php";
								</script>
								<?php
									}
									else if($courtid=='5')
									{
										?>
										<script>
								alert("BOOKING COULD NOT BE COMPLETED..... ");
								window.location="dol.php";
								</script>
								<?php
									}
									else if($courtid=='6')
									{
										?>
										<script>
								alert("BOOKING COULD NOT BE COMPLETED..... ");
								window.location="ocean.php";
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
										