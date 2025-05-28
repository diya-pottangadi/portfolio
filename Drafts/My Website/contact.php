<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $subject = htmlspecialchars($_POST["subject"]);
  $message = htmlspecialchars($_POST["message"]);

  $to = "dp938@njit.edu"; // ← Replace with your actual email
  $headers = "From: $email";
  $fullMessage = "From: $name <$email>\n\n$message";

  if (mail($to, $subject, $fullMessage, $headers)) {
    header("Location: thankyou.html"); // Redirect to confirmation page
    exit();
  } else {
    echo "Something went wrong. Please try again later.";
  }
}
?>
