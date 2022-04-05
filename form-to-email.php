<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $email_from = 'alejhotabraj@gmail.com';

	$email_subject = "Email to contact me";

	$email_body = "You have received a new message from the user $name" . "\r\n";
  $email_body .= "Whit the Email is: $visitor_email" . "\r\n";
  $email_body .= "the subject is: $subject" . "\r\n";
  $email_body .=  "Here is the message:\n $message";
  
  $to = "jhonntantb@gmail.com";

  $headers = "From: $email_from \r\n";   
  $headers .= "Reply-To: $visitor_email \r\n";
  $headers .= "X-Mailer: PHP/" . phpversion();
              
  mail($to,$email_subject,$email_body,$headers);
?>