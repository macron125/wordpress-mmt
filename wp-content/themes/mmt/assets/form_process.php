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
    "From" => $email,
    "Reply-To" => $email,
    "X-Mailer" => "PHP/" . phpversion(),
    // "CC" => 'pgiusha@gmail.com',
    "X-Sender" => $email,
    "Return-Path" => $email,
    "MIME-Version" => "1.0",
    "Content-Type" => "text/plain; charset=utf-8", // Set on plain for the simplicity. Can be edited in HTML in the future
  ];

  $mail_sent = mail( $mailto, $subject, $message, $headers );

  if( $mail_sent ) {
    $submission_success = get_page_by_path('book-a-visit/success');
    $submission_success_id_EN = $submission_success->ID;
    if(function_exists("PLL")) {
      wp_redirect( get_permalink( pll_get_post_translations($submission_success_id_EN)[pll_current_language()] ) ); exit;
    } else {
      wp_redirect( get_permalink($submission_success_id_EN) );
    }
  }
}