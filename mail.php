<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];

$message = $_POST['message'];
$formcontent=" From: $name \n Subject: $subject \n Message: $message";
$recipient = "info.guidetravelworld@gmail.com";
/*$subject = "Contact Form";*/
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>