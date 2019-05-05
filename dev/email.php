<?php
$email= $_REQUEST['email'];


$to = "vergomontstay@gmail.com";
$subject = "New User";
$txt = "New user subscription email is:".$email;

$headers = "From: noreply@thevergomont.com";

if(mail($to,$subject,$txt,$headers)){
//	echo "Mail Sent";
}else{
//	echo "***ERROR***";
}?>