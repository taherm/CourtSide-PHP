<?php 
                //error_reporting(0);
					$proid=$_POST['sid'];
					$conn = new mysqli("localhost","root","","courtside"); 
					$sql="select * from stock where proid=$proid";
									$res=$conn->query($sql);
									
										if ($res->num_rows>0) {
									while($row = $res->fetch_array())
									{
    
									$stk=$row['stock'];
	//$bkid =$row['bk_id'];  	
									} 
									}
									else{
										?>
										<script>
								alert("Something went wrong try again..... ");
								window.location="upstk.php";
							
								</script>
										<?php
									}

										$stnm=$_POST['nm'];
										$qn=$_POST['qn'];
										$nstk=$stk+$qn;
												$sql2="UPDATE stock
												SET stock='$nstk'
												WHERE proid='$proid'";											
											$data = $conn->query($sql2);
											if($data)
											{
												?>
												<script>
												alert("UPDATE SUCESSful");
												window.location="upstk.php";
												</script>
												<?php
											}
											else
											{
												?>
												<script>
												alert("UPDATE UNSUCESSful");
												window.location="upstk.php";
												</script>
												<?php
											}
                    ?>