<?php 

session_start();


if (!isset($_SESSION["uname"])&& !isset($_SESSION["pass"])) {
  header("Location:login.html");
}




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gallary</title>
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

    .img-gallary {
        border-radius: 5px !important;
        width: 300px !important;
        height: 300px !important;
    }

    /* Define different CSS animations for the gallery items */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInRight {
        from {
            opacity: 0;
            transform: translateX(-20px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadeInLeft {
        from {
            opacity: 0;
            transform: translateX(20px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    /* Apply the animations to the respective gallery item classes */
    .item-fadeInUp {
        animation: fadeInUp 1s ease-in-out;
    }

    .item-fadeInRight {
        animation: fadeInRight 1s ease-in-out;
    }

    .item-fadeInLeft {
        animation: fadeInLeft 1s ease-in-out;
    }

    .testimonial-container {
        max-width: 600px;
        overflow: hidden;
        border: 1px solid #ddd;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    .testimonial-slider {
        display: flex;
        transition: transform 0.5s ease-in-out;
    }

    .testimonial-card {
        flex: 0 0 100%;
        padding: 20px;
        box-sizing: border-box;
        text-align: center;
        background-color: #fff;
    }

    .testimonial-card img {
        max-width: 200px;
        border-radius: 20%;
        margin-bottom: 10px;
    }

    .testimonial-author {
        font-weight: bold;
        margin-bottom: 5px;
    }

    .testimonial-position {
        color: #777;
        margin-bottom: 20px;
    }

    .testimonial-quote {
        font-style: italic;
    }

    .slider-btn {
        cursor: pointer;
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        margin: 10px;
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
                            <a class="nav-link" href="gallary.php" style="color: rgb(255, 123, 0)">Gallary</a>
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

    <main>
        <div class="position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
            <a class="text-white nav-link" href="order.html"><button
                    class="btn btn-bd-primary py-2 d-flex align-items-center"><span class="" id="bd-theme-text">Order
                        For Bulk</span></button></a>
        </div>
        <!-- contact start -->
        <h1 style="color: #ffffff; background-color: #2f4858; border-bottom: #333" class="display-5 fw-bold py-5">
            Gallary
        </h1>
        <br />
        <br />

        <div class="container">

            <div style="
              background-color: rgba(255, 228, 196, 0.312);
              padding-top: 20px;
              padding-bottom: 20px;
            ">
                <div class="row mb-3 text-center">
                    <div class="col-6 col-sm-4 themed-grid-col pb-2 item-fadeInUp">
                        <img class="img-gallary img-fluid" src="Images/gallary1.jpg" alt="" />
                    </div>
                    <div class="col-6 col-sm-4 themed-grid-col item-fadeInRight">
                        <img class="img-gallary img-fluid" src="Images/galary6.jpg" alt="" />
                    </div>
                    <div class="col-6 col-sm-4 themed-grid-col item-fadeInLeft">
                        <img class="img-gallary img-fluid" src="Images/gallary1.jpg" alt="" />
                    </div>
                </div>
                <div class="row mb-3 text-center">
                    <div class="col-sm-6 col-lg-8 themed-grid-col pb-2 item-fadeInRight">
                        <img class="img-gallary img-fluid" src="Images/galary7.jpg" alt="" />
                    </div>
                    <div class="col-6 col-lg-4 themed-grid-col item-fadeInLeft">
                        <img class="img-gallary img-fluid" src="Images/galary7.jpg" alt="" />
                    </div>
                </div>
                <div class="row mb-3 text-center">
                    <div class="col-6 col-sm-4 themed-grid-col pb-2 item-fadeInUp">
                        <img class="img-gallary img-fluid" src="Images/gallary1.jpg" alt="" />
                    </div>
                    <div class="col-6 col-sm-4 themed-grid-col item-fadeInRight">
                        <img class="img-gallary img-fluid" src="Images/galary6.jpg" alt="" />
                    </div>
                    <div class="col-6 col-sm-4 themed-grid-col item-fadeInLeft">
                        <img class="img-gallary img-fluid" src="Images/gallary1.jpg" alt="" />
                    </div>
                </div>
                <div class="row mb-3 text-center">
                    <div class="col-sm-6 col-lg-8 themed-grid-col pb-2 item-fadeInRight">
                        <img class="img-gallary img-fluid" src="Images/galary7.jpg" alt="" />
                    </div>
                    <div class="col-6 col-lg-4 themed-grid-col item-fadeInLeft">
                        <img class="img-gallary img-fluid" src="Images/galary7.jpg" alt="" />
                    </div>
                </div>
                <div class="row mb-3 text-center">
                    <div class="col-6 col-sm-4 themed-grid-col pb-2 item-fadeInUp">
                        <img class="img-gallary img-fluid" src="Images/gallary1.jpg" alt="" />
                    </div>
                    <div class="col-6 col-sm-4 themed-grid-col item-fadeInRight">
                        <img class="img-gallary img-fluid" src="Images/galary6.jpg" alt="" />
                    </div>
                    <div class="col-6 col-sm-4 themed-grid-col item-fadeInLeft">
                        <img class="img-gallary img-fluid" src="Images/gallary1.jpg" alt="" />
                    </div>
                </div>
                <div class="row mb-3 text-center">
                    <div class="col-sm-6 col-lg-8 themed-grid-col pb-2 item-fadeInRight">
                        <img class="img-gallary img-fluid" src="Images/galary7.jpg" alt="" />
                    </div>
                    <div class="col-6 col-lg-4 themed-grid-col item-fadeInLeft">
                        <img class="img-gallary img-fluid" src="Images/galary7.jpg" alt="" />
                    </div>
                </div>
            </div>
        </div>


        <!-- contact end -->
        <!-- customer review start -->
        <div class="container-fluid py-4" style="
          background-color: bisque;
          padding-top: 70px;
          padding-bottom: 10px;
          border-top: black;
          border: solid;
          border-width: 1px;
        ">
            <h2 class="display-5 fw-bold text-center mb-0 p-0">Customer Review</h2>
            <br>
            <center>
                <div class="testimonial-container">
                    <div class="testimonial-slider" id="testimonialSlider">
                        <!-- Testimonial Cards -->
                        <div class="testimonial-card">
                            <img src="Images/k1.jpg" alt="User 1" />
                            <div class="testimonial-author">John Doe</div>
                            <!-- <div class="testimonial-position">CEO, Company ABC</div> -->
                            <p class="testimonial-quote">
                                " The website offers an incredible range of furniture styles to suit
                                every taste and budget. Whether you're looking for modern,
                                classic, or eclectic pieces, they've got you covered."
                            </p>
                        </div>

                        <div class="testimonial-card">
                            <img src="Images/k3.jpg" alt="User 2" />
                            <div class="testimonial-author">Jane Smith</div>
                            <!-- <div class="testimonial-position">Designer, XYZ Studio</div> -->
                            <p class="testimonial-quote">
                                " Navigating the website was a breeze. It's well-organized, with
                                clear categories and filters that make it easy to find exactly
                                what you're looking for. Plus, the high-quality images and
                                detailed product descriptions helped me make informed decisions."
                            </p>
                        </div>
                        <div class="testimonial-card">
                            <img src="Images/k.jpg" alt="User 2" />
                            <div class="testimonial-author">Jane Smith</div>
                            <!-- <div class="testimonial-position">Designer, XYZ Studio</div> -->
                            <p class="testimonial-quote">
                                " I had a few questions about specific items, and their customer
                                support team was quick to respond and very helpful. They even
                                provided recommendations based on my preferences."
                            </p>
                        </div>
                        <!-- Add more testimonial cards as needed -->
            </center>


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
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Get all gallery items
        var galleryItems = document.querySelectorAll("#gallery-section > div");

        // Attach a scroll event to the window
        window.addEventListener("scroll", function() {
            // Iterate over each gallery item
            galleryItems.forEach(function(item) {
                // Check if the item is in the viewport
                var rect = item.getBoundingClientRect();
                var isVisible = rect.top >= 0 && rect.bottom <= window.innerHeight;

                // Apply the respective animation class if the item is in the viewport
                if (isVisible) {
                    var animationClass = item.classList[
                        2]; // Assumes only two additional classes are present
                    item.classList.add(animationClass);
                }
            });
        });
    });
    </script>
    <script>
    // JavaScript for Testimonial Slider
    let currentSlide = 0;
    const intervalTime = 5000; // Change this value to set the interval time in milliseconds

    function showSlide(slideIndex) {
        const testimonialSlider = document.getElementById("testimonialSlider");
        const totalSlides =
            document.querySelectorAll(".testimonial-card").length;
        if (slideIndex >= totalSlides) {
            currentSlide = 0;
        } else if (slideIndex < 0) {
            currentSlide = totalSlides - 1;
        } else {
            currentSlide = slideIndex;
        }

        const translateValue = -currentSlide * 100 + "%";
        testimonialSlider.style.transform =
            "translateX(" + translateValue + ")";
    }

    function nextSlide() {
        showSlide(currentSlide + 1);
    }

    function prevSlide() {
        showSlide(currentSlide - 1);
    }

    // Auto play the slider
    setInterval(nextSlide, intervalTime);
    </script>
</body>

</html>