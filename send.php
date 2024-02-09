<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\furniture\PHPMailer-master\src\Exception.php';
require 'C:\xampp\htdocs\furniture\PHPMailer-master\src\PHPMailer.php';
require 'C:\xampp\htdocs\furniture\PHPMailer-master\src\SMTP.php';

$mail = new PHPMailer(true);



try {
    // Configure SMTP settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'sanketnivate2k18@gmail.com';
    $mail->Password = "iali rmxa faqy xrsa";
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 25;

    // Recipient information
    $mail->setFrom('sanketnivate2k18@gmail.com', 'sanketnivate2k18@gmail.com');
    $mail->addAddress('sktniwate@gmail.com', 'demo');
    $mail->addReplyTo('sanketnivate2k18@gmail.com', 'labdemo');

    


    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'Test Email from Localhost';
    $mail->Body    = 'This is a test email sent from localhost using PHPMailer and Gmail SMTP.';

    $mail->send();
    echo 'Email sent successfully';
} catch (Exception $e) {
    echo 'Failed to send email: ', $mail->ErrorInfo;
}