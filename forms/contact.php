<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Debug: Print the request method and POST data
echo '<p>Request Method: ' . $_SERVER['REQUEST_METHOD'] . '</p>';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo '<h3>POST Data Received:</h3>';
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    
    // Prepare a simple test email using PHP's mail() function
    $to = 'info@brillionex.com';
    $subject = 'Test Email from Contact Form';
    $message = 'This is a test email. The following POST data was received:' . "\n\n" . print_r($_POST, true);
    $headers = "From: webmaster@brillionex.com\r\n";
    
    if (mail($to, $subject, $message, $headers)) {
        echo '<p style="color: green;">Test email sent successfully.</p>';
    } else {
        echo '<p style="color: red;">Test email failed.</p>';
    }
} else {
    echo '<p style="color: red;">Invalid Request. This page only accepts POST submissions.</p>';
}
?>
