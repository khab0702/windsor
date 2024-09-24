<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = $_POST["name"];
  $num = $_POST["num"];
  $ORDER NAME = $_POST[" ORDER NAME"];

  // Set up email parameters
  $to = "khabeernunkoo1@gmail.com"; // Replace with your email address
  $subject = "New Contact Form Submission";
  $headers = "From: " . $email;

  // Send the email
  if (mail($to, $subject, $num, $headers)) {
    echo "Email sent successfully! We will get back to you soon.";
  } else {
    echo "Failed to send email. Please try again later.";
  }
}
?>
