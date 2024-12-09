<?php
$email = $_POST['email'];

$formcontent="Email: $email";
$recipient = "rh.rawnakhasan@gmail.com";
$subject = "Newslater Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
require_once "thank-you.html";
?>