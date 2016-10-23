
   <?php 
   	$mysqli=new mysqli("localhost","root","","courtside");
									

  // error_reporting(0);
										$cname=$_POST['tnm'];
										$phno=$_POST['phno'];
										$email=$_POST['eid'];
										$pname=$_POST['pnm'];
										$qn=$_POST['qn'];
										$price=$_POST['pp'];
										$tp=$price*$qn;
										$pid=$_POST['pid'];
										
										
										$sql="select * from stock where proid=$pid";
										$res=$mysqli->query($sql);
									if ($res->num_rows>0) {											
									while($row = $res->fetch_array())
									{
    
									$stk=$row['stock'];
	  	
									} 
									}
									else{
									?>
									<script>
								alert("Stock could not be reteived..... ");
								window.location="gears.php";
							
								</script>
									
									<?php
									
									}
							
								if(empty($cname) || empty($phno) || empty($email) || empty($pname) || empty($qn))
								{
						
								?>
								<script>
								alert("ENTER ALL DETAILS..... ");
								window.location="buy.php";
							
								</script>
								<?php
									}
									else
									{
										
											$sql1="INSERT INTO buy(custname,phno,email,prdname,price,quantity,totalprice) VALUES ('$cname','$phno','$email','$pname','$price','$qn','$tp')";
											
											$data = $mysqli->query($sql1);
											
											if($data)
											{
												$nstk=$stk-$qn;
												session_start(); 
												$_SESSION['custname']=$cname;
												$sql2="UPDATE stock
												SET stock=$nstk
												WHERE proid=$pid";
											
											$data = $mysqli->query($sql2);
												$to = $email;
												$subject = "CourtSide";
												$txt = "Hello,$cname your purchase on courtside is sucessful..Your product is  $pname, number of product is $qn.Purchase Cost is $price..!!Thankyou for using CourtSide..!!";
												$headers = "From: vickyvignesh170@gmail.com" . "\r\n" .
												"CC:";
												$g=mail($to,$subject,$txt,$headers);
												if($g)
												echo"mail sent";
												else
												echo "mail not sent";
									?>
						
								
								<script>
								
								alert("YOUR PURCHASE HAS BEEN COMPLETED..... ");								
								window.location="buyprint.php";
								//window.open('buyprint.php?')
								
								
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
									
									
									
								?>