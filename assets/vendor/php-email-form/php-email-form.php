<?php
/**
 * Simple PHP Email Form Library
 *
 * This is a basic implementation that mimics the behavior of the proprietary PHP Email Form library.
 * It uses PHP's mail() function to send emails.
 */

class PHP_Email_Form {
  public $ajax = false;
  public $to = '';
  public $from_name = '';
  public $from_email = '';
  public $subject = '';
  public $smtp = array(); // Not used in this simple version.
  
  // Array to hold messages added via add_message()
  protected $messages = array();

  /**
   * Adds a message to the email.
   *
   * @param string $message The message content.
   * @param string $label   A label for the message (e.g., 'From', 'Email', 'Message').
   * @param int    $priority Optional priority for the message (unused in this version).
   */
  public function add_message($message, $label, $priority = 1) {
    $this->messages[] = array(
      'label' => $label,
      'message' => $message,
      'priority' => $priority
    );
  }

  /**
   * Sends the email using the mail() function.
   *
   * @return string "Success" on success, or an error message on failure.
   */
  public function send() {
    // Build the email body by concatenating all messages.
    $body = "";
    foreach($this->messages as $msg) {
      $body .= $msg['label'] . ": " . $msg['message'] . "\n";
    }
    
    // Create email headers.
    $headers = "From: " . $this->from_name . " <" . $this->from_email . ">\r\n";
    $headers .= "Reply-To: " . $this->from_email . "\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";
    
    // Send the email using PHP mail()
    if(mail($this->to, $this->subject, $body, $headers)){
      return "Success";
    } else {
      return "Failed to send email.";
    }
  }
}
?>
