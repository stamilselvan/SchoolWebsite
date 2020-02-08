<?php

if(isset($_POST['name']))
{
	$headers =  'MIME-Version: 1.0' . "\r\n"; 
	$headers .= 'From: Your name <hello@arungaraiamman.co.in>' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
	$sub = "[Form Submission] ".$_POST['name']." ".$_POST['email']." ".$_POST['tel'];
	$msg = $_POST['msg'];
	//mail("hello@arungaraiamman.co.in",$sub,$msg,$headers);
}
?>