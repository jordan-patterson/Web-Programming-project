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
		$name=process_data($_POST["name"]);
		$company_name=process_data($_POST["companyName"]);
		$email=process_data($_POST["email"]);
		$number=process_data($_POST["number"]);
		$services=$_POST["services"];
		$price=$_POST["price"];
		$details=process_data($_POST["details"]);
		$subject="THE BINARIES: REQUEST FROM $name of $company_name";
		$msg="Name: ".$name."\n"
			."Company Name: ".$company_name."\n"
			."Email: ".$email."\n"
			."Phone Number: ".$number."\n\n"
			."Selected Services: ".$services."\n\n"
			."Final Price: ".$price."\n\n"
			."Details: \n".$details;
		$mail= new PHPmailer;
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
			$header="Success";
			$display="Hello $name, your request was sent succesfully.";
		}else{
			$header="Error";
			$display="Hey $name, it seems like your request failed. Please try again.";
		}
	}else{
		header('location: request.php');
		exit(0);
	}
	$page_title="Request";
	$active_page="request";
	$page_content="
		<center>
			<h1 class=\"pge-h\">$header</h1><br><br>
			<h3 class=\"pge-h\">$display</h3>
		</center>
	";
	include "template.php";
?>