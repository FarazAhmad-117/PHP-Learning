<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Our Amazing Company</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            padding-top: 76px;
            /* Adjust based on your header height */
        }

        .hero {
            background: linear-gradient(135deg, #4e54c8, #8f94fb);
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
            opacity: 0.2;
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
            background-color: #4e54c8;
        }

        .team-member {
            transition: transform 0.3s ease;
        }

        .team-member:hover {
            transform: translateY(-10px);
        }

        .timeline {
            position: relative;
            padding: 50px 0;
        }

        .timeline::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            width: 2px;
            height: 100%;
            background: #4e54c8;
            transform: translateX(-50%);
        }

        .timeline-item {
            position: relative;
            margin-bottom: 50px;
        }

        .timeline-content {
            position: relative;
            width: 45%;
            padding: 20px;
            background: #fff;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        .timeline-content::after {
            content: '';
            position: absolute;
            top: 20px;
            right: -15px;
            width: 30px;
            height: 30px;
            background: #4e54c8;
            border-radius: 50%;
        }

        .timeline-item:nth-child(even) .timeline-content {
            left: 55%;
        }

        .timeline-item:nth-child(even) .timeline-content::after {
            left: -15px;
        }
    </style>
</head>
<body>
    <?php include("header.html") ?>

    <main>
        <section class="hero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center hero-content">
                        <h1 class="display-3 fw-bold mb-4" data-aos="fade-up">About Our Company</h1>
                        <p class="lead mb-5" data-aos="fade-up" data-aos-delay="200">We're on a mission to revolutionize
                            the digital landscape with innovative solutions and unparalleled expertise.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                        <h2 class="section-title">Our Story</h2>
                        <p>Founded in 2010, our company has grown from a small startup to a leading force in the tech
                            industry. We've consistently pushed the boundaries of what's possible, delivering
                            cutting-edge solutions to clients worldwide.</p>
                        <p>Our journey has been marked by innovation, perseverance, and a commitment to excellence.
                            We've weathered challenges, celebrated victories, and continually evolved to meet the
                            ever-changing demands of the digital world.</p>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <img src="https://source.unsplash.com/random/600x400?office" alt="Our Office"
                            class="img-fluid rounded shadow">
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5 bg-light">
            <div class="container">
                <h2 class="section-title text-center" data-aos="fade-up">Our Values</h2>
                <div class="row g-4">
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body text-center">
                                <i class="fas fa-lightbulb fa-3x text-primary mb-3"></i>
                                <h3 class="card-title h4">Innovation</h3>
                                <p class="card-text">We constantly seek new ideas and solutions to stay ahead of the
                                    curve.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body text-center">
                                <i class="fas fa-users fa-3x text-primary mb-3"></i>
                                <h3 class="card-title h4">Collaboration</h3>
                                <p class="card-text">We believe in the power of teamwork and open communication.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body text-center">
                                <i class="fas fa-chart-line fa-3x text-primary mb-3"></i>
                                <h3 class="card-title h4">Excellence</h3>
                                <p class="card-text">We strive for the highest quality in everything we do.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="container">
                <h2 class="section-title text-center" data-aos="fade-up">Our Team</h2>
                <div class="row g-4">
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="card team-member border-0 shadow-sm">
                            <img src="https://source.unsplash.com/random/400x400?portrait1" class="card-img-top"
                                alt="Team Member 1">
                            <div class="card-body text-center">
                                <h5 class="card-title">John Doe</h5>
                                <p class="card-text">CEO & Founder</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="card team-member border-0 shadow-sm">
                            <img src="https://source.unsplash.com/random/400x400?portrait2" class="card-img-top"
                                alt="Team Member 2">
                            <div class="card-body text-center">
                                <h5 class="card-title">Jane Smith</h5>
                                <p class="card-text">CTO</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                        <div class="card team-member border-0 shadow-sm">
                            <img src="https://source.unsplash.com/random/400x400?portrait3" class="card-img-top"
                                alt="Team Member 3">
                            <div class="card-body text-center">
                                <h5 class="card-title">Mike Johnson</h5>
                                <p class="card-text">Lead Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5 bg-light">
            <div class="container">
                <h2 class="section-title text-center" data-aos="fade-up">Our Journey</h2>
                <div class="timeline">
                    <div class="timeline-item" data-aos="fade-right">
                        <div class="timeline-content">
                            <h3>2010</h3>
                            <p>Company founded in a small garage</p>
                        </div>
                    </div>
                    <div class="timeline-item" data-aos="fade-left">
                        <div class="timeline-content">
                            <h3>2015</h3>
                            <p>Launched our first major product</p>
                        </div>
                    </div>
                    <div class="timeline-item" data-aos="fade-right">
                        <div class="timeline-content">
                            <h3>2018</h3>
                            <p>Expanded operations globally</p>
                        </div>
                    </div>
                    <div class="timeline-item" data-aos="fade-left">
                        <div class="timeline-content">
                            <h3>2023</h3>
                            <p>Reached 1 million happy customers</p>
                        </div>
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
    <!-- Font Awesome -->
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