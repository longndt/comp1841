<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer();

try {
   //Sender
   $mail->SMTPDebug = 2;
   $mail->isSMTP();
   $mail->Host       = 'smtp.gmail.com';
   $mail->SMTPAuth   = true;
   $mail->Username   = 'YOUR_EMAIL_ADDRESS';
   $mail->Password   = 'YOUR_APP_PASSWORD';
   $mail->SMTPSecure = 'tls';
   $mail->Port       = 587;

   //Recipient
   $mail->addAddress('YOUR_EMAIL_ADDRESS');

   //Content
   $mail->isHTML(true);
   $mail->Subject = $_POST['subject'];
   $mail->Body    = $_POST['body'];

   //Send mail
   $mail->send();

   //redirect to success page
   header ('Location: success.php');
} catch (Exception $e) {
   echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
