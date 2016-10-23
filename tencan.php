
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
								window.location="cosmo.php";
							
								</script>
								<?php
									}
									else if($courtid=='2')
									{
										?>
										<script>
								alert("ENTER BOOKING ID..... ");
								window.location="rz.php";
								</script>
								<?php
									}
									else if($courtid=='3')
									{
										?>
										<script>
								alert("ENTER BOOKING ID..... ");
								window.location="lt.php";
								</script>
								<?php
									}
									else if($courtid=='4')
									{
										?>
										<script>
								alert("ENTER BOOKING ID..... ");
								window.location="bpt.php";
								</script>
								<?php
									}
									else if($courtid=='5')
									{
										?>
										<script>
								alert("ENTER BOOKING ID..... ");
								window.location="utf.php";
								</script>
								<?php
									}
									else if($courtid=='6')
									{
										?>
										<script>
								alert("ENTER BOOKING ID..... ");
								window.location="rga.php";
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
									$sql="select * from tennis where courtname='$courtname' AND bk_id='$bkid'";
									$res=$mysqli->query($sql);

									if ($res->num_rows>0) {			
									
									$sql1="DELETE FROM tennis WHERE bk_id='$bkid'";
										$data = $mysqli->query($sql1);
										if($data)
											{
												
											if($courtid=='1')
									{
								?>
								<script>
								alert("YOUR BOOKING HAS BEEN CANCELLED..... ");
								window.location="cosmo.php";
							
								</script>
								<?php
									}
									else if($courtid=='2')
									{
										?>
										<script>
								alert("YOUR BOOKING HAS BEEN CANCELLED..... ");
								window.location="rz.php";
								</script>
								<?php
									}
									else if($courtid=='3')
									{
										?>
										<script>
								alert("YOUR BOOKING HAS BEEN CANCELLED..... ");
								window.location="lt.php";
								</script>
								<?php
									}
									else if($courtid=='4')
									{
										?>
										<script>
								alert("YOUR BOOKING HAS BEEN CANCELLED..... ");
								window.location="bpt.php";
								</script>
								<?php
									}
									else if($courtid=='5')
									{
										?>
										<script>
								alert("YOUR BOOKING HAS BEEN CANCELLED..... ");
								window.location="utf.php";
								</script>
								<?php
									}
									else if($courtid=='6')
									{
										?>
										<script>
								alert("YOUR BOOKING HAS BEEN CANCELLED..... ");
								window.location="rga.php";
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
								window.location="cosmo.php";
							
								</script>
								<?php
									}
									else if($courtid=='2')
									{
										?>
										<script>
								alert("YOUR BOOKING COULD NOT BE CANCELLED..... ");
								window.location="rz.php";
								</script>
								<?php
									}
									else if($courtid=='3')
									{
										?>
										<script>
								alert("YOUR BOOKING COULD NOT BE CANCELLED..... ");
								window.location="lt.php";
								</script>
								<?php
									}
									else if($courtid=='4')
									{
										?>
										<script>
								alert("YOUR BOOKING COULD NOT BE CANCELLED..... ");
								window.location="bpt.php";
								</script>
								<?php
									}
									else if($courtid=='5')
									{
										?>
										<script>
								alert("YOUR BOOKING COULD NOT BE CANCELLED..... ");
								window.location="utf.php";
								</script>
								<?php
									}
									else if($courtid=='6')
									{
										?>
										<script>
								alert("YOUR BOOKING COULD NOT BE CANCELLED..... ");
								window.location="rga.php";
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
								window.location="cosmo.php";
							
								</script>
								<?php
									}
									else if($courtid=='2')
									{
										?>
										<script>
								alert("PLEASE ENTER CORRECT BOOKING ID..... ");
								window.location="rz.php";
								</script>
								<?php
									}
									else if($courtid=='3')
									{
										?>
										<script>
								alert("PLEASE ENTER CORRECT BOOKING ID..... ");
								window.location="lt.php";
								</script>
								<?php
									}
									else if($courtid=='4')
									{
										?>
										<script>
								alert("PLEASE ENTER CORRECT BOOKING ID..... ");
								window.location="bpt.php";
								</script>
								<?php
									}
									else if($courtid=='5')
									{
										?>
										<script>
								alert("PLEASE ENTER CORRECT BOOKING ID..... ");
								window.location="utf.php";
								</script>
								<?php
									}
									else if($courtid=='6')
									{
										?>
										<script>
								alert("PLEASE ENTER CORRECT BOOKING ID..... ");
								window.location="rga.php";
								</script>
								<?php
									}
									else
									{
										
									}
									}
								}
								?>
										