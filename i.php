<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title><!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="demo.css">
    <link rel="shortcut icon" href="Images/images (1).png" type="image/x-icon">
    <link rel="stylesheet" href="testimo.css">
    <style>
    .navbar-nav {
        margin-left: auto;
    }

    footer {
        background-color: #333;
        color: #fff;
    }

    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, 0.1);
        border: solid rgba(0, 0, 0, 0.15);
        border-width: 1px 0;
        box-shadow: inset 0 0.5em 1.5em rgba(0, 0, 0, 0.1),
            inset 0 0.125em 0.5em rgba(0, 0, 0, 0.15);
    }

    .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
    }

    .bi {
        vertical-align: -0.125em;
        fill: currentColor;
    }

    .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
    }

    .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
    }

    .btn-bd-primary {
        --bd-violet-bg: rgb(255, 123, 0);
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: rgb(255, 123, 0);
        --bs-btn-hover-border-color: rgb(255, 123, 0);
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: rgb(255, 123, 0);
        --bs-btn-active-border-color: rgb(255, 123, 0);
    }

    .bd-mode-toggle {
        z-index: 1500;
    }

    .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
    }

    .image-container {
        position: relative;
        overflow: hidden;
    }

    .image-container img {
        transition: transform 0.3s ease-in-out;
    }

    .image-container:hover img {
        transform: scale(1.2);
    }
    </style>
</head>

<body>
    <header class="sticky-top bg-white">
        <p class="py-2 text-center" style="background-color: #ffd166">A Slice of pretty | Up to 50% off | <a
                href="i.html" style="color: red">Click to Shop!</a></p>
        <nav class="navbar navbar-expand-sm">
            <div class="container-sm border-bottom pb-3">
                <img class="img-fluid pe-2" width="50" height="50" src="Images/images%20(1).png" alt="images%20(1)">
                <span class="fs-4"
                    style="color: #2f4858; font-weight: bold; text-transform: uppercase; letter-spacing: 2px; font-family: Arial, sans-serif;">Home</span>
                &nbsp;&nbsp; <span class="fs-4"
                    style="color: rgb(255, 123, 0); font-weight: bold; text-transform: uppercase; letter-spacing: 2px; font-family: Arial, sans-serif;">Furniture</span>
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
                                aria-haspopup="true" aria-expanded="false">Brands</a>
                            <div class="dropdown-menu px-2" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="#"><b>Brands</b></a> <a class="nav-link pb-1"
                                    href="Varaschin.php">Varaschin</a> <a class="nav-link pb-1"
                                    href="Tacchini.php">Tacchini</a> <a class="nav-link pb-1"
                                    href="point.php">Point1920</a>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header><!-- navbar start -->
    <nav class="py-1 mt-0 mb-3 container-sm pb-3 border-bottom">
        <div class="container d-flex flex-wrap">
            <ul class="nav me-auto">
                <li class="nav-item">
                    <a href="about.html" class="nav-link link-body-emphasis px-2 active" aria-current="page"
                        style="color: #000000"><img src="Images/question-mark-circle-outline-svgrepo-com.png"
                            alt="question-mark-circle-outline-svgrepo-com" width="20" height="20"> &nbsp;Help</a>
                </li>
            </ul>
            <ul class="nav">
                <div class="text-end">
                    <button type="button" class="btn me-2"><a href="logout.php"
                            class="nav-link link-body-emphasis px-2 p-0 active" aria-current="page"
                            style="color: rgb(255, 123, 0)">Logout</a></button>
                </div>
            </ul>
        </div>
    </nav>
    <main>
        <div class="position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
            <a class="text-white nav-link" href="order.html"><button
                    class="btn btn-bd-primary py-2 d-flex align-items-center"><span class="" id="bd-theme-text">Order
                        For Bulk</span></button></a>
        </div><!-- carousel Start -->
        <div id="carouselId" class="container-sm carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators"></ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active"><img src="images/A_slice_of_pretty-Slideshow.png"
                        class="w-100 d-block" alt="First slide"></div>
                <div class="carousel-item"><img src="images/BTL-Slideshow.png" class="w-100 d-block" alt="Second slide">
                </div>
                <div class="carousel-item"><img src="images/Simplywud-fhs-Slideshow.jpg" class="w-100 d-block"
                        alt="Third slide"></div>
                <div class="carousel-item"><img src="images/Urban-Interiors-refer_and_earn-slideshow.jpg"
                        class="w-100 d-block" alt="Third slide"></div>
            </div><button class="carousel-control-prev" type="button" data-bs-target="#carouselId"
                data-bs-slide="prev"><span class="visually-hidden">Previous</span></button> <button
                class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next"><span
                    class="visually-hidden">Next</span></button>
        </div><!-- carousel end -->
        <!-- product strat -->
        <div>
            <div style="background-color: #f9fafa" class="container-sm mt-5 py-5 px-5">
                <h2 class="display-5 fw-bold text-center mb-0 p-0">Explore Our Furniture Range</h2>
                <hr class="" style="width: 100%; color: #ff9500">
                <div class="row m-5 p-0">
                    <div class="col">
                        <div class="image-container">
                            <center>
                                <img src="Images/furniture-home-house-8-svgrepo-com.png"
                                    alt="furniture-home-house-8-svgrepo-com" width="100" height="100">
                                <p>Study Tables</p>
                            </center>
                        </div>
                    </div>
                    <div class="col">
                        <div class="image-container">
                            <center>
                                <img src="Images/furniture-home-house-3-svgrepo-com.png"
                                    alt="furniture-home-house-3-svgrepo-com" width="100" height="100">
                                <p>Beds</p>
                            </center>
                        </div>
                    </div>
                    <div class="col">
                        <div class="image-container">
                            <center>
                                <img src="images/cabinet-furniture-home-14-svgrepo-com.png"
                                    alt="cabinet-furniture-home-14-svgrepo-com" width="100" height="100">
                                <p>TV Units</p>
                            </center>
                        </div>
                    </div>
                    <div class="col">
                        <div class="image-container">
                            <center>
                                <img src="Images/chair-furniture-home-svgrepo-com.png"
                                    alt="chair-furniture-home-svgrepo-com" width="100" height="100">
                                <p>Sofas</p>
                            </center>
                        </div>
                    </div>
                    <div class="col">
                        <div class="image-container">
                            <center>
                                <img src="Images/cabinet-chair-furniture-svgrepo-com,png.png"
                                    alt="cabinet-chair-furniture-svgrepo-com,png" width="100" height="100">
                                <p>Dining</p>
                            </center>
                        </div>
                    </div>
                    <div class="col">
                        <div class="image-container">
                            <center>
                                <img src="Images/cabinet-furniture-home-25-svgrepo-com,png.png"
                                    alt="cabinet-furniture-home-25-svgrepo-com,png" width="100" height="100">
                                <p>Books Tables</p>
                            </center>
                        </div>
                    </div>
                    <div class="col">
                        <div class="image-container">
                            <center>
                                <img src="Images/cabinet-furniture-home-29-svgrepo-com.png"
                                    alt="cabinet-furniture-home-29-svgrepo-com" width="100" height="100">
                                <p>Seating</p>
                            </center>
                        </div>
                    </div>
                    <div class="col">
                        <div class="image-container">
                            <center>
                                <img src="Images/cabinet-furniture-home-11-svgrepo-com.png"
                                    alt="cabinet-furniture-home-11-svgrepo-com" width="100" height="100">
                                <p>Shoe Rack</p>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row m-5 p-0">
                    <div class="col">
                        <div class="image-container">
                            <center>
                                <img src="Images/cabinet-furniture-home-svgrepo-com.png"
                                    alt="cabinet-furniture-home-svgrepo-com" width="100" height="100">
                                <p>Drawers</p>
                            </center>
                        </div>
                    </div>
                    <div class="col">
                        <div class="image-container">
                            <center>
                                <img src="Images/cabinet-furniture-home-24-svgrepo-com.png"
                                    alt="cabinet-furniture-home-24-svgrepo-com" width="100" height="100">
                                <p>Coffee Tables</p>
                            </center>
                        </div>
                    </div>
                    <div class="col">
                        <div class="image-container">
                            <center>
                                <img src="Images/cabinet-furniture-home-31-svgrepo-com.png"
                                    alt="cabinet-furniture-home-31-svgrepo-com" width="100" height="100">
                                <p>Wardrobes</p>
                            </center>
                        </div>
                    </div>
                    <div class="col">
                        <div class="image-container">
                            <center>
                                <img src="Images/cabinet-furniture-home-30-svgrepo-com%20(2).png"
                                    alt="cabinet-furniture-home-30-svgrepo-com%20(2)" width="100" height="100">
                                <p>Lamps Tables</p>
                            </center>
                        </div>
                    </div>
                    <div class="col">
                        <div class="image-container">
                            <center>
                                <img src="Images/cabinet-furniture-home-16-svgrepo-com.png"
                                    alt="cabinet-furniture-home-16-svgrepo-com" width="100" height="100">
                                <p>Unique Furniture</p>
                            </center>
                        </div>
                    </div>
                    <div class="col">
                        <div class="image-container">
                            <center>
                                <img src="Images/clock-svgrepo-com.png" alt="clock-svgrepo-com" width="100"
                                    height="100">
                                <p>Deal Zones</p>
                            </center>
                        </div>
                    </div>
                    <div class="col">
                        <div class="image-container">
                            <center>
                                <img src="Images/shop-cart-svgrepo-com.png" alt="shop-cart-svgrepo-com" width="100"
                                    height="100">
                                <p>Stores</p>
                            </center>
                        </div>
                    </div>
                    <div class="col">
                        <div class="image-container">
                            <center>
                                <img src="Images/box-svgrepo-com.png" alt="box-svgrepo-com" width="100" height="100">
                                <p>Bestsellers</p>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- product end -->
        <!-- iframe start -->
        <div class="container-sm">
            <div class="ratio ratio-21x9 my-5">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/iclLe7GECZ0?si=etlbg72XbyJ3mLzJ"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"></iframe>
            </div>
        </div><!-- iframe end -->
        <!-- customer review start -->
        <div class="container-fluid py-4" style="
          background-color: bisque;
          padding-top: 70px;
          padding-bottom: 10px;
          border-top: black;
          border: solid;
          border-width: 1px;
        ">
            <center>
                <h2 class="display-5 fw-bold text-center mb-0 p-0">Customer Review</h2>
                <br>
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


        </div><!-- customer review end -->
        <!-- contact as start -->
        <div class="container-sm my-4">
            <div>
                <div class="row mb-2"
                    style="color: #2f4858; font-weight: bold; letter-spacing: 1px; font-family: Arial, sans-serif;">
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <p class="pt-3">The Company:</p>
                        <hr class="" style="width: 100%; color: #ff9500">
                        <h6>About Us</h6>
                        <h6>Help</h6>
                        <h6>Privacy Policy</h6>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <p class="pt-3">More Information:</p>
                        <hr class="" style="width: 100%; color: #ff9500">
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
                        <hr class="" style="width: 100%; color: #ff9500">
                        <h6>Refer & Earn</h6>
                        <h6>Gift Cards</h6>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <p class="pt-3">Address:</p>
                        <hr class="" style="width: 100%; color: #ff9500">
                        <h6>Reliance Retail Limited,</h6>
                        <h6>3rd Floor, Court House, Lokmanya Tilak Marg,<br>
                            Dhobi Talao, Mumbai- 400 002,<br>
                            Maharashtra, India</h6>
                    </div>
                </div>
                <hr>
                <div class="row"
                    style="color: #2f4858; font-weight: bold; letter-spacing: 1px; font-family: Arial, sans-serif;">
                    <div class="col-6">
                        <p>Connect With Us:</p><img class="p-1 img-fluid" width="40" height="40"
                            src="Images/call-receive-svgrepo-com.png" alt="call-receive-svgrepo-com">&nbsp; <img
                            class="p-1 img-fluid" width="40" height="40" src="Images/email-1573-svgrepo-com.png"
                            alt="email-1573-svgrepo-com"> <img class="p-1 img-fluid" width="40" height="40"
                            src="Images/instagram-svgrepo-com.png" alt="instagram-svgrepo-com">&nbsp; <img
                            class="p-1 img-fluid" width="40" height="40" src="Images/twitter-154-svgrepo-com.png"
                            alt="twitter-154-svgrepo-com">&nbsp; <img class="p-1 img-fluid" width="50" height="50"
                            src="Images/facebook-svgrepo-com.png" alt="facebook-svgrepo-com">&nbsp; <img
                            class="p-1 img-fluid" width="35" height="35" src="Images/whatsapp-128-svgrepo-com.png"
                            alt="whatsapp-128-svgrepo-com">&nbsp; <img class="p-1 img-fluid" width="40" height="40"
                            src="Images/linkedin-svgrepo-com.png" alt="linkedin-svgrepo-com">&nbsp; <img
                            class="p-1 img-fluid" width="40" height="40" src="Images/youtube-168-svgrepo-com.png"
                            alt="youtube-168-svgrepo-com">&nbsp; <img class="p-1 img-fluid" width="45" height="45"
                            src="Images/telegram-svgrepo-com.png" alt="telegram-svgrepo-com">
                    </div>
                    <div class="col-6">
                        <p>Download App:</p><img class="img-fluid py-1" width="150" height="150"
                            src="Images/google-play-badge.jpg" alt="google-play-badge"> <img class="img-fluid py-1"
                            width="150" height="150" src="Images/google-play-badge.jpg" alt="google-play-badge">
                    </div>
                </div>
            </div>
        </div><!-- contact as end -->
    </main>
    <footer style="background-color: #2f4858; height: fit-content" class="p-5 mb-0">
        <div class="container pb-5">
            <div class="row">
                <div class="col-6">
                    <p>Popular Furniture Categories:</p>
                </div>
                <div class="col-6">
                    <p>Bed , Beds By Design , Sofa Set , Wooden Sofa , Sofas By Design , Sofa Cum Bed , Double Bed ,
                        Single Bed , Queen Size Bed , King Size Bed , Chair , Wooden Table , Study Table , Study Chair ,
                        Wardrobe , Chest of Drawers , Futon , Loveseat , Dining Table Set , Dining Chair , Bookshelves ,
                        Shoe Rack , TV Units , Recliners , Furniture , Office Furniture , Office Table , Office Chair ,
                        2 Seater Sofa , TV Cupboard , TV Showcase , TV Stand , Center Table</p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p>Shop Furniture By Room:</p>
                </div>
                <div class="col-6">
                    <p>Living Room Furniture , Bedroom Furniture , Dining Room Furniture , Study Room Furniture , Bar
                        Furniture , Balcony Furniture</p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p>Popular Decor Categories:</p>
                </div>
                <div class="col-6">
                    <p>Home Decor , Carpets , Mirrors , Study Lamps , Table Lamps , Bed Sheets , Floor Lamps , Wall
                        Lights , Lighting , Ceiling Lights , Quilt , Wall Decor , Wall Mirror , Table Decor , Table
                        Cover , Table Napkin , Table Mat , Cushion Cover , Table Runners , Home Furnishing , Wall Art ,
                        Showpiece , Artificial Plants , Photo Frame , Candle Stand , Clocks , Wall Clocks , Festive
                        Lights , Candles , Bath Mat , Vases , Flower Vase , Bathroom Accessories , Bathroom Mirrors</p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p>We Accept:</p>
                </div>
                <div class="col-6"><img class="img-fluid" src="Images/card_img.png" alt="card_img"></div>
            </div>
        </div>
        <p class="text-center">© 2023 Home Furniture</p>
    </footer><!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
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