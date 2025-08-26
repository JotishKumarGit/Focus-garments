<?php include('header.php') ?>

<head>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f9f9f9;
        }

        .hero-section {
            background: linear-gradient(to right, #007bff, #00c6ff);
            color: white;
            padding: 100px 0;
            text-align: center;
        }

        .mission-card {
            transition: transform 0.3s ease-in-out;
        }

        .mission-card:hover {
            transform: translateY(-10px);
        }

        .icon-box {
            font-size: 40px;
            margin-bottom: 20px;
            color: #007bff;
        }

        .section-title {
            margin-bottom: 50px;
        }

        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease-in-out;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 py-5">
    <div class="container">
        <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb text-uppercase">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">About</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.1s">
                <div class="overflow-hidden">
                    <img class="img-fluid w-100" src="img/t_pro_1.jpg" alt="" />
                </div>
                <div class="d-flex align-items-center justify-content-between bg-light p-4">
                    <h5 class="text-truncate me-3 mb-0">Straches Daily Fit</h5>
                    <a class="btn btn-square btn-outline-primary border-2 border-white flex-shrink-0" href=""><i
                            class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.3s">
                <div class="overflow-hidden">
                    <img class="img-fluid w-100 h-100" src="img/t_pro_2.jpg" alt="" />
                </div>
                <div class="d-flex align-items-center justify-content-between bg-light p-4">
                    <h5 class="text-truncate me-3 mb-0">Straches Essential</h5>
                    <a class="btn btn-square btn-outline-primary border-2 border-white flex-shrink-0" href=""><i
                            class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.5s">
                <div class="overflow-hidden">
                    <img class="img-fluid w-100 h-100" src="img/t_pro_3.avif" alt="" />
                </div>
                <div class="d-flex align-items-center justify-content-between bg-light p-4">
                    <h5 class="text-truncate me-3 mb-0">Straches Core Tee</h5>
                    <a class="btn btn-square btn-outline-primary border-2 border-white flex-shrink-0" href=""><i
                            class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">About Us</h6>
                <h1 class="mb-4">
                    AS Solutions and Implementation – Your Trusted Partner in Knit
                    Garment Excellence
                </h1>
                <p class="mb-4">
                    At AS Solutions and Implementation, we specialize in providing
                    end-to-end solutions for the knit garment industry. From
                    innovative manufacturing practices to tailored consultancy and
                    operational support, we empower businesses to optimize quality,
                    efficiency, and sustainability in their garment production
                    processes.
                </p>
                <p class="fw-medium text-primary">
                    <i class="fa fa-check text-success me-3"></i>Comprehensive Knit
                    Garment Manufacturing Solutions
                </p>
                <p class="fw-medium text-primary">
                    <i class="fa fa-check text-success me-3"></i>Process
                    Implementation & Industry Best Practices
                </p>
                <p class="fw-medium text-primary">
                    <i class="fa fa-check text-success me-3"></i>Quality Control,
                    Compliance & Efficiency Improvements
                </p>
                <p class="fw-medium text-primary">
                    <i class="fa fa-check text-success me-3"></i>Trusted by Leading
                    Brands & Manufacturers Across India
                </p>
                <div class="bg-primary d-flex align-items-center p-4 mt-5">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white"
                        style="width: 60px; height: 60px">
                        <i class="fa fa-phone-alt fa-2x text-primary"></i>
                    </div>
                    <div class="ms-3">
                        <p class="fs-5 fw-medium mb-2 text-white">Customer Support</p>
                        <h3 class="m-0 text-secondary">+91 9047599999</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pt-4" style="min-height: 500px">
                <div class="position-relative h-100 wow fadeInUp" data-wow-delay="0.5s">
                    <img class="position-absolute img-fluid w-100 h-100" src="img/garment_baner_1.jpg"
                        style="object-fit: cover; padding: 0 0 50px 100px" alt="Knit Garment Production" />
                    <img class="position-absolute start-0 bottom-0 img-fluid bg-white pt-2 pe-2 w-50 h-50"
                        src="img/garment_baner_2.avif" style="object-fit: cover" alt="High-Quality Knitwear" />
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Mission Content Section -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center section-title animate__animated animate__fadeInUp">What Drives Us</h2>
        <div class="row g-4">

            <!-- Mission Point 1 -->
            <div class="col-md-4">
                <div class="card p-4 text-center mission-card fade-in">
                    <div class="icon-box">
                        👕
                    </div>
                    <h5>Quality You Can Wear</h5>
                    <p>At AS Solution and Implementation, we’re committed to delivering premium-quality t-shirts that
                        combine comfort, durability, and style for everyday wear.</p>
                </div>
            </div>

            <!-- Mission Point 2 -->
            <div class="col-md-4">
                <div class="card p-4 text-center mission-card fade-in">
                    <div class="icon-box">
                        🌱
                    </div>
                    <h5>Sustainable Fashion</h5>
                    <p>We prioritize eco-friendly materials and responsible production practices to reduce our
                        environmental footprint and promote ethical fashion.</p>
                </div>
            </div>

            <!-- Mission Point 3 -->
            <div class="col-md-4">
                <div class="card p-4 text-center mission-card fade-in">
                    <div class="icon-box">
                        🎯
                    </div>
                    <h5>Customer-Centric Innovation</h5>
                    <p>Our mission is to continuously evolve based on customer feedback, delivering fresh, trend-driven
                        designs that align with real needs and preferences.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- End mission -->


<!-- Vission -->




<script>
    const fadeInElements = document.querySelectorAll('.fade-in');

    const onScroll = () => {
        fadeInElements.forEach(el => {
            const rect = el.getBoundingClientRect();
            if (rect.top < window.innerHeight - 100) {
                el.classList.add('visible');
            }
        });
    };

    window.addEventListener('scroll', onScroll);
    window.addEventListener('load', onScroll);
</script>
<!-- Footer -->
<?php include('footer.php') ?>