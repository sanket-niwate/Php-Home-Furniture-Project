<?php
session_start();

if (isset($_GET['index'])) {
    $index = $_GET['index'];

    if (isset($_SESSION['cart'][$index])) {
        $product = $_SESSION['cart'][$index];

        // Add code to store information on the admin page
        storeToAdminPage($product);

        // Remove the product from the cart after processing the purchase
        unset($_SESSION['cart'][$index]);

        // Redirect back to the cart page or any other page as needed
        header('Location: cart.php');
        exit();
    }
}

function storeToAdminPage($product)
{
    // You can customize this function to store information on the admin page.
    // For example, store it in a database, write to a file, or send an email to the admin.
    // In this example, we'll simply display the information on the admin page.

    echo "<p>Product purchased:</p>";
    echo "<p>Name: {$product['name']}</p>";
    echo "<p>Price: ₹{$product['price']}</p>";
    echo "<hr>";
}

// Add your HTML or other code here, if needed.
?>