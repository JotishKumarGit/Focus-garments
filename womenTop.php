<head>
    <style>
        .product-container {
            display: flex;
            gap: 40px;
            background-color: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            max-width: 1000px;
            margin: 40px auto;
        }

        .product-image {
            flex: 1;
        }

        .product-image img {
            max-width: 100%;
            border-radius: 10px;
        }

        .product-details {
            flex: 2;
        }

        .product-details h1 {
            font-size: 32px;
            margin-bottom: 20px;
        }

        .product-details ul {
            list-style-type: disc;
            padding-left: 20px;
            font-size: 16px;
            line-height: 1.8;
        }
    </style>
</head>

<?php include('./header.php') ?>

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 py-5">
    <div class="container">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Products Details</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb text-uppercase">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Women Top</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Product Details Start -->
<div class="product-container justify-content-center align-items-center">
    <div class="product-image">
        <img src="img/Women's-tops.jpeg" alt="Women's Top Image">
    </div>
    <div class="product-details">
        <h1>Elegant Women's Cotton Top</h1>
        <ul>
            <li>Made from premium lightweight cotton for a soft and breathable feel.</li>
            <li>Designed with a flattering fit that complements all body types.</li>
            <li>Features elegant detailing including lace trim and subtle pleats.</li>
            <li>Perfect for office wear, casual outings, or weekend brunches.</li>
            <li>Available in various styles: sleeveless, half-sleeve, and full-sleeve options.</li>
            <li>Comes in a range of vibrant and pastel colors.</li>
        </ul>
        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquire Now</a>
    </div>
</div>


<!-- Product Details End -->

<?php include('./footer.php') ?>