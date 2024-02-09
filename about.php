<?php 

session_start();


if (!isset($_SESSION["uname"])&& !isset($_SESSION["pass"])) {
  header("Location:login.html");
}




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>About</title>
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
                            <a class="nav-link" href="i.php" aria-current="page">Home </a>
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
                            <a class="nav-link" href="about.php" style="color: rgb(255, 123, 0)">About</a>
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
                                aria-haspopup="true" aria-expanded="false">Brands</a>
                            <div class="dropdown-menu px-2" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="#"><b>Brands</b></a>
                                <a class="nav-link pb-1" href="Varaschin.php">Varaschin</a>
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
        <!-- About start -->
        <h1 style="color: #ffffff; background-color: #2f4858; border-bottom: #333" class="display-5 fw-bold py-5">
            About
        </h1>
        <br />
        <br />
        <div>
            <div class="container-sm">
                <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true"
                            aria-label="First slide"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img src="Images/gallary1.jpg" class="sd-block" alt="First slide" width="100%"
                                height="100%" />
                            <div class="carousel-caption d-none d-md-block">
                                <h3>About</h3>
                                <p>
                                    We are humbled to have touched the lives of millions of
                                    people with our range of world class home and office
                                    furniture, innovative laminates, sturdy designer doors,
                                    exquisite veneers and top-grade plywood..
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="text-center">
            <div class="container">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    class="img-fluid"
                    src="Images/gallary1.jpg"
                    width="100%"
                    height="100%"
                    alt="gallary1"
                  />
                  <svg
                    class="bd-placeholder-img"
                    width="100%"
                    height="100%"
                    xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true"
                    preserveaspectratio="xMidYMid slice"
                    focusable="false"
                  >
                    <rect
                      width="100%"
                      height="100%"
                      fill="var(--bs-secondary-color)"
                    ></rect>
                  </svg>
                  <div class="container">
                    <div class="carousel-caption">
                      <h1
                        style="
                          color: rgb(255, 255, 255);
                          font-weight: bold;
                          text-transform: uppercase;
                          letter-spacing: 2px;
                        "
                      >
                        About
                      </h1>
                      <p style="color: rgb(255, 255, 255)">
                        We are humbled to have touched the lives of millions of
                        people with our range of world class home and office
                        furniture, innovative laminates, sturdy designer doors,
                        exquisite veneers and top-grade plywood..
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
            </div>
            <br />
            <br />
            <div style="
            background-color: #f9fafa;
            padding-top: 20px;
            padding-bottom: 20px;
          ">
                <main class="form-signin w-100 m-auto">
                    <div>
                        <div class="login-container center">
                            <form action="" method="">
                                <div class="form-group">
                                    <div class="dropdown position bottom-0 end-0 mb-3 me-3 bd-mode-toggle">

                                    </div>
                                </div>
                                <section class="bg-main bg-color hero-section">
                                    <div class="container">
                                        <div class="row">
                                            <div
                                                class="col-12 col-md-12 col-lg-6 d-flex flex-column justify-content align-items-start">
                                                <h1>Welcome to Home Furniture</h1>
                                                <p>
                                                    <u><b>Our Story</b></u>
                                                </p>
                                                <p>
                                                    Founded in 2023, Home Furniture has evolved from a
                                                    small, family-owned workshop into a renowned
                                                    furniture brand known for its exquisite pieces. Our
                                                    journey began with a simple idea: to create
                                                    furniture that combines timeless elegance with
                                                    modern sensibility. Over the years, we've stayed
                                                    true to this vision while continuously adapting to
                                                    the ever-changing needs and tastes of our customers.
                                                </p>
                                                <p>
                                                    <u><b>Craftsmanship</b></u>
                                                </p>
                                                <p>
                                                    At the heart of our company is a team of skilled
                                                    artisans who take pride in their work. Each piece of
                                                    furniture is meticulously handcrafted using the
                                                    finest materials, ensuring durability and longevity.
                                                    We believe in the power of quality craftsmanship,
                                                    and it shows in every detail of our creations.
                                                </p>
                                                <p>
                                                    <u><b>Design Excellence</b></u>
                                                </p>
                                                <p>
                                                    Our design philosophy revolves around blending
                                                    aesthetics and functionality seamlessly.
                                                </p>
                                            </div>
                                            <div class="col-12 col-md-12 col-lg-6">
                                                <div class="text-center">
                                                    <div>
                                                        <img src="Images/nnn.jpg" class="img-fluid" alt="..." />
                                                    </div>
                                                    <br />
                                                    <br />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </form>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <!-- About end -->

        <!-- customer review start -->
        <div class="container-fluid py-4" style="
          background-color: bisque;
          padding-top: 70px;
          padding-bottom: 10px;
          border-top: black;
          border: solid;
          border-width: 1px;
        ">
            <div class="row">
                <div class="col-lg-4 text-center">
                    <img class="img" src="Images/k1.jpg" alt="Gift 1" />
                    <h2 class="py-2">Mr. Joan</h2>
                    <p>
                        The website offers an incredible range of furniture styles to suit
                        every taste and budget. Whether you're looking for modern,
                        classic, or eclectic pieces, they've got you covered.
                    </p>
                </div>
                <div class="col-lg-4 py-2 text-center">
                    <img class="img" src="Images/k.jpg" alt="Gift 1" />
                    <h2 class="py-2">Merry</h2>
                    <p>
                        Navigating the website was a breeze. It's well-organized, with
                        clear categories and filters that make it easy to find exactly
                        what you're looking for. Plus, the high-quality images and
                        detailed product descriptions helped me make informed decisions.
                    </p>
                </div>
                <div class="col-lg-4 py-2 text-center">
                    <img class="img" src="Images/k3.jpg" alt="Gift 1" />
                    <h2 class="py-2">Ronny</h2>
                    <p>
                        I had a few questions about specific items, and their customer
                        support team was quick to respond and very helpful. They even
                        provided recommendations based on my preferences.
                    </p>
                </div>
            </div>
        </div>
        <!-- customer review end -->
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