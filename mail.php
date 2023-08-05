<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$location = $_POST['location'];
$message = $_POST['message'];
$email_from = 'info@kobrarank.com';
$email_subject = 'New From Submission';
$email_body = "User Name: $name.\n".
"User Email: $visitor_email.\n".
"Location: $location.\n".
"User Message: $message.\n";
$to = 'raulavrin70@gmail.com'
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("location: Contact.html");
?>