<?php

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'dansidsaya@gmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['email'];
  $contact->from_email = $_POST['email'];
  $contact->subject ="New Subscription: " . $_POST['email'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  $contact->smtp = array(
    'host' => 'smtp.gmail.com', 
    'username' => 'dansidsaya@gmail.com', 
    'password' => 'ezal mhdm bieo qwpp', 
    'port' => '456', 
    'encryption' => 'ssl'
);


  $contact->add_message( $_POST['email'], 'Email');

  echo $contact->send();
?>
