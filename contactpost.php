<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $object = $_POST['object'];
}
    // Set up the email recipient
    $to = "prixy4125@gmail.com";     
    // Set up the email subject
    $subject = "DE $name: $object";
    
    // Set up the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$message\n";
    
    // Set up the email headers
    $headers = "From: $name <$email>";
    
    // Send the email
    if (mail($to, $subject, $email_message, $headers)) {
        // Email sent successfully
        header("Location: contactok.php");
    } else {
        // Email failed to send
        header("Location: contactnotok.php");
    }
 
?>
