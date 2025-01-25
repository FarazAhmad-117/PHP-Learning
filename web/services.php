<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - Innovative Solutions</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            padding-top: 76px;
            /* Adjust based on your header height */
            overflow-x: hidden;
        }

        .hero {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: white;
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('https://source.unsplash.com/random/1600x900?technology') center/cover no-repeat;
            opacity: 0.1;
            z-index: 0;
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .section-title {
            position: relative;
            display: inline-block;
            padding-bottom: 10px;
            margin-bottom: 30px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 2px;
            background-color: #6a11cb;
        }

        .service-card {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        }

        .service-icon {
            font-size: 3rem;
            color: #6a11cb;
        }

        .pricing-card {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .pricing-card:hover {
            transform: scale(1.05);
        }

        .pricing-header {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: white;
            padding: 30px;
        }

        .cta-section {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: white;
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('https://source.unsplash.com/random/1600x900?pattern') center/cover no-repeat;
            opacity: 0.1;
            z-index: 0;
        }

        .cta-content {
            position: relative;
            z-index: 1;
        }

        .btn-gradient {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            border: none;
            color: white;
            transition: all 0.3s ease;
        }

        .btn-gradient:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .swiper-container {
            padding: 30px 0;
        }

        .testimonial-card {
            background-color: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .client-image {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
        }

        .floating-shapes {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 0;
        }

        .shape {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            animation: float 20s infinite;
        }

        .shape:nth-child(1) {
            width: 80px;
            height: 80px;
            left: 25%;
            animation-delay: 0s;
        }

        .shape:nth-child(2) {
            width: 100px;
            height: 100px;
            right: 10%;
            animation-delay: 2s;
        }

        .shape:nth-child(3) {
            width: 50px;
            height: 50px;
            bottom: 30%;
            left: 15%;
            animation-delay: 4s;
        }

        @keyframes float {
            0% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(-60px) rotate(180deg);
            }

            100% {
                transform: translateY(0px) rotate(360deg);
            }
        }
    </style>
</head>
<body>
    <?php include("header.html") ?>

    <main>
        <section class="hero">
            <div class="floating-shapes">
                <div class="shape"></div>
                <div class="shape"></div>
                <div class="shape"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center hero-content">
                        <h1 class="display-3 fw-bold mb-4" data-aos="fade-up">Our Services</h1>
                        <p class="lead mb-5" data-aos="fade-up" data-aos-delay="200">Discover our range of innovative
                            solutions designed to elevate your business to new heights.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="container">
                <h2 class="section-title text-center mb-5" data-aos="fade-up">What We Offer</h2>
                <div class="row g-4">
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-card h-100">
                            <div class="card-body text-center p-4">
                                <i class="fas fa-laptop-code service-icon mb-3"></i>
                                <h3 class="card-title h4 mb-3">Web Development</h3>
                                <p class="card-text">Custom web solutions tailored to your unique business needs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-card h-100">
                            <div class="card-body text-center p-4">
                                <i class="fas fa-mobile-alt service-icon mb-3"></i>
                                <h3 class="card-title h4 mb-3">Mobile App Development</h3>
                                <p class="card-text">Innovative mobile applications for iOS and Android platforms.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-card h-100">
                            <div class="card-body text-center p-4">
                                <i class="fas fa-cloud service-icon mb-3"></i>
                                <h3 class="card-title h4 mb-3">Cloud Solutions</h3>
                                <p class="card-text">Scalable and secure cloud infrastructure for your growing business.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5 bg-light">
            <div class="container">
                <h2 class="section-title text-center mb-5" data-aos="fade-up">Our Process</h2>
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card border-0 shadow-sm">
                                        <div class="card-body text-center p-5">
                                            <div class="display-4 text-primary mb-3">01</div>
                                            <h3 class="h4 mb-3">Discovery</h3>
                                            <p>We start by understanding your business goals and requirements.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card border-0 shadow-sm">
                                        <div class="card-body text-center p-5">
                                            <div class="display-4 text-primary mb-3">02</div>
                                            <h3 class="h4 mb-3">Planning</h3>
                                            <p>Our team creates a detailed project plan and timeline.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card border-0 shadow-sm">
                                        <div class="card-body text-center p-5">
                                            <div class="display-4 text-primary mb-3">03</div>
                                            <h3 class="h4 mb-3">Development</h3>
                                            <p>We build your solution using cutting-edge technologies.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card border-0 shadow-sm">
                                        <div class="card-body text-center p-5">
                                            <div class="display-4 text-primary mb-3">04</div>
                                            <h3 class="h4 mb-3">Testing</h3>
                                            <p>Rigorous testing ensures a high-quality, bug-free product.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card border-0 shadow-sm">
                                        <div class="card-body text-center p-5">
                                            <div class="display-4 text-primary mb-3">05</div>
                                            <h3 class="h4 mb-3">Launch</h3>
                                            <p>We deploy your solution and provide ongoing support.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="container">
                <h2 class="section-title text-center mb-5" data-aos="fade-up">Pricing Plans</h2>
                <div class="row g-4">
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="pricing-card h-100">
                            <div class="pricing-header text-center">
                                <h3 class="h4 mb-3">Basic</h3>
                                <div class="display-4 fw-bold mb-3">$99</div>
                                <p class="text-muted">per month</p>
                            </div>
                            <div class="card-body p-4">
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i> 5 Projects</li>
                                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i> 20GB Storage</li>
                                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Basic Support</li>
                                </ul>
                                <a href="#" class="btn btn-outline-primary d-block">Choose Plan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="pricing-card h-100">
                            <div class="pricing-header text-center">
                                <h3 class="h4 mb-3">Pro</h3>
                                <div class="display-4 fw-bold mb-3">$199</div>
                                <p class="text-muted">per month</p>
                            </div>
                            <div class="card-body p-4">
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i> 10 Projects</li>
                                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i> 50GB Storage</li>
                                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Priority Support
                                    </li>
                                </ul>
                                <a href="#" class="btn btn-primary d-block">Choose Plan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                        <div class="pricing-card h-100">
                            <div class="pricing-header text-center">
                                <h3 class="h4 mb-3">Enterprise</h3>
                                <div class="display-4 fw-bold mb-3">$399</div>
                                <p class="text-muted">per month</p>
                            </div>
                            <div class="card-body p-4">
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Unlimited Projects
                                    </li>
                                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i> 100GB Storage</li>
                                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i> 24/7 Premium Support
                                    </li>
                                </ul>
                                <a href="#" class="btn btn-gradient d-block">Choose Plan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5 bg-light">
            <div class="container">
                <h2 class="section-title text-center mb-5" data-aos="fade-up">Client Testimonials</h2>
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="swiper-container testimonial-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <div class="d-flex align-items-center mb-4">
                                            <img src="https://source.unsplash.com/random/100x100?face" alt="Client"
                                                class="client-image me-3">
                                            <div>
                                                <h4 class="mb-0">John Doe</h4>
                                                <p class="text-muted mb-0">CEO, Tech Corp</p>
                                            </div>
                                        </div>
                                        <p class="mb-0">"Their services have transformed our business. The team's
                                            expertise and dedication are unmatched."</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <div class="d-flex align-items-center mb-4">
                                            <img src="https://source.unsplash.com/random/100x100?woman" alt="Client"
                                                class="client-image me-3">
                                            <div>
                                                <h4 class="mb-0">Jane Smith</h4>
                                                <p class="text-muted mb-0">CTO, Innovate Inc</p>
                                            </div>
                                        </div>
                                        <p class="mb-0">"The quality of their work is exceptional. They delivered our
                                            project on time and exceeded our expectations."</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center cta-content">
                        <h2 class="display-4 fw-bold mb-4" data-aos="fade-up">Ready to Get Started?</h2>
                        <p class="lead mb-5" data-aos="fade-up" data-aos-delay="200">Let's work together to bring your
                            ideas to life.</p>
                        <a href="#" class="btn btn-light btn-lg" data-aos="fade-up" data-aos-delay="400">Contact Us
                            Today</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include("footer.html") ?>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>
    <!-- Initialize AOS and Swiper -->
    <script>
        AOS.init({
            duration: 1000,
            once: true,
        });

        new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
            }
        });

        new Swiper('.testimonial-slider', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>
</body>
</html>