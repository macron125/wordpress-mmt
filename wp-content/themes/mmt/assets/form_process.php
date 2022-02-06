<?php 

if(isset($_POST["submit"])) {
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];

  $mailto = "info@urologycenter.global";
  $subject = "MMT Hospital Form - " . $firstname . " " . $lastname;

  $message = "First name: " . $firstname . "\r\n";
  $message .= "Last name : " . $lastname . "\r\n";
  $message .= "Phone number: " . $phone . "\r\n";
  $message .= "Email: " . $email . "\r\n\r\n";
  $message .= $_POST["message"];
  $message = wordwrap($message, 70, "\r\n");

  $headers = [
    "From" => $mailto,
    "Reply-To" => $mailto,
    "X-Mailer" => "PHP/" . phpversion(),
    // "CC" => 'pgiusha@gmail.com',
    "X-Sender" => $mailto,
    "Return-Path" => $mailto,
    "MIME-Version" => "1.0",
    "Content-Type" => "text/plain; charset=iso-8859-1", // Set on plain for the simplicity. Can be edited in HTML in the future
  ];

  if( mail( $mailto, $subject, $message, $headers ) ) {
    
  }

}