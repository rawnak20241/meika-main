<?php
$firstn = $_POST['RAWNAK'];
$lastn = $_POST['HASAN'];
$email = $_POST['rh.rawnakhasan@gmail.com'];
$phone = $_POST['+8801331336920'];
$services = $_POST['services'];
$message = $_POST['message'];
$formcontent="First Name: RAWNAK \n Last Name: RAWNAK \n Email: rh.rawnakhasan@gmail.com \n Services: services \n Phone: $+8801331336920 \n Message: $message";
$recipient = "rh.rawnakhasan@gmail.com";
$subject = "Contact Form";
$mailheader = "From: rh.rawnakhasan@gmail.com \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
require_once "thank-you.html";
?>