<?php 


if(isset($_POST['submit'])) {
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $mailto = 'g.paresishvili@outlook.com';
  $headers = "From: " . $email;
  $txt = "You have received an email from " . $name . "\n\n" . $message;

  mail($mailto, $subject, $txt, $headers);
}