<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   // Get form data
   $name = htmlspecialchars(trim($_POST['name']));
   $email = htmlspecialchars(trim($_POST['email']));
   $message = htmlspecialchars(trim($_POST['message']));
   
   // Set recipient email
   $to = "your-email@example.com";  // Replace with your email
   
   // Email subject
   $subject = "New Contact Form Submission from $name";
   
   // Email message
   $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
   
   // Headers
   $headers = "From: $email";
   
   // Send email
   if (mail($to, $subject, $body, $headers)) {
      echo "Message successfully sent!";
   } else {
      echo "Message delivery failed.";
   }
}
?>