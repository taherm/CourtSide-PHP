<!-- php code for storing -->
								<?php
								$dt=$_POST['date'];
								$slot=$_POST['slot'];
								if(empty($_POST['txt1']) || empty($_POST['txt2']) || empty($_POST['txt3']) || empty($slot) || empty($dt))
								{
								?>
								<script>
								alert("Please enter all the details before booking..... ");
								window.location="nama.php";
								</script>
								<?php
								}
								else
								{
									$courtname='Namagreens';
									$name=$_POST['txt1'];
									$email=$_POST['txt2'];
									$phno=$_POST['txt3'];
									$slot=$_POST['slot'];
									$dt=$_POST['date'];
									$mysqli=new mysqli("localhost","root","","courtside");
		
									$sql="select * from football where courtname='$courtname' AND slot='$slot' AND bkdate='$dt'";
									$res=$mysqli->query($sql);
	

									if ($res->num_rows>0) {									
									
									?>
									<script>
									alert("This slot is already booked try another slot..");
									window.location="nama.php";
									</script>
									<?php
									}
									else
									{
										$sql1="INSERT INTO football (courtname,custname,phoneno,email,slot,bkdate) VALUES ('$courtname','$name','$phno','$email','$slot','$dt')";
										$data = $mysqli->query($sql1);
										if($data)
											{
	
											?>
											<script>
											alert("YOUR BOOKING IS COMPLETED...");
											window.location="football.php";
											</script>
											<?php
											}
										else
										{
											?>
										<script>
											alert("YOUR BOOKING COULD NOT BE COMPLETED...");
											window.location="nama.php";
											</script>
											<?php	
										}
									}
								}
									?>
										