<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$plan = $_POST['plan'];
$trip_start = $_POST['trip_start'];
$trip_end = $_POST['trip_end'];
$budget = $_POST['budget'];
$departure_country = $_POST['departure_country'];
$destination = $_POST['destination'];

$message = $_POST['message'];
$formcontent=" From: $name \n Subject: $subject \n Selected Plan: $plan \n Trip starting date: $trip_start \n Trip ending date: $trip_end \n Total budget: $budget \n Departure country: $departure_country \n Destination: $destination \n Message: $message";
$recipient = "info.guidetravelworld@gmail.com";
/*$subject = "Contact Form";*/
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>