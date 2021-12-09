<?php

// Session Starts
session_start();

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

if (isset($_GET['email'], $_GET['subject'], $_GET['message'])) {
  $mail = new PHPMailer(true);

  //Server settings
  $mail->SMTPDebug = 0;                                       //Enable verbose debug output
  $mail->isSMTP();                                            //Send using SMTP
  $mail->Host       = "smtp.gmail.com";                       //Set the SMTP server to send through
  $mail->SMTPAuth   = TRUE;                                   //Enable SMTP authentication
  $mail->Username   = "ronald_delacruz@rcc.edu.ph";           //SMTP username
  $mail->Password   = "zgvbpgetspsjaksw";                     //SMTP password
  $mail->SMTPSecure = "tls";                                  //Enable implicit TLS encryption
  $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

  //Recipients
  $email = $_GET['email'];
  $mail->AddAddress($email, "Ronald Vergel Dela Cruz");
  $mail->SetFrom("ronald_delacruz@rcc.edu.ph", "Ronald Vergel Dela Cruz");
  $mail->AddReplyTo("ronald_delacruz@rcc.edu.ph", "Ronald Vergel Dela Cruz");

  //Content
  $mail->isHTML(true);                                  //Set email format to HTML
  $mail->Subject = $_GET['subject'];
  $mail->Body    = $_GET['message'];


  // Conditional Statements if email is sent succesfully or not
  if (!$mail->Send()) {
    $_SESSION['alert'] = "Error in Sending Email!";
    $_SESSION['alert_type'] = "warning";
    header("location: SendEmail.php");
  } else {
    $_SESSION['alert'] = "Email Sent Succesfully!";
    $_SESSION['alert_type'] = "success";
    header("location: SendEmail.php");
  }
}

?>