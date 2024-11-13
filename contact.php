<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Set the email recipient (your email address)
    $to = "mileshall258@gmail.com";
    $subject = "New Contact Form Submission from $name";
    
    // Email content
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    
    // Email headers
    $headers = "From: $email";
    
    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "There was a problem sending your message. Please try again later.";
    }
}
?>