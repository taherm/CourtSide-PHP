
								<?php
								$courtid=$_POST['txt6'];
								$mysqli=new mysqli("localhost","root","","courtside");
								if(empty($_POST['bkid']))
								{
									if($courtid=='1')
									{
								?>
								<script>
								alert("Please enter the  booking ID..... ");
								window.location="ss.php";
								</script>
								<?php
									}
									else if($courtid=='2')
									{
										?>
										<script>
								alert("Please enter the  booking ID..... ");
								window.location="kog.php";
								</script>
								<?php
									}
									else if($courtid=='3')
									{
										?>
										<script>
								alert("Please enter the  booking ID..... ");
								window.location="letsplay.php";
								</script>
								<?php
									}
									else if($courtid=='4')
									{
										?>
										<script>
								alert("Please enter the  booking ID..... ");
								window.location="xlr.php";
								</script>
								<?php
									}
									else if($courtid=='5')
									{
										?>
										<script>
								alert("Please enter the  booking ID..... ");
								window.location="fn.php";
								</script>
								<?php
									}
									else if($courtid=='6')
									{
										?>
										<script>
								alert("Please enter the  booking ID..... ");
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
									
									$courtname=$_POST['txt0'];
									$bkid=$_POST['bkid'];
									$sql="select * from football where courtname='$courtname' AND bk_id='$bkid'";
									$res=$mysqli->query($sql);

									if ($res->num_rows>0) {			
									
									$sql1="DELETE FROM football WHERE bk_id='$bkid'";
										$data = $mysqli->query($sql1);
										if($data)
											{
												
											if($courtid=='1')
									{
								?>
								<script>
								alert("BOOKING HAS BEEN CANCELLED..... ");
								window.location="ss.php";
								</script>
								<?php
									}
									else if($courtid=='2')
									{
										?>
										<script>
								alert("BOOKING HAS BEEN CANCELLED..... ");
								window.location="kog.php";
								</script>
								<?php
									}
									else if($courtid=='3')
									{
										?>
										<script>
								alert("BOOKING HAS BEEN CANCELLED..... ");
								window.location="letsplay.php";
								</script>
								<?php
									}
									else if($courtid=='4')
									{
										?>
										<script>
								alert("BOOKING HAS BEEN CANCELLED..... ");
								window.location="xlr.php";
								</script>
								<?php
									}
									else if($courtid=='5')
									{
										?>
										<script>
								alert("BOOKING HAS BEEN CANCELLED..... ");
								window.location="fn.php";
								</script>
								<?php
									}
									else if($courtid=='6')
									{
										?>
										<script>
								alert("BOOKING HAS BEEN CANCELLED..... ");
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
											if($courtid=='1')
									{
								?>
								<script>
								alert("YOUR BOOKING COULD NOT BE CANCELLED..... ");
								window.location="ss.php";
								</script>
								<?php
									}
									else if($courtid=='2')
									{
										?>
										<script>
								alert("YOUR BOOKING COULD NOT BE CANCELLED..... ");
								window.location="kog.php";
								</script>
								<?php
									}
									else if($courtid=='3')
									{
										?>
										<script>
								alert("YOUR BOOKING COULD NOT BE CANCELLED..... ");
								window.location="letsplay.php";
								</script>
								<?php
									}
									else if($courtid=='4')
									{
										?>
										<script>
								alert("YOUR BOOKING COULD NOT BE CANCELLED..... ");
								window.location="xlr.php";
								</script>
								<?php
									}
									else if($courtid=='5')
									{
										?>
										<script>
								alert("YOUR BOOKING COULD NOT BE CANCELLED..... ");
								window.location="fn.php";
								</script>
								<?php
									}
									else if($courtid=='6')
									{
										?>
										<script>
								alert("YOUR BOOKING COULD NOT BE CANCELLED..... ");
								window.location="nama.php";
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
								alert("PLEASE ENTER CORRECT BOOKING ID..... ");
								window.location="ss.php";
								</script>
								<?php
									}
									else if($courtid=='2')
									{
										?>
										<script>
								alert("PLEASE ENTER CORRECT BOOKING ID..... ");
								window.location="kog.php";
								</script>
								<?php
									}
									else if($courtid=='3')
									{
										?>
										<script>
								alert("PLEASE ENTER CORRECT BOOKING ID..... ");
								window.location="letsplay.php";
								</script>
								<?php
									}
									else if($courtid=='4')
									{
										?>
										<script>
								alert("PLEASE ENTER CORRECT BOOKING ID..... ");
								window.location="xlr.php";
								</script>
								<?php
									}
									else if($courtid=='5')
									{
										?>
										<script>
								alert("PLEASE ENTER CORRECT BOOKING ID..... ");
								window.location="fn.php";
								</script>
								<?php
									}
									else if($courtid=='6')
									{
										?>
										<script>
								alert("PLEASE ENTER CORRECT BOOKING ID..... ");
								window.location="nama.php";
								</script>
								<?php
									}
									else
									{
										
									}
									}
								}
								?>
										