<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>WaterLand - Water Park Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wdth,wght@0,75..100,300..800;1,75..100,300..800&display=swap"
        rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->

    <link href="{{asset("Waterland/lib/animate/animate.min.css")}}" rel="stylesheet" />
    <link href="{{asset("Waterland/lib/lightbox/css/lightbox.min.css")}}" rel="stylesheet" />
    <link href="{{asset('Waterland/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('Waterland/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="{{asset('Waterland/css/style.css')}}" rel="stylesheet" />
</head>

<body>

    <!-- Navbar & Hero Start -->
    <div class="container-fluid nav-bar sticky-top px-4 py-2 py-lg-0">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a href="" class="navbar-brand p-0">
                <h1 class="display-6 text-dark">
                    <i class="fas fa-swimmer text-primary me-3"></i>WaterLand
                </h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="/" class="nav-item nav-link active">Home</a>
                    <a href="/about" class="nav-item nav-link">About</a>
                    <a href="service.html" class="nav-item nav-link">Service</a>
                    <a href="blog.html" class="nav-item nav-link">Blog</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="feature.html" class="dropdown-item">Our Feature</a>
                            <a href="gallery.html" class="dropdown-item">Our Gallery</a>
                            <a href="attraction.html" class="dropdown-item">Attractions</a>
                            <a href="package.html" class="dropdown-item">Ticket Packages</a>
                            <a href="team.html" class="dropdown-item">Our Team</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="404.html" class="dropdown-item">404 Page</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <div class="team-icon d-none d-xl-flex justify-content-center me-3">
                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
                <a href="#" class="btn btn-primary rounded-pill py-2 px-4 flex-shrink-0">Get Started</a>
            </div>
        </nav>
    </div>
    <!-- Navbar & Hero End -->
    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="footer-item">
                        <a href="index.html" class="p-0">
                            <h4 class="text-white mb-4">
                                <i class="fas fa-swimmer text-primary me-3"></i>WaterLand
                            </h4>
                            <!-- <img src="img/logo.png" alt="Logo"> -->
                        </a>
                        <p class="mb-2">
                            Dolor amet sit justo amet elitr clita ipsum
                            elitr est.Lorem ipsum dolor sit amet,
                            consectetur adipiscing...
                        </p>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-map-marker-alt text-primary me-3"></i>
                            <p class="text-white mb-0">
                                123 Street New York.USA
                            </p>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-envelope text-primary me-3"></i>
                            <p class="text-white mb-0">info@example.com</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fa fa-phone-alt text-primary me-3"></i>
                            <p class="text-white mb-0">(+012) 3456 7890</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-2">
                    <div class="footer-item">
                        <h4 class="text-white mb-4">Quick Links</h4>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> About
                            Us</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i>
                            Feature</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i>
                            Attractions</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i>
                            Tickets</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Blog</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Contact
                            us</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-2">
                    <div class="footer-item">
                        <h4 class="text-white mb-4">Support</h4>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Privacy
                            Policy</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Terms &
                            Conditions</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i>
                            Disclaimer</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i>
                            Support</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> FAQ</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Help</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="footer-item">
                        <h4 class="text-white mb-4">Opening Hours</h4>
                        <div class="opening-date mb-3 pb-3">
                            <div class="opening-clock flex-shrink-0">
                                <h6 class="text-white mb-0 me-auto">
                                    Monday - Friday:
                                </h6>
                                <p class="mb-0">
                                    <i class="fas fa-clock text-primary me-2"></i>
                                    11:00 AM - 16:00 PM
                                </p>
                            </div>
                            <div class="opening-clock flex-shrink-0">
                                <h6 class="text-white mb-0 me-auto">
                                    Satur - Sunday:
                                </h6>
                                <p class="mb-0">
                                    <i class="fas fa-clock text-primary me-2"></i>
                                    09:00 AM - 17:00 PM
                                </p>
                            </div>
                            <div class="opening-clock flex-shrink-0">
                                <h6 class="text-white mb-0 me-auto">
                                    Holiday:
                                </h6>
                                <p class="mb-0">
                                    <i class="fas fa-clock text-primary me-2"></i>
                                    09:00 AM - 17:00 PM
                                </p>
                            </div>
                        </div>
                        <div>
                            <p class="text-white mb-2">Payment Accepted</p>
                            <img src="img/payment.png" class="img-fluid" alt="Image" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('Waterland/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('Waterland/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('Waterland/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('Waterland/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('Waterland/lib/lightbox/js/lightbox.min.js')}}"></script>
    <script src="{{asset('Waterland/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('Waterland/js/main.js')}}"></script>
</body>

</html>