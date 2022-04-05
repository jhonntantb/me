<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $email_from = 'jhonntantb@yourwebsite.com';

	$email_subject = "Email to contact me";

	$email_body = "You have received a new message from the user $name.\n".
                "Whit the Email is: $visitor_email.\n".
                "the subject is: $subject.\n".
                "Here is the message:\n $message".;
  
  $to = "jhonntantb@gmail.com";

  $headers = "From: $email_from \r\n";
              
  $headers .= "Reply-To: $visitor_email \r\n";
              
  mail($to,$email_subject,$email_body,$headers);
?>