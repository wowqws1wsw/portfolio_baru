<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];

  $to = "arfannaqi181@gmail.com";
  $subject = "New Contact Form Submission";
  $message = "Name: $name\nEmail: $email\nPhone: $phone";
  $headers = "From: $email";

  if (mail($to, $subject, $message, $headers)) {
    echo "Message sent successfully!";
  } else {
    echo "Failed to send message.";
  }
} else {
  echo "Invalid request.";
}
?>
