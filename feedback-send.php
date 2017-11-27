<?php
	require_once("vendor/autoload.php");
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	function process_data($data){
		$data=trim($data);
		$data=stripslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		if(isset($_POST['submit'])){
			$name=process_data($_POST["name"]);
			$email=process_data($_POST["email"]);
			$subject='<b>The Binaries - Feedback From '.$name.'</b>';
			$message=process_data($_POST["message"]);
			$msg="Name: ".$name."\n"
				."Email: ".$email."\n"
				."Message: ".$message;
			$mail=new PHPMailer;
			$mail->IsSmtp();
			$mail->SMTPAuth=true;
			$mail->SMTPSecure='ssl';
			$mail->Host="smtp.gmail.com";
			$mail->Port=465;//or 587
			$mail->IsHTML(false);
			$mail->Username="jpatterson.serv@gmail.com";
			$mail->Password="mypasswordisaroundtheuniverse?";
			$mail->SetFrom("$mail->Username");
			$mail->Subject=$subject;
			$mail->Body=$msg;
			$mail->AddAddress("jordan.patterson2398@gmail.com");
			if($mail->Send()){
				$display="Your message was sent successfully.<br><br>Thank you for your feedback.";
			}else{
				$display="Your message was not sent successfully. Try again.";
			}
		}else{
			header('location: feedback.php');
			exit(0);
		}
	}
	$page_content="
		<br><br>
		<center>
		<h1 class=\"pge-h\">Hello $name</h1><br>
		<h3 class=\"pge-h\">$display</h3>
		</center>
	";
	$page_title="Feedback";
	$active_page="feedback";
	include "template.php";
?>