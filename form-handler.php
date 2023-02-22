<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from='website@gmail.com';
$emial_subject='New Form Submission';
$email_body="user name:$name.\n".
"User Email: $visitor_email.\n".
"Subject: $subject.\n".
"User email: $message.\n";
$to='sayandetarafder@gmailcom';
$headers="From: $email_from \r\n";
$headers .="Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location:contact.html");
?>