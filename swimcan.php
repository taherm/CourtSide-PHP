
								<?php
								$courtid=$_POST['txt6'];
								$mysqli=new mysqli("localhost","root","","courtside");
								if(empty($_POST['bkid']))
								{
									if($courtid=='1')
									{
								?>
								<script>
								alert("ENTER BOOKING ID..... ");
								window.location="bits.php";
							
								</script>
								<?php
									}
									else if($courtid=='2')
									{
										?>
										<script>
								alert("ENTER BOOKING ID..... ");
								window.location="ksa.php";
								</script>
								<?php
									}
									else if($courtid=='3')
									{
										?>
										<script>
								alert("ENTER BOOKING ID..... ");
								window.location="swma.php";
								</script>
								<?php
									}
									else if($courtid=='4')
									{
										?>
										<script>
								alert("ENTER BOOKING ID..... ");
								window.location="bws.php";
								</script>
								<?php
									}
									else if($courtid=='5')
									{
										?>
										<script>
								alert("ENTER BOOKING ID..... ");
								window.location="dol.php";
								</script>
								<?php
									}
									else if($courtid=='6')
									{
										?>
										<script>
								alert("ENTER BOOKING ID..... ");
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
									$bkid=$_POST['bkid'];
									$sql="select * from swim where courtname='$courtname' AND bk_id='$bkid'";
									$res=$mysqli->query($sql);

									if ($res->num_rows>0) {			
									
									$sql1="DELETE FROM swim WHERE bk_id='$bkid'";
										$data = $mysqli->query($sql1);
										if($data)
											{
												
											if($courtid=='1')
									{
								?>
								<script>
								alert("YOUR BOOKING HAS BEEN CANCELLED..... ");
								window.location="bits.php";
							
								</script>
								<?php
									}
									else if($courtid=='2')
									{
										?>
										<script>
								alert("YOUR BOOKING HAS BEEN CANCELLED..... ");
								window.location="ksa.php";
								</script>
								<?php
									}
									else if($courtid=='3')
									{
										?>
										<script>
								alert("YOUR BOOKING HAS BEEN CANCELLED..... ");
								window.location="swma.php";
								</script>
								<?php
									}
									else if($courtid=='4')
									{
										?>
										<script>
								alert("YOUR BOOKING HAS BEEN CANCELLED..... ");
								window.location="bws.php";
								</script>
								<?php
									}
									else if($courtid=='5')
									{
										?>
										<script>
								alert("YOUR BOOKING HAS BEEN CANCELLED..... ");
								window.location="dol.php";
								</script>
								<?php
									}
									else if($courtid=='6')
									{
										?>
										<script>
								alert("YOUR BOOKING HAS BEEN CANCELLED..... ");
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
											if($courtid=='1')
									{
								?>
								<script>
								alert("YOUR BOOKING COULD NOT BE CANCELLED..... ");
								window.location="bits.php";
							
								</script>
								<?php
									}
									else if($courtid=='2')
									{
										?>
										<script>
								alert("YOUR BOOKING COULD NOT BE CANCELLED..... ");
								window.location="ksa.php";
								</script>
								<?php
									}
									else if($courtid=='3')
									{
										?>
										<script>
								alert("YOUR BOOKING COULD NOT BE CANCELLED..... ");
								window.location="swma.php";
								</script>
								<?php
									}
									else if($courtid=='4')
									{
										?>
										<script>
								alert("YOUR BOOKING COULD NOT BE CANCELLED..... ");
								window.location="bws.php";
								</script>
								<?php
									}
									else if($courtid=='5')
									{
										?>
										<script>
								alert("YOUR BOOKING COULD NOT BE CANCELLED..... ");
								window.location="dol.php";
								</script>
								<?php
									}
									else if($courtid=='6')
									{
										?>
										<script>
								alert("YOUR BOOKING COULD NOT BE CANCELLED..... ");
								window.location="ocean.php";
								</script>
								<?php
									}
									else
									{
										
									}
											
											
										}
									}
									else
									{
										if($courtid=='1')
									{
								?>
								<script>
								alert("ENTER VALID BOOKING ID..... ");
								window.location="bits.php";
							
								</script>
								<?php
									}
									else if($courtid=='2')
									{
										?>
										<script>
								alert("ENTER VALID BOOKING ID..... ");
								window.location="ksa.php";
								</script>
								<?php
									}
									else if($courtid=='3')
									{
										?>
										<script>
								alert("ENTER VALID BOOKING ID..... ");
								window.location="swma.php";
								</script>
								<?php
									}
									else if($courtid=='4')
									{
										?>
										<script>
								alert("ENTER VALID BOOKING ID..... ");
								window.location="bws.php";
								</script>
								<?php
									}
									else if($courtid=='5')
									{
										?>
										<script>
								alert("ENTER VALID BOOKING ID..... ");
								window.location="dol.php";
								</script>
								<?php
									}
									else if($courtid=='6')
									{
										?>
										<script>
								alert("ENTER VALID BOOKING ID..... ");
								window.location="ocean.php";
								</script>
								<?php
									}
									else
									{
										
									}
									}
								}
								?>
										