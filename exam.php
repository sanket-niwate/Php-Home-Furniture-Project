<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Add Product</title>
</head>

<body>

    <div class="container mt-5">
        <h2>Add Product</h2>

        <?php
    // Handle form submission and add product to the database
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Connect to MySQL database
        $servername = "your_db_host";
        $username = "your_db_username";
        $password = "your_db_password";
        $dbname = "your_db_name";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Get form data
        $product_name = mysqli_real_escape_string($conn, $_POST["product_name"]);
        $product_description = mysqli_real_escape_string($conn, $_POST["product_description"]);
        $product_price = mysqli_real_escape_string($conn, $_POST["product_price"]);

        // Handle image upload
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["product_image"]["name"]);
        move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file);

        // Insert product into the database
        $sql = "INSERT INTO products (product_name, product_description, product_price, product_image) 
                VALUES ('$product_name', '$product_description', '$product_price', '$target_file')";

        if (mysqli_query($conn, $sql)) {
            echo "<div class='alert alert-success' role='alert'>
                    Product added successfully!
                 </div>";
        } else {
            echo "<div class='alert alert-danger' role='alert'>
                    Error: " . $sql . "<br>" . mysqli_error($conn) . "
                 </div>";
        }

        mysqli_close($conn);
    }
    ?>

        <!-- Add Product Form -->
        <form action="add_product.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="product_name">Product Name:</label>
                <input type="text" class="form-control" name="product_name" required>
            </div>
            <div class="form-group">
                <label for="product_description">Description:</label>
                <textarea class="form-control" name="product_description" required></textarea>
            </div>
            <div class="form-group">
                <label for="product_price">Price:</label>
                <input type="number" class="form-control" name="product_price" required>
            </div>
            <div class="form-group">
                <label for="product_image">Image:</label>
                <input type="file" class="form-control" name="product_image" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Product</button>
        </form>

        <hr>

        <!-- Display Products -->
        <h2 class="mt-4">Product List</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'fetch_products_admin.php'; ?>
            </tbody>
        </table>
    </div>

</body>

</html>