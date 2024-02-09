<?php 

session_start();


if (!isset($_SESSION["uname"])&& !isset($_SESSION["pass"])) {
  header("Location:login.html");
}




?>




<!DOCTYPE html>
<html lang="en">

<head>
    <title>Indoor Dining Tables</title>
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
                                <a class="nav-link pb-1" style="color: rgb(255, 123, 0)"
                                    href="Tacchini.php">Tacchini</a>
                                <a class="nav-link pb-1" href="point.php">Point1920</a>
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
            TACCHINI
        </h1>
        <div class="container-sm">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <img src="https://ergonomia.com/cdn/shop/files/Tacchini-Julep-Sofa-03.jpg?v=1669852373" alt=""
                        class="img-fluid" />
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p class="pt-4">
                        TACCHINI There are stories that are told through the immediacy of
                        an object: domesticated materials speak of the hands that have
                        shaped them, the shape suggests technological innovation and a
                        culture of experience, while the function reveals the poetry of
                        the design’s beau geste.
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
                        The design is Italian, the rest is production. And in Italy,
                        design companies bear the names of the families that founded the
                        brands. Like Tacchini, created in 1967 by Antonio, when
                        production, too, was almost entirely Italian, and the most poetic
                        and soul-stirring passages in the story of design were written.
                        Naturally in time the children become the heirs, and the new
                        founders, in a rationale of continuous updating and redefinition
                        of the underlying idea, and that is what is actually handed down.
                        Equally naturally, those who frequent the family become a part of
                        it: team members, consultants, suppliers, employees, workers and
                        clients. Still today, in this family, the strength of the idea is
                        central to every creative process, in a logical process of
                        evolution, from the analysis of the idea to the three dimensions
                        of the object, before ultimately becoming the essence of living.
                        This ongoing process ensures a sense of connection with
                        contemporary style, which is then further enhanced by the choice
                        of quality materials and leading-edge technology, and always
                        referencing an all-important tradition, so as to avoid the danger
                        of confusing style with fleeting fashions and design with simple
                        mass production. Inevitably, the story of a family is reflected in
                        the places they inhabit: the headquarters of a company mirrors the
                        people who work there and the philosophy to which they aspire.
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
                        <img class="card-img-top" src="Images/inlo1.png" alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">JULEP Lounge Chair</h4>


                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img class="card-img-top" src="Images/inlo2.png" alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">OLIVO Lounge Chair</h4>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img class="card-img-top" src="Images/inlo3.png" alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">LAGOA Lounge Chair</h4>
                            <p class="card-text text-center text-white" style="background-color: #ffd166">
                                In Stock
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img class="card-img-top" src="Images/inlo4.png" alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">SESANN Lounge Chair</h4>


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
                        <img class="card-img-top" src="Images/inlo5.png" alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">ORSOLA Lounge Chair</h4>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img class="card-img-top" src="Images/inlo6.png" alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">LE MURA Lounge Chair</h4>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img class="card-img-top" src="Images/inlo7.png" alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">LIMA Lounge Chair</h4>


                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img class="card-img-top" src="Images/inlo8.png" alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">BELLE Lounge Chair</h4>
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
                        <img class="card-img-top" src="Images/inlo9.png" alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">STRIKE RELAX</h4>
                            <p class="card-text text-center text-white" style="background-color: #ffd166">
                                New Product
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img class="card-img-top" src="Images/inlo10.jpg" alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">COSTELA Lounge Chair</h4>


                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img class="card-img-top" src="Images/inlo11.jpg" alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">JACKET Lounge Chair</h4>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img class="card-img-top" src="Images/inlo12.jpg" alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">GIULIA Lounge Chair</h4>


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
                        <img class="card-img-top" src="Images/inlo13.jpg" alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">GIULIA Lounge Chair</h4>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img class="card-img-top" src="Images/inlo14.jpg" alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">BLUME Lounge Armchair</h4>


                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img class="card-img-top" src="Images/inlo15.jpg" alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">ILA Lounge Armchair w/ Wooden legs</h4>


                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img class="card-img-top" src="Images/inlo16.jpg" alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">
                                ILA Lounge Armchair with Wooden legs w/o Headrest
                            </h4>


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