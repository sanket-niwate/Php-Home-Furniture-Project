<?php
session_start();

if (isset($_GET['index'])) {
    $index = $_GET['index'];

    if (isset($_SESSION['cart'][$index])) {
        // Remove the selected item from the cart
        unset($_SESSION['cart'][$index]);

        // Reset array keys to maintain continuous indexing
        $_SESSION['cart'] = array_values($_SESSION['cart']);
    }

    // Redirect back to the cart page
    header("Location: cart.php");
    exit();
} else {
    echo "Invalid request";
}
?>