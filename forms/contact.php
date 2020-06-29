<?php
 
  $receiving_email_address = 'bostoneochieng@gmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['sender_name'];
  $contact->from_email = $_POST['email_address'];
  $contact->subject = $_POST['form_subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
 

  $contact->smtp = array(
    'host' => 'smtp.gmail.com',
    'username' => 'bostoneochieng@gmail',
    'password' => '0721748865',
    'port' => '587'
  );
 

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  
  $contact->add_message( $_POST['message'], 'Message', 5);

  echo $contact->send();
?>
