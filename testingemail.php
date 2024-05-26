<?php
$to = 'recipient@example.com';
$subject = 'Test Email';
$message = 'This is a test email sent from PHP.';
$headers = 'From: amirimtiaz57@gmail.com' . "\r\n" .
           'Reply-To: amirimtiaz57@gmail.com' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

if (mail($to, $subject, $message, $headers)) {
    echo 'Email sent successfully.';
} else {
    echo 'Failed to send email.';
}
?>
