<?php 

session_start();

include('config.php');

$uname=$_POST["uname"];
$pass=$_POST["pass"];



$sql = "SELECT * FROM `users` WHERE `username`='$uname' AND `password`='$pass'";
$result = mysqli_query($conn,$sql);



if (mysqli_num_rows($result)>0) {
  $_SESSION["uname"] = $uname;
  $_SESSION["pass"] = $pass;
  header("Location:i.php");
} else {
  header("Location:error.html");
}
mysqli_close($conn);



?>