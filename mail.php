<?php
$to = "vickyvignesh170@gmail.com";
$subject = "My subject";
$txt = "Hello mail!";
$headers = "From: vickyvignesh170@gmail.com" . "\r\n" .
"CC:";
$g=mail($to,$subject,$txt,$headers);
if($g)
	echo"mail sent";
else
	echo "mail not sent";
?> 

