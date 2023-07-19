<?php
require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "im0919312imam@gmail.com";
    $mail->Password = "yzzqsbgpwqfpikzl";
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    $mail->setFrom($_POST['email'], $_POST['name']);
    $mail->addAddress('irasta252@gmail.com', 'imamrasta');

    $mail->Subject = 'Contact Form Submission';
    $mail->Body = "Name: {$_POST['name']}\n\nEmail: {$_POST['email']}\n\nMessage: {$_POST['message']}";

    $mail->SMTPDebug = 0;

    $mail->send();
    echo 'Email sent';
} catch (Exception $e) {
    echo 'Error: ' . $mail->ErrorInfo;
}
?>
