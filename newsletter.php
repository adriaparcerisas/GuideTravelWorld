<?php
$email = $_POST['email'];
$subject = 'New Newsletter Sign Up';

$message = $_POST['email'] 'has been registered to keep update';
$formcontent=" From: $email \n Subject: $subject \n Message: $message";
$recipient = "info.guidetravelworld@gmail.com";
/*$subject = "Contact Form";*/
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>