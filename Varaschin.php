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
                                <a class="nav-link pb-1" style="color: rgb(255, 123, 0)"
                                    href="Varaschin.php">Varaschin</a>
                                <a class="nav-link pb-1" href="Tacchini.php">Tacchini</a>
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
            VARASCHIN OUTDOOR THERAPY
        </h1>
        <div class="container-sm">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <img src="https://ergonomia.com/cdn/shop/files/varaschin_emmacross_tavolino_Siena7099-1_16_9.jpg?v=1669741884"
                        alt="" class="img-fluid" />
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p class="pt-4">
                        Varaschin has been making outdoor furniture elements and
                        accessories since 1969. The Italian manufacturer's expertise is
                        based on a deep knowledge of craftsmanship, and is at the origin
                        of our manufacturing skill. Their design stems from a constant
                        comparison with the most evolved stylistic scenarios, as befits a
                        brand
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
                        The Italian manufacturer's expertise is based on a deep knowledge
                        of craftsmanship, and is at the origin of our manufacturing skill.
                        Their design stems from a constant comparison with the most
                        evolved stylistic scenarios, as befits a brand deeply rooted in
                        contemporary desires. The result of Varaschin's work can be
                        admired and touched by hand in products that stand out both for
                        the ability to perfectly combine form and function while
                        maintaining comfort at the center of the design, and for the
                        special attention that, from conception to construction, is
                        reserved for attention to detail, the value of which reflects the
                        uncompromising quality of the whole. The distinctive sign of their
                        approach is that drawn with the pencil of the best Italian and
                        international design, to whose exponents they entrust the task of
                        transforming the Varaschin philosophy, summarized in the concept
                        of Outdoor Therapy, into elements and furnishing accessories that,
                        through an original and elegant essentiality, skillfully
                        harmonizing the exteriors with the interiors, they give everyday
                        life a note of exceptionality. “Be the European benchmark for
                        qualified outdoor furniture. We inspire people to live in an
                        outdoor environment that is as close to nature as possible, and
                        that ensures a high level of comfort, well-being and conviviality.
                        We offer a new lifestyle, in which beauty and sustainability
                        coexist in perfect harmony. “Our mission is to make it easier for
                        people to live well in an outdoor environment. A lifestyle that
                        makes it possible to be relaxed, peaceful and achieve an optimal
                        psychological and physical well-being.
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
                            src="https://ergonomia.com/cdn/shop/products/cricket-lounge-chair-curated-commercial-furniture-solutions-865083_9d48f750-d05f-43cc-8c71-cebba3f254c8_352x352.jpg?v=1678912032"
                            alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">CRICKET Lounge Chair SALE</h4>
                            <p class="card-text text-center text-white" style="background-color: #ffd166">
                                New Product
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img class="card-img-top"
                            src="https://ergonomia.com/cdn/shop/products/cricket-stool-curated-commercial-furniture-solutions-544451_cb636f06-257f-473f-aae2-a89d84d6847b_352x352.jpg?v=1678910582"
                            alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">CRICKET High Bar Stool SALE</h4>
                            <p class="card-text text-center text-white" style="background-color: #ffd166">
                                New Product
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img class="card-img-top"
                            src="https://ergonomia.com/cdn/shop/products/noss-high-bar-stool-curated-commercial-furniture-solutions-433910_42d79335-ced2-4c2b-bfeb-c067e39b2a95_352x352.jpg?v=1678842188"
                            alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">Noss High Bar Stool SALE</h4>


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