<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$emailFrom = $_POST['email'];
	$message = $_POST['message'];

	$emailTo = "";
	$headers = "From: ".$emailFrom;
	$txt = "You have recieved an email from".$name.".\n\n".$message;

	email($emailTo,$subject,$txt,$headers);
	header("Location: index.php?emailsend");

	}	
