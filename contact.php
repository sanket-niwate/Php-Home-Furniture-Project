<?php


session_start();


if (!isset($_SESSION["uname"])&& !isset($_SESSION["pass"])) {
  header("Location:login.html");
}


// Replace these variables with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "furniture";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs to prevent SQL injection
    $name = $conn->real_escape_string($_POST['name']);
    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $text = $conn->real_escape_string($_POST['text']);

    // Insert data into the database
    $sql = "INSERT INTO your_table_name (name, username, email, text) VALUES ('$name', '$username', '$email', '$text')";

    if ($conn->query($sql) === TRUE) {
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
                <h2>Yours query sent successfully</h2>
                <a href="javascript:history.back()" class="back-button">Back</a>
            </div>
        
        </body>
        
        </html>
        ';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();

?>