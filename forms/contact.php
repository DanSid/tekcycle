<?php
  // $receiving_email_address = 'info@tekcycle.com';
  $receiving_email_address = 'dansidsaya@gmail.com';

  if( file_exists($php_email_form = '../images/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];

  // SMTP configuration for sending emails
  $contact->smtp = array(
    'host' => 'smtp.gmail.com', 
    'username' => 'dansidsaya@gmail.com', 
    'password' => 'ezal mhdm bieo qwpp', 
    'port' => '456', 
    'encryption' => 'ssl'
);


  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();
?>
