<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>AS SOLUTIONS AND IMPLEMENTATION</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />

    <style>
        .service-item-top .overflow-hidden {
            height: 300px;
        }

        .service-item-top img {
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar -->
    <div class="topbar">
        <div class="contact-info">
            <span><i class="fa fa-envelope me-1"></i> raviyuvarajas@gmail.com</span>
            <span><i class="fa fa-phone me-1"></i> +91 9047599999</span>
        </div>
        <div class="social-icons">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
    </div>
    <!-- Topbar end -->

    <!-- STICKY NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top px-3 py-2">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand fw-bold d-flex justify-content-center align-items-center" href="index.php">
                <img src="img/as_logo.jpeg" alt="Logo" style="height: 80px; " width="auto" />
                <!-- <span class="text-dark">AS SOLUTIONS AND IMPLEMENTATION</span> -->

            </a>

            <!-- Right Side Icons (Always visible) -->

            <div class="d-flex align-items-center ms-auto gap-3">
                <button class="btn border-0 d-lg-block d-md-block d-sm-block" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasMenu">
                    <i class="fa fa-bars fs-5"></i>
                </button>
            </div>
        </div>
    </nav>
    <!-- End navbar -->

    <!-- OFFCANVAS MENU -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasMenu">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Menu</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="list-unstyled">
                <!-- <li><a href="#" class="d-block py-2">Collection</a></li> -->

                <!-- Pages Dropdown (Accordion-style) -->
                <li>
                    <button class="btn w-100 text-start p-0 border-0 bg-transparent toggle-submenu">
                        <span class="fw-bold d-flex justify-content-between align-items-center py-2">
                            Pages <i class="fa fa-chevron-down"></i>
                        </span>
                    </button>
                    <ul class="submenu list-unstyled ps-3 d-none">
                        <li><a href="index.php" class="d-block py-1">Home</a></li>
                        <li><a href="about.php" class="d-block py-1">About</a></li>
                        <li><a href="service.php" class="d-block py-1">Services</a></li>
                        <li><a href="contact.php" class="d-block py-1">Contact</a></li>
                        <li><a href="product.php" class="d-block py-1">Products</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>