<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Set receiving email
$receiving_email_address = 'info@brillionex.com';

// Include the custom PHP Email Form library
if (file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php')) {
    include($php_email_form);
} else {
    die('Unable to load the "PHP Email Form" Library!');
}

// Ensure form is submitted via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name    = $_POST['name'] ?? '';
    $email   = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    // Basic validation (you can expand this)
    if(empty($name) || empty($email) || empty($subject) || empty($message)) {
        echo 'Please fill in all required fields.';
        exit;
    }

    $contact = new PHP_Email_Form;
    $contact->ajax = true;
    
    $contact->to = $receiving_email_address;
    $contact->from_name = $name;
    $contact->from_email = $email;
    $contact->subject = $subject;
    
    $contact->add_message($name, 'From');
    $contact->add_message($email, 'Email');
    $contact->add_message($message, 'Message', 10);
    
    $result = $contact->send();
    echo $result;
} else {
    echo 'Invalid Request';
}
?>
