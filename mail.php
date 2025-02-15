<?php
if (mail('info@brillionex.com', 'Test Email', 'This is a test email from the contact form.')) {
    echo 'Test email sent successfully.';
} else {
    echo 'Test email failed.';
}
?>
