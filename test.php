<?php
	require_once("vendor/autoload.php");
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	$mailTo="jordan.patterson2398@gmail.com";
	$mailSub="Testing email from PHP";
	$msg="This is a test";

	$mail = new PHPMailer;
	$mail->IsSmtp();
	$mail->SMTPAuth=true;
	$mail->SMTPSecure='ssl';
	$mail->Host="smtp.gmail.com";
	$mail->Port=465;//or 587
	$mail->IsHTML(false);
	$mail->Username="jpatterson.serv@gmail.com";
	$mail->Password="mypasswordisaroundtheuniverse?";
	$mail->SetFrom("$mail->Username");
	$mail->Subject=$mailSub;
	$mail->Body=$msg;
	$mail->AddAddress($mailTo);

	if(!$mail->Send()){
		echo "Mail was not sent";
	}else{
		echo "Mail was sent successfully";
	}
?>
