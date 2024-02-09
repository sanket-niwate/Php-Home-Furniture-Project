<?php 
include('config.php');


$id = $_GET["id"];

$sql = "DELETE FROM `productstable` WHERE `products`.`id` = $id";

if (mysqli_query($conn,$sql)) {
     header("Location:productmanagetable.php");
} else {
    echo "Something went wrong". mysqli_error($conn);
}
mysqli_close($conn);



?>