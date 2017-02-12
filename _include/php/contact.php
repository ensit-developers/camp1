<?php

  $subject = 'Corruption Page'; // Subject of your email

  // Receiver email address
  $to = 'ensit_developers@gmail.com';  //Change the email address by yours
 

  // prepare header
  $header = 'From: '. "Anonymous" .' <'. $_REQUEST['email'] .'>'. "\r\n".'Reply-To:  '. "Anonymous". ' <'. $_REQUEST['email'] .'>'. "\r\n". 'X-Mailer: PHP/' . phpversion();


  $message = 'Name: ' . "Anonymous" .  "\n".'Email: ' . $_REQUEST['email'] . "\n".'Subject: ' . $subject . "\n".'Message: '. $_REQUEST['message'];

  // Send contact information
  $mail = mail( $to, $subject , $message, $header );
  if($mail)
  echo 'sent';
  
  

?>