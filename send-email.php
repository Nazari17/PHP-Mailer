<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

require "vendor/autoload.php";
//echo smtp_mailer("nazaridm17@gmail.com", "Test Subject", "Hello, Nazari");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;
$SMTPSecure = "tls";

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "nazaridm17@gmail.com";
$mail->Password = "zhcdiahzqbfoqepw";

$mail->setFrom($email, $name);
$mail->addAddress("nazaridm17@gmail.com", "Nazari");

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();

header("Location: sent.html");