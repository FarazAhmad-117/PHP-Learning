<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Get in Touch</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            padding-top: 76px;
            /* Adjust based on your header height */
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
            background: url('https://source.unsplash.com/random/1600x900?communication') center/cover no-repeat;
            opacity: 0.1;
            z-index: 0;
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .contact-form {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        .contact-info {
            background-color: #f8f9fa;
            border-radius: 15px;
            padding: 30px;
        }

        .contact-icon {
            font-size: 2rem;
            color: #6a11cb;
            margin-bottom: 15px;
        }

        #map {
            height: 300px;
            border-radius: 15px;
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
                        <h1 class="display-3 fw-bold mb-4" data-aos="fade-up">Get in Touch</h1>
                        <p class="lead mb-5" data-aos="fade-up" data-aos-delay="200">We're here to help and answer any
                            question you might have. We look forward to hearing from you!</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-7" data-aos="fade-up">
                        <div class="contact-form">
                            <h2 class="mb-4">Send us a Message</h2>
                            <form id="contactForm">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Your Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="subject" class="form-label">Subject</label>
                                    <input type="text" class="form-control" id="subject" name="subject" required>
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Your Message</label>
                                    <textarea class="form-control" id="message" name="message" rows="5"
                                        required></textarea>
                                </div>
                                <button type="submit" class="btn btn-gradient btn-lg">Send Message</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5" data-aos="fade-up" data-aos-delay="200">
                        <div class="contact-info mb-5">
                            <h2 class="mb-4">Contact Information</h2>
                            <div class="mb-4">
                                <div class="contact-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <h3 class="h5">Our Location</h3>
                                <p>123 Innovation Street, Tech City, 12345</p>
                            </div>
                            <div class="mb-4">
                                <div class="contact-icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <h3 class="h5">Phone Number</h3>
                                <p>+1 (123) 456-7890</p>
                            </div>
                            <div>
                                <div class="contact-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <h3 class="h5">Email Address</h3>
                                <p>info@example.com</p>
                            </div>
                        </div>
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center mb-5" data-aos="fade-up">Frequently Asked Questions</h2>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="accordion" id="faqAccordion">
                            <div class="accordion-item" data-aos="fade-up">
                                <h3 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What services do you offer?
                                    </button>
                                </h3>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        We offer a wide range of services including web development, mobile app
                                        development, cloud solutions, and digital marketing. Our team of experts is
                                        dedicated to providing tailored solutions to meet your specific business needs.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="100">
                                <h3 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        How long does it take to complete a project?
                                    </button>
                                </h3>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        The timeline for project completion varies depending on the scope and complexity
                                        of the project. We work closely with our clients to establish realistic
                                        timelines and milestones. On average, small to medium-sized projects can take
                                        anywhere from 4-12 weeks.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                                <h3 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Do you provide ongoing support after project completion?
                                    </button>
                                </h3>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Yes, we offer ongoing support and maintenance packages to ensure your project
                                        continues to run smoothly after launch. Our team is always available to address
                                        any issues, make updates, or provide additional features as your business grows.
                                    </div>
                                </div>
                            </div>
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
    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>
    <!-- Initialize AOS and Leaflet map -->
    <script>
        AOS.init({
            duration: 1000,
            once: true,
        });

        // Initialize Leaflet map
        var map = L.map('map').setView([51.505, -0.09], 13);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
        L.marker([51.5, -0.09]).addTo(map)
            .bindPopup('Our Location')
            .openPopup();

        // Form submission handling
        document.getElementById('contactForm').addEventListener('submit', function (e) {
            e.preventDefault();
            // Here you would typically send the form data to your server
            alert('Thank you for your message. We will get back to you soon!');
            this.reset();
        });
    </script>
</body>
</html>