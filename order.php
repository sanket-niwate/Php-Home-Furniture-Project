<?php 

include('config.php');


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\furniture\PHPMailer-master\src\Exception.php';
require 'C:\xampp\htdocs\furniture\PHPMailer-master\src\PHPMailer.php';
require 'C:\xampp\htdocs\furniture\PHPMailer-master\src\SMTP.php';

$name = $_POST["name"];
$username = $_POST["uname"];
$city = $_POST["City"];
$phone = $_POST["unum"];
$email = $_POST["email"];
$userType = $_POST["userType"];


$sql = "INSERT INTO  your_name (name, username, city, phone, email, user_type) VALUES ('$name', '$username', '$city', '$phone', '$email', '$userType')";

if (mysqli_query($conn,$sql)) {

$uemail='sanketnivate2k18@gmail.com';
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
    $mail->setFrom($uemail, 'Home Furniture');
    $mail->addAddress($email, $name);
    $mail->addReplyTo($uemail, 'Home Furniture');

    



    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'Welcome to the Home Furniture Family!';
    $mail->Body    = ' Thank the customer for subscribing and offer a discount on their first purchase. Introduce your brand and highlight your unique selling points.';

    $mail->send();
    echo '<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Email Sent</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f4f4f4;
                text-align: center;
            }
    
            .success-message {
                background-color: #2f4858;
                color: white;
                padding: 20px;
                margin: 20% auto;
                max-width: 400px;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }
    
            .back-button {
                background-color:  rgb(255, 123, 0);
                color: white;
                padding: 10px 20px;
                text-decoration: none;
                border-radius: 5px;
                margin-top: 20px;
                display: inline-block;
            }
    
            @media only screen and (max-width: 600px) {
                .success-message {
                    margin: 10% auto;
                }
            }
        </style>
    </head>
    
    <body>
    
        <div class="success-message">
            <h2>Your order details sent successfully</h2>
            <a href="javascript:history.back()" class="back-button">Back</a>
        </div>
    
    </body>
    
    </html>
    ';
    header("");
} catch (Exception $e) {
    echo 'Failed to send email: ', $mail->ErrorInfo;
}

} else {
    echo "Something went wrong". mysqli_error($conn);
}
mysqli_close($conn);



?>