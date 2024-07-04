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
        <div class="top-header top-header-style-two">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-sm-8 ps-0">
                        <ul class="header-left-content">
                            <li>
                                <i class="flaticon-phone-ringing"></i>
                                <a href="tel:15143125678">+1 (514) 312-5678</a>
                            </li>
                            <li>
                                <i class="flaticon-email"></i>
                                <a href=""><span class=""></span>></a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-sm-4 pe-0">
                        <ul class="header-right-content">
                            <li>
                                <a href="https://www.twitter.com/" target="_blank">
                                    <i class="bx bxl-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <i class="bx bxl-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/" target="_blank">
                                    <i class="bx bxl-facebook"></i>
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
            </div>
        </div>
        <!-- Start Top Header -->

        <!-- Start Nav Area -->
        <div class="navbar-area navbar-area-style-two">
            <div class="mobile-nav">
                <div class="container-fluid">
                    <a href="{{ route('homepage.index') }}" class="logo">
                        <img src="{{ asset('homepage/assets/img/logo.png') }}" alt="Logo">
                    </a>
                </div>
            </div>

            <div class="main-nav">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-md">
                        <a class="navbar-brand" href="{{ route('homepage.index') }}">
                            <img src="{{ asset('homepage/assets/img/logo-2.jpg') }}" alt="Logo">
                        </a>

                        <div class="collapse navbar-collapse mean-menu">
                            <div class="others-option others-option-style-two">
                                <div class="search-box">
                                    <form class="search-form">
                                        <input class="form-control" name="search" placeholder="Search..." type="text">
                                        <button class="search-btn" type="submit">
                                            <i class="bx bx-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>

                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="#" class="nav-link active">
                                        Home
                                        <i class="bx bx-chevron-down"></i>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ route('homepage.index') }}" class="nav-link">Home One</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index-2.html" class="nav-link active">Home Two</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index-3.html" class="nav-link">Home Three</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Pages
                                        <i class="bx bx-chevron-down"></i>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="about.html" class="nav-link">About</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="team.html" class="nav-link">Team</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                Projects
                                                <i class='bx bx-chevron-right'></i>
                                            </a>

                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="projects-column-two.html" class="nav-link">Projects Column Two</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="projects-column-three.html" class="nav-link">Projects Column Three</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="projects-column-four.html" class="nav-link">Projects Column Four</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="single-project.html" class="nav-link">Single Project</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="nav-item">
                                            <a href="pricing.html" class="nav-link">Pricing </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                User
                                                <i class='bx bx-chevron-right'></i>
                                            </a>

                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="my-account.html" class="nav-link">My Account</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="log-in.html" class="nav-link">Log In</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="registration.html" class="nav-link">Registration</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="recover-password.html" class="nav-link">Recover Password</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="nav-item">
                                            <a href="faq.html" class="nav-link">FAQ</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="privacy-policy.html" class="nav-link">Privacy Policy</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="terms-conditions.html" class="nav-link">Terms & Conditions</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="coming-soon.html" class="nav-link">Coming Soon</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="404.html" class="nav-link">404 Error Page</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Services
                                        <i class="bx bx-chevron-down"></i>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="services-style-one.html" class="nav-link">Services Style One</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="services-style-two.html" class="nav-link">Services Style Two</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="services-style-three.html" class="nav-link">Services Style Three</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="single-services.html" class="nav-link">Single Service</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Shop
                                        <i class="bx bx-chevron-down"></i>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="shop.html" class="nav-link">Shop</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="cart.html" class="nav-link">Cart</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="checkout.html" class="nav-link">Checkout</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="single-product.html" class="nav-link">Single Product</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="wishlist.html" class="nav-link">Wishlist</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Blog
                                        <i class="bx bx-chevron-down"></i>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="blog-column-one.html" class="nav-link">Blog Column One</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blog-column-two.html" class="nav-link">Blog Column Two</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blog-column-three.html" class="nav-link">Blog Column Three</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blog-left-sidebar.html" class="nav-link">Blog Left Sidebar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="single-blog.html" class="nav-link">Single Blog</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="contact.html" class="nav-link">Contact</a>
                                </li>
                            </ul>

                            <div class="others-option others-option-style-right">
                                <div class="cart-icon">
                                    <a href="cart.html">
                                        <i class="flaticon-shopping-cart"></i>
                                        <span>0</span>
                                    </a>
                                </div>

                                <div class="sidebar-menu">
                                    <a href="#" class="burger-menu">
                                        <i class="flaticon-menu"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="others-option-for-responsive">
                <div class="container">
                    <div class="dot-menu">
                        <div class="inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="option-inner">
                            <div class="others-option justify-content-center d-flex align-items-center">
                                <div class="search-box">
                                    <form class="search-form">
                                        <input class="form-control" name="search" placeholder="Search..." type="text">
                                        <button class="search-btn" type="submit">
                                            <i class="bx bx-search"></i>
                                        </button>
                                    </form>
                                </div>

                                <div class="sidebar-menu">
                                    <a href="#" class="burger-menu">
                                        <i class="flaticon-menu"></i>
                                    </a>
                                </div>

                                <div class="cart-icon">
                                    <a href="cart.html">
                                        <i class="flaticon-shopping-cart"></i>
                                        <span>0</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Nav Area -->
    </header>
    <!-- End Header Area -->

    <!-- Start Sidebar Modal -->
    <div class="sidebar-modal">
        <div class="sidebar-modal-inner">
            <div class="sidebar-header">
                <div class="sidebar-logo">
                    <img src="{{ asset('homepage/assets/img/logo.png') }}" alt="Image">
                </div>

                <span class="close-btn sidebar-modal-close-btn">
                    <i class="bx bx-x"></i>
                </span>
            </div>

            <div class="sidebar-about">
                <div class="title">
                    <p>Conzio is a high quality video production house. We make a awesome branded videos. It is the analogical of film making, but the images are digitally recorded instead of film stock.</p>
                </div>
            </div>

            <div class="contact-us">
                <h2>Contact Us</h2>

                <ul>
                    <li>
                        <i class="flaticon-placeholder"></i>
                        6890 Blvd, The Bronx, NY 1058 New York, USA
                    </li>
                    <li>
                        <i class="flaticon-email-1"></i>
                        <a href=""><span class=""></span></span></a>
                        <a href="#">Skype: example</a>
                    </li>
                    <li>
                        <i class="flaticon-call"></i>
                        <a href="tel:+1-(514)-312-5678">+1 (514) 312-5678</a>
                        <a href="tel:+1-(514)-312-6688">+1 (514) 312-6688</a>
                    </li>
                </ul>
            </div>

            <div class="sidebar-gallery-feed">
                <h2>Gallery</h2>

                <ul>
                    <li>
                        <a href="#">
                            <img src="{{ asset('homepage/assets/img/gallery-img/gallery-img-1.jpg') }}" alt="image">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('homepage/assets/img/gallery-img/gallery-img-2.jpg') }}" alt="image">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('homepage/assets/img/gallery-img/gallery-img-3.jpg') }}" alt="image">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('homepage/assets/img/gallery-img/gallery-img-4.jpg') }}" alt="image">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('homepage/assets/img/gallery-img/gallery-img-5.jpg') }}" alt="image">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('homepage/assets/img/gallery-img/gallery-img-6.jpg') }}" alt="image">
                        </a>
                    </li>
                </ul>
            </div>

            <div class="sidebar-follow-us">
                <h2>Sidebar Follow</h2>

                <ul class="social-wrap">
                    <li>
                        <a href="#" target="_blank">
                            <i class="bx bxl-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            <i class="bx bxl-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            <i class="bx bxl-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            <i class="bx bxl-youtube"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Sidebar Modal -->

    <!-- Stat Hero Slider Area -->
    <div class="hero-slider-area hero-slider-two owl-carousel owl-theme">
        <div class="hero-slider-item bg-3">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container-fluid">
                        <div class="hero-slider-content one">
                            <img src="{{ asset('homepage/assets/img/hero-slider-img/slider-logo.png') }}" alt="Image">
                            <h1>Build anything anywhere</h1>
                            <p>We are a construction & infrastructure services company</p>

                            <div class="hero-slider-btn">
                                <a href="about.html" class="default-btn">
                                    View more
                                </a>

                                <a href="contact.html" class="default-btn active">
                                    Contact us
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hero-slider-item bg-4">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container-fluid">
                        <div class="hero-slider-content two">
                            <img src="{{ asset('homepage/assets/img/hero-slider-img/slider-logo.png') }}" alt="Image">
                            <h1>We are providing best construction service</h1>
                            <p>We are a construction & infrastructure services company</p>

                            <div class="hero-slider-btn">
                                <a href="about.html" class="default-btn">
                                    View more
                                </a>

                                <a href="contact.html" class="default-btn active">
                                    Contact us
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    <section class="our-skills-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="skills-content">
                        <span class="top-title">OUR SKILLS </span>
                        <h2>The efficiency of our company</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendis ultrices gravida. maecenas accumsan lacus vel facilisis.</p>
                    </div>

                    <div class="all-skill-bar">
                        <div class="skill-bar" data-percentage="95%">
                            <h4 class="progress-title-holder">
                                <span class="progress-title">Company machinery</span>
                                <span class="progress-number-wrapper">
                                    <span class="progress-number-mark">
                                        <span class="percent"></span>
                                        <span class="down-arrow"></span>
                                    </span>
                                </span>
                            </h4>

                            <div class="progress-content-outter">
                                <div class="progress-content"></div>
                            </div>
                        </div>

                        <div class="skill-bar" data-percentage="85%">
                            <h4 class="progress-title-holder clearfix">
                                <span class="progress-title">Qualified engineer</span>
                                <span class="progress-number-wrapper">
                                    <span class="progress-number-mark">
                                        <span class="percent"></span>
                                        <span class="down-arrow"></span>
                                    </span>
                                </span>
                            </h4>

                            <div class="progress-content-outter">
                                <div class="progress-content"></div>
                            </div>
                        </div>

                        <div class="skill-bar" data-percentage="100%">
                            <h4 class="progress-title-holder clearfix">
                                <span class="progress-title">Client satisfaction</span>
                                <span class="progress-number-wrapper">
                                    <span class="progress-number-mark">
                                        <span class="percent"></span>
                                        <span class="down-arrow"></span>
                                    </span>
                                </span>
                            </h4>

                            <div class="progress-content-outter">
                                <div class="progress-content"></div>
                            </div>
                        </div>

                        <div class="skill-bar mb-0" data-percentage="90%">
                            <h4 class="progress-title-holder clearfix">
                                <span class="progress-title">Construction design</span>
                                <span class="progress-number-wrapper">
                                    <span class="progress-number-mark">
                                        <span class="percent"></span>
                                        <span class="down-arrow"></span>
                                    </span>
                                </span>
                            </h4>

                            <div class="progress-content-outter">
                                <div class="progress-content"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="skill-img">
                        <img src="{{ asset('homepage/assets/img/skill-img-2.jpg') }}" alt="Image">

                        <div class="video-content">
                            <a href="https://www.youtube.com/watch?v=S2-u7u_4rYk" class="video-btn popup-youtube">
                                <i class="flaticon-play-button"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Skills Area -->

    <!-- Start Projects Area -->
    <section class="projects-area pb-70">
        <div class="container">
            <div class="section-title">
                <span>FEATURED PROJECTS</span>
                <h2>Being able to do the right things at the right time.</h2>
            </div>

            <div class="shorting-menu">
                <button class="filter" data-filter="all">
                    All projects
                </button>

                <button class="filter" data-filter=".a">
                    Commercial
                </button>

                <button class="filter" data-filter=".b">
                    Industrial
                </button>

                <button class="filter" data-filter=".c">
                    Architecture
                </button>

                <button class="filter" data-filter=".d">
                    Plumbing
                </button>

                <button class="filter" data-filter=".e">
                    Interior
                </button>
            </div>

            <div id="Container" class="row">
                <div class="col-lg-4 col-sm-4 a c d e mix">
                    <div class="projects bg-1">
                        <a href="single-project.html" class="view-projects">
                            View projects
                        </a>
                    </div>
                </div>

                <div class="col-lg-8 col-sm-8">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6 a c e mix">
                            <div class="projects bg-2">
                                <a href="single-project.html" class="view-projects">
                                    View projects
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-8 col-sm-6 a d mix">
                            <div class="projects bg-3">
                                <a href="single-project.html" class="view-projects">
                                    View projects
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-8 col-sm-6 b mix">
                            <div class="projects bg-5">
                                <a href="single-project.html" class="view-projects">
                                    View projects
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 b c d e mix">
                            <div class="projects bg-4">
                                <a href="single-project.html" class="view-projects">
                                    View projects
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Projects Area -->

    <!-- Start Partner Area -->
    <div class="partner-area partner-area-style-two ptb-100 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="partner-slider owl-theme owl-carousel">
                <div class="partner-item">
                    <a href="#">
                        <img src="{{ asset('homepage/assets/img/partner-logo/partner-logo-1.png') }}" alt="Image">
                    </a>
                </div>

                <div class="partner-item">
                    <a href="#">
                        <img src="{{ asset('homepage/assets/img/partner-logo/partner-logo-2.png') }}" alt="Image">
                    </a>
                </div>

                <div class="partner-item">
                    <a href="#">
                        <img src="{{ asset('homepage/assets/img/partner-logo/partner-logo-3.png') }}" alt="Image">
                    </a>
                </div>

                <div class="partner-item">
                    <a href="#">
                        <img src="{{ asset('homepage/assets/img/partner-logo/partner-logo-4.png') }}" alt="Image">
                    </a>
                </div>

                <div class="partner-item">
                    <a href="#">
                        <img src="{{ asset('homepage/assets/img/partner-logo/partner-logo-5.png') }}" alt="Image">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Partner Area -->

    <!-- Start Price Area -->
    <section class="price-area price-area-style-two pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>PRICING PLANS</span>
                <h2>Choose your perfect plan</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-price-card">
                        <div class="price-title">
                            <h3>Basic plan</h3>
                            <h2>39<sub>$</sub></h2>
                            <span>Per month</span>
                        </div>

                        <ul>
                            <li>
                                Plan sketching
                            </li>
                            <li>
                                6-Month fixed price
                            </li>
                            <li>
                                Marketing strategy
                            </li>
                            <li>
                                Webmail access
                            </li>
                            <li>
                                Outstanding support
                            </li>
                            <li>
                                24/7 Customer help desk
                            </li>
                        </ul>

                        <a href="#" class="default-btn">
                            Read More
                            <span class="flaticon-next"></span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single-price-card active">
                        <div class="price-title">
                            <h3>Ultra plan</h3>
                            <h2>59<sub>$</sub></h2>
                            <span>Per month</span>
                        </div>

                        <ul>
                            <li>
                                Plan sketching
                            </li>
                            <li>
                                8-Month fixed price
                            </li>
                            <li>
                                Marketing strategy
                            </li>
                            <li>
                                Webmail access
                            </li>
                            <li>
                                Outstanding support
                            </li>
                            <li>
                                24/7 Customer help desk
                            </li>
                        </ul>

                        <a href="#" class="default-btn">
                            Read More
                            <span class="flaticon-next"></span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single-price-card">
                        <div class="price-title">
                            <h3>Enterprise plan</h3>
                            <h2>99<sub>$</sub></h2>
                            <span>Per month</span>
                        </div>

                        <ul>
                            <li>
                                Plan sketching
                            </li>
                            <li>
                                12-Month fixed price
                            </li>
                            <li>
                                Marketing strategy
                            </li>
                            <li>
                                Webmail access
                            </li>
                            <li>
                                Outstanding support
                            </li>
                            <li>
                                24/7 Customer help desk
                            </li>
                        </ul>

                        <a href="#" class="default-btn">
                            Read More
                            <span class="flaticon-next"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Price Area -->

    <!-- Start Testimonials Area -->
    <section class="testimonials-area testimonials-area-style-two ptb-100">
        <div class="container">
            <div class="section-title white-title">
                <span>TESTIMONIALS</span>
                <h2>What our clients say</h2>
            </div>

            <div class="testimonials-all-content">
                <div class="testimonials-slider owl-theme owl-carousel">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="{{ asset('homepage/assets/img/testimonials-img/testimonials-img-1.jpg') }}" alt="Image">
                        </div>

                        <div class="col-lg-8">
                            <div class="testimonials-content">
                                <div class="testimonials-name">
                                    <i class="flaticon-quotation"></i>
                                    <h3>Donald Sheetz</h3>
                                    <span>Client</span>
                                </div>

                                <p>“Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet ut labore et dolore magna aliquyam erat, sed diam voluptua justo duo dolores et ea rebum.”</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <img src="{{ asset('homepage/assets/img/testimonials-img/testimonials-img-2.jpg') }}" alt="Image">
                        </div>

                        <div class="col-lg-8">
                            <div class="testimonials-content">
                                <div class="testimonials-name">
                                    <i class="flaticon-quotation"></i>
                                    <h3>Juhon Sheetz</h3>
                                    <span>Client</span>
                                </div>

                                <p>“Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet ut labore et dolore magna aliquyam erat, sed diam voluptua justo duo dolores et ea rebum.”</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="testimonials-shape">
            <img src="{{ asset('homepage/assets/img/testimonials-img/testimonials-shape.jpg') }}" alt="Image">
        </div>
    </section>
    <!-- End Testimonials Area -->

    <!-- Start Team Area -->
    <section class="team-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>PROFESSIONALS</span>
                <h2>Meet our skilled team</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-team-member">
                        <img src="{{ asset('homepage/assets/img/team-img/team-img-1.jpg') }}" alt="Image">

                        <div class="team-content">
                            <span>PROJECT HEAD</span>
                            <h3>David Cunningham</h3>

                            <div class="team-social">
                                <a href="#" class="control">
                                    <i class="bx bx-share-alt"></i>
                                </a>

                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="bx bxl-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="bx bxl-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="bx bxl-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="bx bxl-linkedin-square"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-team-member">
                        <img src="{{ asset('homepage/assets/img/team-img/team-img-2.jpg') }}" alt="Image">

                        <div class="team-content">
                            <span>INTERIOR DESIGNER</span>
                            <h3>Michele A. Murphy</h3>

                            <div class="team-social">
                                <a href="#" class="control">
                                    <i class="bx bx-share-alt"></i>
                                </a>

                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="bx bxl-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="bx bxl-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="bx bxl-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="bx bxl-linkedin-square"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-team-member">
                        <img src="{{ asset('homepage/assets/img/team-img/team-img-3.jpg') }}" alt="Image">

                        <div class="team-content">
                            <span>ARCHITECT</span>
                            <h3>Margert Scott</h3>

                            <div class="team-social">
                                <a href="#" class="control">
                                    <i class="bx bx-share-alt"></i>
                                </a>

                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="bx bxl-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="bx bxl-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="bx bxl-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="bx bxl-linkedin-square"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team Area -->

    <!-- Start Blog Area -->
    <section class="blog-area pb-70">
        <div class="container">
            <div class="section-title">
                <span>OUR BLOG</span>
                <h2>Read the latest news</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-post">
                        <a href="single-blog.html">
                            <img src="{{ asset('homepage/assets/img/blog-img/blog-img-1.jpg') }}" alt="Image">
                        </a>

                        <div class="news-content">
                            <ul class="admin">
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('homepage/assets/img/blog-img/admin-img-1.jpg') }}" alt="Image">
                                        Andrew Lawson
                                    </a>
                                </li>
                                <li class="float">
                                    <i class="bx bx-calendar-alt"></i>
                                    22/08/2024
                                </li>
                            </ul>

                            <a href="single-blog.html">
                                <h3>Is one single solution for all types of roofs possible?</h3>
                            </a>

                            <a href="single-blog.html" class="read-more">
                                Read More
                                <span class="flaticon-next"></span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-post">
                        <a href="single-blog.html">
                            <img src="{{ asset('homepage/assets/img/blog-img/blog-img-2.jpg') }}" alt="Image">
                        </a>

                        <div class="news-content">
                            <ul class="admin">
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('homepage/assets/img/blog-img/admin-img-2.jpg') }}" alt="Image">
                                        Carl Batson
                                    </a>
                                </li>
                                <li class="float">
                                    <i class="bx bx-calendar-alt"></i>
                                    23/08/2024
                                </li>
                            </ul>

                            <a href="single-blog.html">
                                <h3>What are the biggest construction companies</h3>
                            </a>

                            <a href="single-blog.html" class="read-more">
                                Read More
                                <span class="flaticon-next"></span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-post">
                        <a href="single-blog.html">
                            <img src="{{ asset('homepage/assets/img/blog-img/blog-img-3.jpg') }}" alt="Image">
                        </a>

                        <div class="news-content">
                            <ul class="admin">
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('homepage/assets/img/blog-img/admin-img-3.jpg') }}" alt="Image">
                                        Lance Miller
                                    </a>
                                </li>
                                <li class="float">
                                    <i class="bx bx-calendar-alt"></i>
                                    21/08/2024
                                </li>
                            </ul>

                            <a href="single-blog.html">
                                <h3>Don’t miss this opportunity to innovate your business</h3>
                            </a>

                            <a href="single-blog.html" class="read-more">
                                Read More
                                <span class="flaticon-next"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->

    <!-- Start Subscribe Area -->
    <section class="subscribe-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="subscribe-content">
                        <span>SUBSCRIBE TO OUR</span>
                        <h2>Newsletter</h2>
                    </div>
                </div>

                <div class="col-lg-9">
                    <form class="newsletter-form" data-toggle="validator">
                        <input type="email" class="form-control" placeholder="Enter email address" name="EMAIL" required="" autocomplete="off">

                        <button class="default-btn" type="submit">
                            Subscribe Now
                        </button>

                        <div id="validator-newsletter" class="form-result"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
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
