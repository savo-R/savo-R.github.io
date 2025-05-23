<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "Savorodrigues05@gmail.com"; // email
    $subject = "New Contact Form Submission";
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "Content-Type: text/plain; charset=UTF-8";

    $body = "You have received a new message from $email:\n\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send the message.";
    }
}
?>
