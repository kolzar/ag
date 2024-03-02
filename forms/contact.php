<?php
  error_reporting(E_ALL^ E_NOTICE);
  ini_set('display_errors',true);
  ini_set("SMTP","ssl://mail.andreaguerresi.com");
  ini_set("smtp_port","465");
  // $receiving_email_address = 'guerresi@tuta.io';
  $receiving_email_address = 'info@andreaguerresi.com';

  $to      = $receiving_email_address;
  $subject =  $_POST['subject'];
  $message =  wordwrap($_POST['message'], 70);
  $headers = 'From: '. $receiving_email_address . "\r\n" .
    'Reply-To: '. $receiving_email_address . "\r\n" .
    'X-Mailer: PHP/' . phpversion() . "\r\n" ;
  $headers .= 'MIME-Version: 1.0' . "\r\n" ;
  $headers .= 'Content-type: text/html; charset=utf-8';

  
  if(mail($to,$subject,$message,$headers)) {
    echo "OK"; 
  } else {
    echo "Invio fallito!";
  }
?>
