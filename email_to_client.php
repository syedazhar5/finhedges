<?php
   $to_email = "azharaaa351@gmail.com";
   $subject = "Subject for the email";
   $body = "Hi test person, This is test email.";
   $headers = "From: syed.azhar9465@gmail.com";
   
   if(mail($to_email, $subject, $body, $headers)) {
      echo("Email successfully sent to $to_email...");
   } else {
      echo("Sending Failed");
   }
?>