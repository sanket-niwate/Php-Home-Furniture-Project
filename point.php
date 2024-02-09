<?php 

session_start();


if (!isset($_SESSION["uname"])&& !isset($_SESSION["pass"])) {
  header("Location:login.html");
}




?>




<!DOCTYPE html>
<html lang="en">

<head>
    <title>POINT</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <link rel="stylesheet" href="demo.css" />
    <link rel="shortcut icon" href="Images/images (1).png" type="image/x-icon" />
    <style>
    .navbar-nav {
        margin-left: auto;
    }

    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 90%;
    }

    h1 {
        display: block;
        font-size: 1.5em;
        margin-top: 0.83em;
        margin-bottom: 0.83em;
        margin-left: 0%;
        margin-right: 0%;
        font-weight: bold;
        text-align: center;
    }

    footer {
        background-color: #333;
        color: #fff;
    }

    .button {
        background-color: #ffd166 !important;
    }
    </style>
</head>

<body>
    <header class="sticky-top bg-white">
        <p class="py-2 text-center" style="background-color: #ffd166">
            A Slice of pretty | Up to 50% off |
            <a href="i.html" style="color: red">Click to Shop!</a>
        </p>
        <nav class="navbar navbar-expand-sm">
            <div class="container-sm border-bottom pb-3">
                <img class="img-fluid pe-2" width="50" height="50" src="Images/images (1).png" alt="" />
                <span class="fs-4" style="
              color: #2f4858;
              font-weight: bold;
              text-transform: uppercase;
              letter-spacing: 2px;
              font-family: Arial, sans-serif;
            ">Home
                </span>
                &nbsp;&nbsp;
                <span class="fs-4" style="
              color: rgb(255, 123, 0);
              font-weight: bold;
              text-transform: uppercase;
              letter-spacing: 2px;
              font-family: Arial, sans-serif;
            ">Furniture</span>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="i.php" aria-current="page"
                                style="color: rgb(255, 123, 0)">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.php">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="gallary.php">Gallary</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Products</a>
                            <div class="dropdown-menu px-2" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="#"><b>Products</b></a>
                                <hr class="p-0">
                                <a class="nav-link pt-0 active" href="pview.php">Chair</a> <a class="nav-link pb-1"
                                    href="pviewsofa.php">Sofas</a> <a class="nav-link pb-1"
                                    href="pviewtable.php">Tables</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" style="color: rgb(255, 123, 0)">Brands</a>
                            <div class="dropdown-menu px-2" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="#"><b>Brands</b></a>
                                <a class="nav-link pb-1" href="Varaschin.php">Varaschin</a>
                                <a class="nav-link pb-1" href="Tacchini.php">Tacchini</a>
                                <a class="nav-link pb-1" href="point.php" style="color: rgb(255, 123, 0)">Point1920</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- navbar start -->

    <main>
        <div class="position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
            <a class="text-white nav-link" href="order.html"><button
                    class="btn btn-bd-primary py-2 d-flex align-items-center"><span class="" id="bd-theme-text">Order
                        For Bulk</span></button></a>
        </div>
        <!-- contact start -->
        <h1 style="color: #ffffff; background-color: #2f4858; border-bottom: #333" class="display-5 fw-bold py-5">
            POINT
        </h1>
        <div class="container-sm">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <img src="https://ergonomia.com/cdn/shop/files/POINT_2020_6_0641_1_Small_143f96a5-b0dd-41ff-a499-26d0b9d359db.jpg?v=1669852954"
                        alt="" class="img-fluid" />
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p class="pt-4">
                        One hundred years of history and four generations of the Pons
                        family have seen POINT evolve from a small workshop founded in
                        Gata de Gorgos in 1920 to an international outdoor furniture firm
                        which is present in more than 70 countries and has 40 collections
                        and 300 products that feature in more than 1,000 interior desig
                    </p>
                </div>
            </div>
        </div>
        <div class="container-sm my-5">
            <div class="row">
                <h2 class="text-center mb-0 p-0">HISTORY</h2>
                <hr class="" style="width: 100%; color: #ff9500" />
                <div class="col">
                    <p class="">
                        From the use of rattan at the very beginning to the use of new
                        materials later on, our path has been intertwined with design. We
                        fully support professional Spanish and international designers who
                        have created products which bring together beauty, elegance,
                        luxury, and innovation.
                    </p>
                </div>
            </div>
        </div>

        <div class="container-sm">
            <div class="row g-3 py-2" style="
            color: #2f4858;
            font-weight: bold;
            letter-spacing: 1px;
            font-family: Arial, sans-serif;
          ">
                <h2 class="text-center mb-0 mt-5">BRAND COLLECTION</h2>
                <hr class="" style="width: 100%; color: #ff9500" />
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img class="card-img-top"
                            src="https://ergonomia.com/cdn/shop/files/Arki-Sofa-Plus-ASP0022_BE100E-D114_2__low_416x384.jpg?v=1683310078"
                            alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">ARKI-Sofa Plus</h4>
                            <p class="card-text text-center text-white" style="background-color: #ffd166">
                                New Product
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img class="card-img-top"
                            src="https://ergonomia.com/cdn/shop/products/POINT202042374_blanco_1_SQ_f3e33d73-1e02-4521-8f41-3e00666a82fd_416x416.jpg?v=1678757380"
                            alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">CITY 3 seater sofa SALE Item</h4>
                            <p class="card-text text-center text-white" style="background-color: #ffd166">
                                In Stock
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img class="card-img-top"
                            src="https://ergonomia.com/cdn/shop/products/POINT202070400SQ_416x416.jpg?v=1678757209"
                            alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">LONG ISLAND 3 Seater Sofa SALE Item</h4>
                            <p class="card-text text-center text-white" style="background-color: #ffd166">
                                IN Stock
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img class="card-img-top"
                            src="https://ergonomia.com/cdn/shop/products/POINT202070400_416x288.jpg?v=1677257727"
                            alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">LONG ISLAND 3 Seater Sofa</h4>


                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-3 py-2" style="
            color: #2f4858;
            font-weight: bold;
            letter-spacing: 1px;
            font-family: Arial, sans-serif;
          ">
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img class="card-img-top"
                            src="https://ergonomia.com/cdn/shop/products/POINT202070358SQ_416x416.jpg?v=1677609158"
                            alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">SUMMERSET Sofa</h4>


                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img class="card-img-top"
                            src="https://ergonomia.com/cdn/shop/products/Origin3Seater_SQ_416x416.jpg?v=1677257569"
                            alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">Origin 3 Seater Sofa</h4>


                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img class="card-img-top"
                            src="https://ergonomia.com/cdn/shop/products/Origin2Seater_SQ_416x416.jpg?v=1677257566"
                            alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">Origin 2 seater Sofa</h4>


                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img class="card-img-top"
                            src="https://ergonomia.com/cdn/shop/products/reva-sofa-curated-commercial-furniture-solutions-101433_416x416.jpg?v=1664891618"
                            alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">REVA Sofa</h4>
                            <p class="card-text text-center text-white" style="background-color: #ffd166">
                                New Product
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-3 py-2" style="
            color: #2f4858;
            font-weight: bold;
            letter-spacing: 1px;
            font-family: Arial, sans-serif;
          ">
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img class="card-img-top" src="Images/inchair.jpg" alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">Kiyumi Wood Armchair</h4>


                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img class="card-img-top"
                            src="https://ergonomia.com/cdn/shop/files/pag83_42-copia_2x_bd0df5ff-9594-4e03-9eef-a212f6fb43a3_416x416.jpg?v=1693254783"
                            alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">
                                BRISE Coffee Table Ø36.25" with Stainless Steel Base
                            </h4>


                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img class="card-img-top"
                            src="https://ergonomia.com/cdn/shop/files/gervasoni-outdoor-pag.-066_2x_4a8b7964-147a-4219-9f98-27afc868f5b2_416x416.jpg?v=1693254249"
                            alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">
                                BRISE Side table with Stainless Steel Base
                            </h4>


                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img class="card-img-top"
                            src="https://ergonomia.com/cdn/shop/files/pag83_42-copia_2x_0c368f84-5a94-410a-9123-e303f8f8c1db_416x416.jpg?v=1693253831"
                            alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">
                                BRISE Coffee Table Ø28.1" with Stainless Steel Base
                            </h4>


                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-3 py-2" style="
            color: #2f4858;
            font-weight: bold;
            letter-spacing: 1px;
            font-family: Arial, sans-serif;
          ">
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img class="card-img-top"
                            src="https://ergonomia.com/cdn/shop/files/gervasoni2023_022-023_2x_30b4d23c-77e0-43be-b7fb-8337e61b99c6_416x416.jpg?v=1693250830"
                            alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">BRISE Coffee Table Ø31.5"</h4>
                            <p class="card-text text-center text-white" style="background-color: #ffd166">
                                New Product
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img class="card-img-top"
                            src="https://ergonomia.com/cdn/shop/files/pag82_33-copia_2x_d88c92f0-4c2a-4a81-9b47-31c13cc419b6_416x416.jpg?v=1693250326"
                            alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">BRISE Coffee Table Ø28.25"</h4>


                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img class="card-img-top"
                            src="https://ergonomia.com/cdn/shop/files/pag85_34-copia_2x_c08dd0a2-7910-4264-9bf5-d0f1f9e6a3cc_416x416.jpg?v=1693250371"
                            alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">BRISE Side Table</h4>


                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img class="card-img-top"
                            src="https://ergonomia.com/cdn/shop/files/INOUT48_3_416x416.jpg?v=1692208371" alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">Inout Side table H: 17 1/4</h4>


                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- contact as end -->
        <hr />
        <!-- contact as start -->
        <div class="container-sm my-4">
            <div>
                <div class="row mb-2" style="
              color: #2f4858;
              font-weight: bold;
              letter-spacing: 1px;
              font-family: Arial, sans-serif;
            ">
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <p class="pt-3">The Company:</p>
                        <hr class="" style="width: 100%; color: #ff9500" />
                        <h6>About Us</h6>
                        <h6>Help</h6>
                        <h6>Privacy Policy</h6>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <p class="pt-3">More Information:</p>
                        <hr class="" style="width: 100%; color: #ff9500" />
                        <h6>Fees and Payment</h6>
                        <h6>Shipping & Delivery</h6>
                        <h6>Terms and Conditions</h6>
                        <h6>Warranty, Return and Refund</h6>
                        <h6>Contact Us</h6>
                        <h6>Visit Us</h6>
                        <h6>Buy In Bulk</h6>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <p class="pt-3">Explore More:</p>
                        <hr class="" style="width: 100%; color: #ff9500" />
                        <h6>Refer & Earn</h6>
                        <h6>Gift Cards</h6>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <p class="pt-3">Address:</p>
                        <hr class="" style="width: 100%; color: #ff9500" />
                        <h6>Reliance Retail Limited,</h6>
                        <h6>
                            3rd Floor, Court House, Lokmanya Tilak Marg, <br />
                            Dhobi Talao, Mumbai- 400 002,<br />
                            Maharashtra, India
                        </h6>
                    </div>
                </div>
                <hr />
                <div class="row" style="
              color: #2f4858;
              font-weight: bold;
              letter-spacing: 1px;
              font-family: Arial, sans-serif;
            ">
                    <div class="col-6">
                        <p>Connect With Us:</p>
                        <img class="p-1 img-fluid" width="40" height="40" src="Images/call-receive-svgrepo-com.png"
                            alt="" />&nbsp;
                        <img class="p-1 img-fluid" width="40" height="40" src="Images/email-1573-svgrepo-com.png"
                            alt="" />
                        <img class="p-1 img-fluid" width="40" height="40" src="Images/instagram-svgrepo-com.png"
                            alt="" />&nbsp;
                        <img class="p-1 img-fluid" width="40" height="40" src="Images/twitter-154-svgrepo-com.png"
                            alt="" />&nbsp;
                        <img class="p-1 img-fluid" width="50" height="50" src="Images/facebook-svgrepo-com.png"
                            alt="" />&nbsp;
                        <img class="p-1 img-fluid" width="35" height="35" src="Images/whatsapp-128-svgrepo-com.png"
                            alt="" />&nbsp;
                        <img class="p-1 img-fluid" width="40" height="40" src="Images/linkedin-svgrepo-com.png"
                            alt="" />&nbsp;
                        <img class="p-1 img-fluid" width="40" height="40" src="Images/youtube-168-svgrepo-com.png"
                            alt="" />&nbsp;
                        <img class="p-1 img-fluid" width="45" height="45" src="Images/telegram-svgrepo-com.png"
                            alt="" />
                    </div>
                    <div class="col-6">
                        <p>Download App:</p>
                        <img class="img-fluid py-1" width="150" height="150" src="Images/google-play-badge.jpg"
                            alt="" />
                        <img class="img-fluid py-1" width="150" height="150" src="Images/google-play-badge.jpg"
                            alt="" />
                    </div>
                </div>
            </div>
        </div>
        <!-- contact as end -->
    </main>
    <footer style="background-color: #2f4858; height: fit-content" class="p-5 mb-0">
        <div class="container pb-5">
            <div class="row">
                <div class="col-6">
                    <p>Popular Furniture Categories:</p>
                </div>
                <div class="col-6">
                    <p>
                        Bed , Beds By Design , Sofa Set , Wooden Sofa , Sofas By Design ,
                        Sofa Cum Bed , Double Bed , Single Bed , Queen Size Bed , King
                        Size Bed , Chair , Wooden Table , Study Table , Study Chair ,
                        Wardrobe , Chest of Drawers , Futon , Loveseat , Dining Table Set
                        , Dining Chair , Bookshelves , Shoe Rack , TV Units , Recliners ,
                        Furniture , Office Furniture , Office Table , Office Chair , 2
                        Seater Sofa , TV Cupboard , TV Showcase , TV Stand , Center Table
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p>Shop Furniture By Room:</p>
                </div>
                <div class="col-6">
                    <p>
                        Living Room Furniture , Bedroom Furniture , Dining Room Furniture
                        , Study Room Furniture , Bar Furniture , Balcony Furniture
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p>Popular Decor Categories:</p>
                </div>
                <div class="col-6">
                    <p>
                        Home Decor , Carpets , Mirrors , Study Lamps , Table Lamps , Bed
                        Sheets , Floor Lamps , Wall Lights , Lighting , Ceiling Lights ,
                        Quilt , Wall Decor , Wall Mirror , Table Decor , Table Cover ,
                        Table Napkin , Table Mat , Cushion Cover , Table Runners , Home
                        Furnishing , Wall Art , Showpiece , Artificial Plants , Photo
                        Frame , Candle Stand , Clocks , Wall Clocks , Festive Lights ,
                        Candles , Bath Mat , Vases , Flower Vase , Bathroom Accessories ,
                        Bathroom Mirrors
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p>We Accept:</p>
                </div>
                <div class="col-6">
                    <img class="img-fluid" src="Images/card_img.png" alt="" />
                </div>
            </div>
        </div>
        <p class="text-center">&copy; 2023 Home Furniture</p>
    </footer>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>