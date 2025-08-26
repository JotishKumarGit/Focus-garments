<?php include('header.php') ?>

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 py-5">
    <div class="container">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Contact us </h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb text-uppercase">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Contact Us</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- contact -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">Get In Touch</h6>
                <h1 class="mb-4">Contact For Any Query</h1>
                <p class="mb-4">
                    Have questions about our products, your order, or anything else?
                    We're here to help! Reach out to us anytime and our support team
                    will get back to you as soon as possible.
                </p>
                <iframe class="position-relative w-100"
                    src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d62641.996776423985!2d77.32001322151747!3d11.104075677162056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s%20805%2FB%2CSREE%20PARANDHAMAN%20NAGAR%2C%20DHARAPURAM%20ROAD%2CTIRUPPUR%2CTAMILNADU-641604.!5e0!3m2!1sen!2sin!4v1755681973095!5m2!1sen!2sin"
                    frameborder="0" style="height: 300px; border: 0" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-light p-5 h-100 d-flex align-items-center">

                    <form onsubmit="whatsappForm(event)">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name" />
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email" />
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject" />
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message"
                                        style="height: 150px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact ends  -->


<?php include('footer.php'); ?>