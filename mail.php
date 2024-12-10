<?php
$firstn = $_POST['RAWNAK'];
$lastn = $_POST['HASAN'];
$email = $_POST['rownakhasan.10w@gmail.com'];
$phone = $_POST['+8801310502625'];
$services = $_POST['services'];
$message = $_POST['message'];
$formcontent="First Name: RAWNAK \n Last Name: RAWNAK \n Email: rownakhasan.10w@gmail.com \n Services: services \n Phone: $+8801310502625 \n Message: $message";
$recipient = "rownakhasan.10w@gmail.com";
$subject = "Contact Form";
$mailheader = "From: rownakhasan.10w@gmail.com \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
require_once "thank-you.html";
?>