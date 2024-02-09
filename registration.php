<?php 

include('config.php');


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\furniture\PHPMailer-master\src\Exception.php';
require 'C:\xampp\htdocs\furniture\PHPMailer-master\src\PHPMailer.php';
require 'C:\xampp\htdocs\furniture\PHPMailer-master\src\SMTP.php';


$name=$_POST["name"];
$uname=$_POST["uname"];
$uemail=$_POST["email"];
$pass=$_POST["pass"];


$sql = "INSERT INTO `users`(`id`, `name`, `username`, `email`, `password`) VALUES (NULL, '$name', '$uname', '$uemail', '$pass');";

if (mysqli_query($conn,$sql)) {

$email='sanketnivate2k18@gmail.com';
$password='iali rmxa faqy xrsa';    

$mail = new PHPMailer(true);



try {
    // Configure SMTP settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = $email;
    $mail->Password = $password;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 25;

    // Recipient information
    $mail->setFrom($email, 'Home Furniture');
    $mail->addAddress($uemail, $name);
    $mail->addReplyTo($email, 'Home Furniture');

    



    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'Welcome to the Home Furniture Family!';
    $mail->Body    = ' Thank the customer for subscribing and offer a discount on their first purchase. Introduce your brand and highlight your unique selling points.';

    $mail->send();
    echo 'Email sent successfully';
    header("Location:login.html");
} catch (Exception $e) {
    echo 'Failed to send email: ', $mail->ErrorInfo;
}

} else {
    echo "Something went wrong". mysqli_error($conn);
}
mysqli_close($conn);



?>