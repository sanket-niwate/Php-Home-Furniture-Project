<?php
session_start();
include('config.php');

if (isset($_GET['id'])) {
    $productId = $_GET['id'];

    $sql = "SELECT * FROM `products` WHERE `id` = $productId";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        $productDetails = [
            'id' => $row['id'],
            'name' => $row['name'],
            'price' => $row['sp'],
            'image' => $row['image']
        ];

        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        $_SESSION['cart'][] = $productDetails;

        // Display pop-up notification using JavaScript
        echo "<script>
                alert('Product added to the cart: {$row['name']}');
                window.location.href = 'pview.php';
              </script>";
        exit();
    } else {
        echo "Product not found";
    }

    mysqli_close($conn);
} else {
    echo "Invalid product ID";
}
?>