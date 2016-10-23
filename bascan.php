
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
								window.location="drdo.php";
							
								</script>
								<?php
									}
									else if($courtid=='2')
									{
										?>
										<script>
								alert("ENTER BOOKING ID..... ");
								window.location="ba.php";
								</script>
								<?php
									}
									else if($courtid=='3')
									{
										?>
										<script>
								alert("ENTER BOOKING ID..... ");
								window.location="dz.php";
								</script>
								<?php
									}
									else if($courtid=='4')
									{
										?>
										<script>
								alert("ENTER BOOKING ID..... ");
								window.location="ds.php";
								</script>
								<?php
									}
									else if($courtid=='5')
									{
										?>
										<script>
								alert("ENTER BOOKING ID..... ");
								window.location="jnh.php";
								</script>
								<?php
									}
									else if($courtid=='6')
									{
										?>
										<script>
								alert("ENTER BOOKING ID..... ");
								window.location="ja.php";
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
									$sql="select * from basketball where courtname='$courtname' AND bk_id='$bkid'";
									$res=$mysqli->query($sql);

									if ($res->num_rows>0) {			
									
									$sql1="DELETE FROM basketball WHERE bk_id='$bkid'";
										$data = $mysqli->query($sql1);
										if($data)
											{
												
											if($courtid=='1')
									{
								?>
								<script>
								alert("BOOKING HAS BEEN CANCELLED..... ");
								window.location="drdo.php";
							
								</script>
								<?php
									}
									else if($courtid=='2')
									{
										?>
										<script>
								alert("BOOKING HAS BEEN CANCELLED..... ");
								window.location="ba.php";
								</script>
								<?php
									}
									else if($courtid=='3')
									{
										?>
										<script>
								alert("BOOKING HAS BEEN CANCELLED..... ");
								window.location="dz.php";
								</script>
								<?php
									}
									else if($courtid=='4')
									{
										?>
										<script>
								alert("BOOKING HAS BEEN CANCELLED..... ");
								window.location="ds.php";
								</script>
								<?php
									}
									else if($courtid=='5')
									{
										?>
										<script>
								alert("BOOKING HAS BEEN CANCELLED..... ");
								window.location="jnh.php";
								</script>
								<?php
									}
									else if($courtid=='6')
									{
										?>
										<script>
								alert("BOOKING HAS BEEN CANCELLED..... ");
								window.location="ja.php";
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
								alert("BOOKING COULD NOT BE CANCELLED..... ");
								window.location="drdo.php";
							
								</script>
								<?php
									}
									else if($courtid=='2')
									{
										?>
										<script>
								alert("BOOKING COULD NOT BE CANCELLED..... ");
								window.location="ba.php";
								</script>
								<?php
									}
									else if($courtid=='3')
									{
										?>
										<script>
								alert("BOOKING COULD NOT BE CANCELLED..... ");
								window.location="dz.php";
								</script>
								<?php
									}
									else if($courtid=='4')
									{
										?>
										<script>
								alert("BOOKING COULD NOT BE CANCELLED..... ");
								window.location="ds.php";
								</script>
								<?php
									}
									else if($courtid=='5')
									{
										?>
										<script>
								alert("BOOKING COULD NOT BE CANCELLED..... ");
								window.location="jnh.php";
								</script>
								<?php
									}
									else if($courtid=='6')
									{
										?>
										<script>
								alert("BOOKING COULD NOT BE CANCELLED..... ");
								window.location="ja.php";
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
								window.location="drdo.php";
							
								</script>
								<?php
									}
									else if($courtid=='2')
									{
										?>
										<script>
								alert("PLEASE ENTER CORRECT BOOKING ID..... ");
								window.location="ba.php";
								</script>
								<?php
									}
									else if($courtid=='3')
									{
										?>
										<script>
								alert("PLEASE ENTER CORRECT BOOKING ID..... ");
								window.location="dz.php";
								</script>
								<?php
									}
									else if($courtid=='4')
									{
										?>
										<script>
								alert("PLEASE ENTER CORRECT BOOKING ID..... ");
								window.location="ds.php";
								</script>
								<?php
									}
									else if($courtid=='5')
									{
										?>
										<script>
								alert("PLEASE ENTER CORRECT BOOKING ID..... ");
								window.location="jnh.php";
								</script>
								<?php
									}
									else if($courtid=='6')
									{
										?>
										<script>
								alert("PLEASE ENTER CORRECT BOOKING ID..... ");
								window.location="ja.php";
								</script>
								<?php
									}
									else
									{
										
									}
									}
								}
								?>
										