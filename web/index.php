<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Amazing Website</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #4e54c8;
            --secondary-color: #8f94fb;
            --accent-color: #ff6b6b;
            --text-color: #333;
            --light-bg: #f8f9fa;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: var(--text-color);
            padding-top: 76px;
        }

        .hero {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            min-height: calc(100vh - 76px);
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
            opacity: 0.2;
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .cta-button {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
            transition: all 0.3s ease;
        }

        .cta-button:hover {
            background-color: #ff4757;
            border-color: #ff4757;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .feature-card {
            transition: all 0.3s ease;
            border: none;
            border-radius: 15px;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .feature-icon {
            font-size: 3rem;
            color: var(--primary-color);
        }

        .testimonial-card {
            background-color: var(--light-bg);
            border-radius: 15px;
        }

        .testimonial-img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 50%;
        }

        .wave-divider {
            rotate: 180deg;
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
        }

        .wave-divider svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 150px;
        }

        .wave-divider .shape-fill {
            fill: #FFFFFF;
        }
    </style>
</head>
<body>
    <?php include("header.html") ?>

    <main>
        <section class="hero d-flex align-items-center text-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center hero-content" data-aos="fade-up">
                        <h1 class="display-3 fw-bold mb-4">Welcome to Our Amazing Website</h1>
                        <p class="lead mb-5">Discover incredible products and services designed to transform your
                            digital experience.</p>
                        <a href="#features" class="btn btn-light btn-lg cta-button px-5 py-3">Explore Now</a>
                    </div>
                </div>
            </div>
            <div class="wave-divider">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                    preserveAspectRatio="none">
                    <path
                        d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                        class="shape-fill"></path>
                </svg>
            </div>
        </section>

        <section id="features" class="py-5">
            <div class="container">
                <h2 class="text-center mb-5" data-aos="fade-up">Our Amazing Features</h2>
                <div class="row g-4">
                    <?php
                    $features = [
                        ['icon' => 'fas fa-rocket', 'title' => 'Lightning Fast', 'description' => 'Experience unparalleled speed and performance with our cutting-edge technology.'],
                        ['icon' => 'fas fa-shield-alt', 'title' => 'Ironclad Security', 'description' => 'Rest easy knowing your data is protected by state-of-the-art security measures.'],
                        ['icon' => 'fas fa-headset', 'title' => '24/7 Expert Support', 'description' => 'Our dedicated team is always ready to assist you, anytime and anywhere.']
                    ];

                    foreach ($features as $index => $feature):
                        ?>
                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="<?= $index * 100 ?>">
                            <div class="card h-100 shadow-sm feature-card">
                                <div class="card-body text-center p-4">
                                    <i class="<?= $feature['icon'] ?> feature-icon mb-3"></i>
                                    <h3 class="card-title h4 mb-3"><?= $feature['title'] ?></h3>
                                    <p class="card-text"><?= $feature['description'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center mb-5" data-aos="fade-up">What Our Clients Say</h2>
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <?php
                                $testimonials = [
                                    ['name' => 'John Doe', 'role' => 'CEO, Tech Innovators', 'image' => 'https://source.unsplash.com/random/100x100?face', 'quote' => 'This platform has revolutionized the way we do business. The features are unparalleled, and the support team is exceptional!'],
                                    ['name' => 'Jane Smith', 'role' => 'Founder, Digital Solutions', 'image' => 'https://source.unsplash.com/random/100x100?woman', 'quote' => 'I can\'t imagine running my business without this tool. It\'s intuitive, powerful, and constantly evolving to meet our needs.']
                                ];

                                foreach ($testimonials as $index => $testimonial):
                                    ?>
                                    <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                                        <div class="testimonial-card p-4" data-aos="fade-up">
                                            <div class="d-flex align-items-center mb-4">
                                                <img src="<?= $testimonial['image'] ?>" alt="<?= $testimonial['name'] ?>"
                                                    class="testimonial-img me-3">
                                                <div>
                                                    <h5 class="mb-0"><?= $testimonial['name'] ?></h5>
                                                    <p class="text-muted mb-0"><?= $testimonial['role'] ?></p>
                                                </div>
                                            </div>
                                            <p class="mb-0">"<?= $testimonial['quote'] ?>"</p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                        <h2 class="mb-4">Ready to Get Started?</h2>
                        <p class="lead mb-4">Join thousands of satisfied customers and experience the difference today.
                        </p>
                        <a href="#" class="btn btn-primary btn-lg cta-button px-5 py-3">Sign Up Now</a>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <img src="https://source.unsplash.com/random/600x400?technology" alt="Get Started"
                            class="img-fluid rounded shadow-lg">
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include("footer.html") ?>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Font Awesome for icons -->
    <script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>
    <!-- Initialize AOS -->
    <script>
        AOS.init({
            duration: 1000,
            once: true,
        });
    </script>
</body>
</html>