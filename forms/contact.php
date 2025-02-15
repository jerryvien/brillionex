<?php
  $receiving_email_address = 'info@brillionex.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  // Check if form is submitted using POST
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Use null coalescing operator to prevent undefined index warnings
    $name    = $_POST['name'] ?? '';
    $email   = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    $contact = new PHP_Email_Form;
    $contact->ajax = true;
    
    $contact->to = $receiving_email_address;
    $contact->from_name = $name;
    $contact->from_email = $email;
    $contact->subject = $subject;
    
    $contact->add_message( $name, 'From');
    $contact->add_message( $email, 'Email');
    $contact->add_message( $message, 'Message', 10);
    
    echo $contact->send();
  } else {
    echo 'Invalid Request';
  }
?>
