<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap Min CSS -->
    <link rel="stylesheet" href="{{ asset('homepage/assets/css/bootstrap.min.css') }}">
    <!-- Owl Theme Default Min CSS -->
    <link rel="stylesheet" href="{{ asset('homepage/assets/css/owl.theme.default.min.css') }}">
    <!-- Owl Carousel Min CSS -->
    <link rel="stylesheet" href="{{ asset('homepage/assets/css/owl.carousel.min.css') }}">
    <!-- Owl Magnific Min CSS -->
    <link rel="stylesheet" href="{{ asset('homepage/assets/css/magnific-popup.min.css') }}">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="{{ asset('homepage/assets/css/animate.min.css') }}">
    <!--=== BoxIcons Min CSS ===-->
    <link rel="stylesheet" href="{{ asset('homepage/assets/css/boxicons.min.css') }}">
    <!--=== FlatIcon CSS ===-->
    <link rel="stylesheet" href="{{ asset('homepage/assets/css/flaticon.css') }}">
    <!--=== MeanMenu Min CSS ===-->
    <link rel="stylesheet" href="{{ asset('homepage/assets/css/meanmenu.min.css') }}">
    <!-- Nice Select Min CSS -->
    <link rel="stylesheet" href="{{ asset('homepage/assets/css/nice-select.min.css') }}">
    <!-- Odometer Min CSS-->
    <link rel="stylesheet" href="{{ asset('homepage/assets/css/odometer.min.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('homepage/assets/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('homepage/assets/css/responsive.css') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('homepage/assets/img/favicon.png') }}">

    <!-- Title -->
    <title>ConstructionERP - Construction Company ERP</title>
</head>
<body>
    <!-- Start Preloader Area -->
    <div class="loader-wrapper">
        <div class="loader">
            <div class="dot-wrap">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
    </div>
    <!-- End Preloader Area -->

    <!-- Start Header Area -->
    <header class="header-area">
        <!-- Start Top Header -->
        @include('homepage.top-header')

        <!-- Start Top Header -->

        <!-- Start Nav Area -->
        @include('homepage.nav-area')
        <!-- End Nav Area -->
    </header>
    <!-- End Header Area -->

    <!-- Start Sidebar Modal -->
    @include('homepage.sidebar-modal')

    <!-- End Sidebar Modal -->

    <!-- Stat Hero Slider Area -->
    @include('homepage.hero-slider')

    <!-- End Hero Slider Area -->

    <!-- Start Features Area -->
    <section class="feathers-area feathers-area-style-two">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-feathers">
                        <i class="flaticon-planning"></i>
                        <h3>Total initial planning</h3>
                        <p>Lorem ipsum dolor sit amet, conse etur adipiscing elit, sed do eiusmo tempor incididunt dolore magna</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-feathers">
                        <i class="flaticon-stopwatch"></i>
                        <h3>First working process</h3>
                        <p>Lorem ipsum dolor sit amet, conse etur adipiscing elit, sed do eiusmo tempor incididunt dolore magna</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-feathers">
                        <i class="flaticon-cost"></i>
                        <h3>Affordable price</h3>
                        <p>Lorem ipsum dolor sit amet, conse etur adipiscing elit, sed do eiusmo tempor incididunt dolore magna</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Features Area -->

    <!-- Start Who We Are Area -->
    <section class="who-we-are-area who-we-are-area-style-two pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="who-we-are-content">
                        <span class="top-title">WHO WE AREA</span>
                        <h2>We are <span>conzio</span> one of the largest construction companies in the world</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident quas dolor, quidem quo delectus molestias sint? Molestiae est, maxime vero ad ipsum quia labore repudiandae beatae reprehenderit illum alias</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-who-we-are">
                        <h3>Our vision and values</h3>
                        <p>Lorem ipsum dolor sit amet, conse etur adipiscing elit, sed do eiusmo tempor incididunt dolore magna.</p>
                    </div>

                    <div class="single-who-we-are">
                        <h3>Our mission</h3>
                        <p>Lorem ipsum dolor sit amet, conse etur adipiscing elit, sed do eiusmo tempor incididunt dolore magna.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="who-we-area-img-3">
            <img src="{{ asset('homepage/assets/img/who-we-area-img/who-we-area-img-3.jpg') }}" alt="Image">
        </div>
    </section>
    <!-- End Who We Are Area -->

    <!-- Start Services Area -->
    <section class="services-area services-area-style-two pt-100 pb-70">
        <div class="container">
            <div class="section-title white-title">
                <span>OUR SERVICES</span>
                <h2>Providing quality services</h2>
            </div>

            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-services">
                        <i class="flaticon-estimate"></i>
                        <h3>Cost estimation</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>

                        <a href="single-services.html" class="read-more">
                            Read More
                            <span class="flaticon-next"></span>
                        </a>

                        <span class="count">1</span>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single-services">
                        <i class="flaticon-home"></i>
                        <h3>Architectural design</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>

                        <a href="single-services.html" class="read-more">
                            Read More
                            <span class="flaticon-next"></span>
                        </a>

                        <span class="count">2</span>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single-services">
                        <i class="flaticon-project-management"></i>
                        <h3>Construction management</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>

                        <a href="single-services.html" class="read-more">
                            Read More
                            <span class="flaticon-next"></span>
                        </a>

                        <span class="count">3</span>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single-services">
                        <i class="flaticon-interior-design"></i>
                        <h3>Interior design</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>

                        <a href="single-services.html" class="read-more">
                            Read More
                            <span class="flaticon-next"></span>
                        </a>

                        <span class="count">4</span>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single-services">
                        <i class="flaticon-customer-support"></i>
                        <h3>Custom solutions</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>

                        <a href="single-services.html" class="read-more">
                            Read More
                            <span class="flaticon-next"></span>
                        </a>

                        <span class="count">5</span>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single-services">
                        <i class="flaticon-manufacturing"></i>
                        <h3>Factory manufacture</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>

                        <a href="single-services.html" class="read-more">
                            Read More
                            <span class="flaticon-next"></span>
                        </a>

                        <span class="count">6</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="services-bg">
            <img src="{{ asset('homepage/assets/img/services-bg.jpg') }}" alt="Image">
        </div>
    </section>
    <!-- End Services Area -->

    <!-- Start Counter Area -->
    <section class="counter-area counter-area-style-two pt-100 pb-70 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter">
                        <i class="flaticon-experience"></i>

                        <h2>
                            <span class="odometer" data-count="20">00</span>
                            <span class="target">%</span>
                        </h2>

                        <h3>Years of experience</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter">
                        <i class="flaticon-customer-review"></i>

                        <h2>
                            <span class="odometer" data-count="1346">00</span>
                        </h2>

                        <h3>Satisfied customers</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter">
                        <i class="flaticon-complete"></i>

                        <h2>
                            <span class="odometer" data-count="99">00</span>
                        </h2>

                        <h3>Complete projects</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter">
                        <i class="flaticon-trophy"></i>

                        <h2>
                            <span class="odometer" data-count="13">00</span>
                        </h2>

                        <h3>Award winning</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Counter Area -->

    <!-- Start Our Skills Area -->
    @include('homepage.skills-area')

    <!-- End Our Skills Area -->

    <!-- Start Projects Area -->
    @include('homepage.projects-area')

    <!-- End Projects Area -->

    <!-- Start Partner Area -->
    @include('homepage.partner-area')

    <!-- End Partner Area -->

    <!-- Start Price Area -->
    @include('homepage.price-area')

    <!-- End Price Area -->

    <!-- Start Testimonials Area -->
    @include('homepage.testimonials-area')

    <!-- End Testimonials Area -->

    <!-- Start Team Area -->
    @include('homepage.team-area')

    <!-- End Team Area -->

    <!-- Start Blog Area -->
    @include('homepage.blog-area')

    <!-- End Blog Area -->

    <!-- Start Subscribe Area -->
    @include('homepage.subscribe-area')

    <!-- End Subscribe Area -->

    <!-- Start Footer Top Area -->
    <footer class="footer-top-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget">
                        <a href="{{ route('homepage.index') }}">
                            <img src="{{ asset('homepage/assets/img/white-logo.png') }}" alt="Image">
                        </a>

                        <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consec tetur adipiscing.</p>

                        <ul class="social-icon">
                            <li>
                                <a href="https://www.twitter.com/" target="_blank">
                                    <i class="bx bxl-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/" target="_blank">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <i class="bx bxl-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/" target="_blank">
                                    <i class="bx bxl-linkedin-square"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget">
                        <h3>Our services</h3>

                        <ul class="import-link">
                            <li>
                                <a href="services-style-one.html">Construction planning</a>
                            </li>
                            <li>
                                <a href="single-project.html">Road construction</a>
                            </li>
                            <li>
                                <a href="services-style-two.html">Power & energy</a>
                            </li>
                            <li>
                                <a href="services-style-three.html">Site inspection</a>
                            </li>
                            <li>
                                <a href="single-services.html">Cost estimation</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget">
                        <h3>Contact us</h3>

                        <ul class="address">
                            <li class="location">
                                <i class="bx bxs-location-plus"></i>
                                6890 Blvd, The Bronx, NY 1058 New York, USA
                            </li>
                            <li>
                                <i class="bx bxs-envelope"></i>
                                <a href=""><span class="__cf_email__"></span></span></a>
                                <a href="#">skype: Example</a>
                            </li>
                            <li>
                                <i class="bx bxs-phone-call"></i>
                                <a href="tel:15143125678">+1 (514) 312-5678</a>
                                <a href="tel:15143126688">+1 (514) 312-6688</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget">
                        <h3>Business hours</h3>
                        <p>We support our clients 24 hours a day. Our office is open at times.</p>

                        <ul class="time">
                            <li>
                                Mon-Fri:
                                <span>9:00 AM - 5:30 PM</span>
                            </li>
                            <li>
                                Saturday:
                                <span>9:00 AM - 4:00 PM</span>
                            </li>
                            <li>
                                Sunday:
                                <span>Closed</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer Top Area -->

    <!-- Start Footer Bottom Area -->
    <footer class="footer-bottom-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <p>© Conzio is Proudly Owned by <a href="https://envytheme.com/" target="_blank">EnvyTheme</a></p>
                </div>

                <div class="col-lg-6">
                    <ul class="footer-bottom-menu">
                        <li>
                            <a href="privacy-policy.html">
                                Privacy policy
                            </a>
                        </li>
                        <li>
                            <a href="terms-conditions.html">
                                Terms and conditions
                            </a>
                        </li>
                        <li>
                            <a href="contact.html">
                                Contact us
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer Bottom Area -->

    <!-- Start Go Top Area -->
    <div class="go-top">
        <i class="bx bx-chevrons-up"></i>
        <i class="bx bx-chevrons-up"></i>
    </div>
    <!-- End Go Top Area -->

    <!-- Jquery Min JS -->

    <script src="{{ asset('homepage/assets/js/jquery.min.js') }}"></script>
    <!-- Bootstrap Bundle Min JS -->
    <script src="{{ asset('homepage/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!--=== MeanMenu Min JS ===-->
    <script src="{{ asset('homepage/assets/js/meanmenu.min.js') }}"></script>
    <!-- Wow Min JS -->
    <script src="{{ asset('homepage/assets/js/wow.min.js') }}"></script>
    <!-- Owl Carousel Min JS -->
    <script src="{{ asset('homepage/assets/js/owl.carousel.min.js') }}"></script>
    <!-- Owl Magnific Min JS -->
    <script src="{{ asset('homepage/assets/js/magnific-popup.min.js') }}"></script>
    <!-- Nice Select Min JS -->
    <script src="{{ asset('homepage/assets/js/nice-select.min.js') }}"></script>
    <!-- Jarallax Min JS -->
    <script src="{{ asset('homepage/assets/js/jarallax.min.js') }}"></script>
    <!-- Mixitup Min JS -->
    <script src="{{ asset('homepage/assets/js/mixitup.min.js') }}"></script>
    <!-- Appear Min JS -->
    <script src="{{ asset('homepage/assets/js/appear.min.js') }}"></script>
    <!-- Odometer Min JS -->
    <script src="{{ asset('homepage/assets/js/odometer.min.js') }}"></script>
    <!-- Form Validator Min JS -->
    <script src="{{ asset('homepage/assets/js/form-validator.min.js') }}"></script>
    <!-- Contact JS -->
    <script src="{{ asset('homepage/assets/js/contact-form-script.js') }}"></script>
    <!--=== AjaxChimp Min JS ===-->
    <script src="{{ asset('homepage/assets/js/ajaxchimp.min.js') }}"></script>
    <!-- Custom JS -->
    <script src="{{ asset('homepage/assets/js/custom.js') }}"></script>
</body>
</html>
