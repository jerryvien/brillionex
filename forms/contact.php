<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$receiving_email_address = 'info@brillionex.com';

if (file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php')) {
    include($php_email_form);
} else {
    die('Unable to load the "PHP Email Form" Library!');
}

// For debugging, output the request method:
// echo 'Request Method: ' . $_SERVER['REQUEST_METHOD'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name    = $_POST['name'] ?? '';
    $email   = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    $contact = new PHP_Email_Form;
    // Comment out AJAX behavior if it interferes with standard POST submission:
    // $contact->ajax = true;
    
    $contact->to = $receiving_email_address;
    $contact->from_name = $name;
    $contact->from_email = $email;
    $contact->subject = $subject;
    
    $contact->add_message($name, 'From');
    $contact->add_message($email, 'Email');
    $contact->add_message($message, 'Message', 10);
    
    echo $contact->send();
} else {
    echo 'Invalid Request - Method is: ' . $_SERVER['REQUEST_METHOD'];
}
?>
