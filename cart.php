<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Shopping Cart</title>
    <!-- Add your stylesheet and other meta tags as needed -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <header>
        <!-- Place your header content here -->
    </header>

    <main>
        <div class="container">
            <h2>Shopping Cart</h2>

            <?php
           if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {

                echo "<table class='table table-bordered table-hover'>
    <thead>
        <tr>
            <th scope='col'>Product</th>
            <th scope='col'>Name</th>
            <th scope='col'>Price</th>
            <th scope='col'>Remove</th>
            <th scope='col'>Buy</th>
        </tr>
    </thead>
    <tbody>";


                    foreach ($_SESSION['cart'] as $index => $product) {

                    echo "<tr>
                    <td>
                        <img src='products/{$product['image']}' alt='Product Image' class='img-thumbnail' width='100'>
                    </td>
                    <td>{$product['name']}</td>
                    <td>₹{$product['price']}</td>
                    <td><a href='remove_from_cart.php?index={$index}' class='btn btn-danger'>Remove</a></td>
                    <td><a href='checkout.php?index={$index}' class='btn btn-success'>Buy</a></td>
                </tr>";
            
                }

                echo "</tbody></table>";
            } else {
                echo "<p class='alert alert-info'>Your cart is empty.</p>";
            }
            
            ?>
        </div>

    </main>

    <footer>
        <!-- Place your footer content here -->
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-6dt1QVIEYNxdx2Y1QH3jslUrV/ZxZl3+GFX5SwExVHfhQJ74uUuTvIGZS7UnCiRM" crossorigin="anonymous">
    </script>
</body>

</html>