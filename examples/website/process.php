<?php ob_start();



	if(isset($_POST['submit'])) {

	$to = "johnmorris@morrisje.com";
	$subject = $_POST['subject'];
	$email = $_POST['email'];
	$txt = $_POST['message'];
	$headers = "From: " .$email . "\r\n" .
	"CC: johnmorris4@bellsouth.net";

	mail($to,$subject,$txt,$headers);

	header("Location: contact.html");




	}




?>
