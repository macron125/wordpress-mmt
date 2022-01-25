<?php 

if(isset($_POST["submit"])) {
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];

  $mailto = "g.paresishvili@outlook.com";
  $subject = "MMT Hospital Form - " . $firstname . " " . $lastname;

  $message = 
    "First name: " . $firstname . "\r\n" .
    "Last name : " . $lastname . "\r\n" . 
    "Phone number: " . $phone . "\r\n" . 
    "Email: " . $email . "\r\n\r\n" . 
    $_POST["message"];

  $message = wordwrap($message, 70, "\r\n");

  $headers = [
    "From" => $mailto,
    "Reply-To" => $mailto,
    "X-Mailer" => "PHP/" . phpversion(),
    "CC" => 'pgiusha@gmail.com',
    // "BCC" => "BCC@MAIL.com",
    "X-Sender" => $mailto,
    // "X-Priority" => 1,
    "Return-Path" => $mailto,
    "MIME-Version" => "1.0",
    "Content-Type" => "text/html; charset=iso-8859-1",
  ];

  mail(
    $mailto,
    $subject,
    $message,
    $headers
  );
}










// $message = "First name: " . $firstname . "\r\n";
// $message .= "Last name: " . $lastname . "\r\n";
// $message .= "Phone number: " . $phone . "\r\n";
// if($email) {
//   $message .= "\r\n Email: " . $email . "\r\n";
// }
// $message .= wordwrap($_POST["message"], 70, "\r\n");