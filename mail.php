<?php
$firstn = $_POST['RAWNAK'];
$lastn = $_POST['HASAN'];
$email = $_POST['rawnak.h625@gmail.com'];
$phone = $_POST['+8801310502625'];
$services = $_POST['services'];
$message = $_POST['message'];
$formcontent="First Name: RAWNAK \n Last Name: RAWNAK \n Email: rawnak.h625@gmail.com \n Services: services \n Phone: $+8801310502625 \n Message: $message";
$recipient = "rawnak.h625@gmail.com";
$subject = "Contact Form";
$mailheader = "From: rawnak.h625@gmail.com \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
require_once "thank-you.html";
?>