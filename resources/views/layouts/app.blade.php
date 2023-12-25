<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        SAMA GARMENTS
    </title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.ico')}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />


    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">


    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{ asset('assets/css/flexslider.css') }}">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">

    <!-- Flaticons  -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon/font/flaticon.css') }}">

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <!-- Modernizr JS -->
    <script src="{{ asset('assets/js/modernizr-2.6.2.min.js') }}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
  <script src="{{ asset('assets/js/respond.min.js') }}"></script>
  <![endif]-->
  {{--  <style>
    /* Add shadow to the container */
    #colorlib-services {
        background-image: url(assets/images/main-slider/img5.jpg);
        box-shadow: 0px 0px 0px 100px rgba(0, 0, 0, 0.9); /* Adjust the shadow properties as needed */
      }
  </style>  --}}
  <style>
    .row {
       overflow: hidden;
   }

   .slider-container {
       display: flex;
       width: max-content;
       animation: slideAnimation 41s linear infinite;
       
       /* Adjust the animation duration as needed */
   }

   .col-md-3 {
        flex: 0 0 33.33%;
       /* width: 33.33%; */
       box-sizing: border-box;
       padding: 0 15px;
   }

   @keyframes slideAnimation {
    0%, 100% {
        transform: translateX(0);
    }
    14.29% {
        transform: translateX(0);
    }
    28.57% {
        transform: translateX(-100%);
    }
    42.86% {
        transform: translateX(-100%);
    }
    57.14% {
        transform: translateX(-200%);
    }
    71.43% {
        transform: translateX(-200%);
    }
    /* 85.71% {
        transform: translateX(-300%);
    } */
   }

   </style>
   <style>

    .full-width-image {
        width: 100%; /* Set the width to 100% of the viewport */
        height: auto; /* Automatically adjust the height to maintain aspect ratio */
        display: block; /* Ensure the image is a block-level element */
    }
    .full-width-image img {
        max-width: 100%; /* Ensure the image doesn't exceed its container's width */
        height: auto;
        display: block;
    }

</style>

</head>

<body>

    <div class="colorlib-loader"></div>

    <div id="page">
        <nav class="colorlib-nav" role="navigation">

            <!-- Code for Desktop View -->
            <div class="top-menu desktop-view">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-3">
                            <div class="column">

                                    <div id="logo-container">
                                        <img src="{{ asset('assets/images/logo.png') }}" alt="First Logo">
                                        <div id="colorlib-logo">
                                            <a href="/"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; SAMA GARMENTS</a>


                                        </div>
                                    </div>




                            </div>
                        </div>



                        <div class="col-xs-9 text-right menu-1">
                            <div class="column">

                                <div>
                                    <Ul>
                                        <li><a href="/">Home</a></li>
                                        <li><a href="/about">About Us</a></li>
                                        <li><a href="/services">How We Works</a></li>
                                        <li><a href="/projects">Products</a></li>
                                        <li><a href="/contact">Contact</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Code for Mobile View -->
            <div class="top-menu mobile-view">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">

                            <div id="logo-container">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="First Logo">

                            </div>

                        </div>

                        <div class="col-xs-9 text-right menu-1">

                            <Ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/about">About Us</a></li>
                                    <li><a href="/services">How We Works</a></li>
                                    <li><a href="/projects">Products</a></li>
                                    <li><a href="/contact">Contact</a></li>
                            </ul>
                        </div>

                    </div>



                </div>
            </div>

            <style>
                .logo-text {
                    font-size: 20px;
                }

                /* Styles for Desktop View */
                @media (max-width: 767px) {
                    .top-menu.desktop-view {
                        display: none;
                    }
                }

                /* Styles for Mobile View */
                @media (min-width: 768px) {
                    .top-menu.mobile-view {
                        display: none;
                    }

                    #logo-container {
                        display: flex;
                        align-items: center;
                        justify-content: space-between;
                    }

                    #colorlib-logo {
                        flex-shrink: 0;
                        white-space: nowrap;
                        overflow: hidden;
                        text-overflow: ellipsis;
                    }
                }
                @media (max-width: 999px) {
                    #colorlib-logo {
                        display: none;
                    }
                }
            </style>



        </nav>



        @yield('content')


        @include('fixed_button')

        @if (Route::current()->getName() !== 'login' && Route::current()->getName() !== 'register')
            <footer id="colorlib-footer">
                <div class="contact-information">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row row-pb-md">
                        <div class="col-md-3 colorlib-widget">
                            <h4>About Sama Garments</h4>
                            <p>Sama Garments is an uniform manufacturing industry is the process of producing various textile products through the conversion of fibers (natural or synthetic) into usable textiles for different applications.</p>
                            <p>
                            <ul class="colorlib-social-icons">
                                <li><a href="/"><i class="icon-twitter"></i></a>
                                </li>
                                <li><a href="/"><i
                                            class="icon-facebook"></i></a></li>
                                <li><a href="/"><i class="icon-whatsapp"></i></a></li>
                            </ul>
                            </p>
                        </div>
                        <div class="col-md-3 col-md-push-1 colorlib-widget">
                            <h4>Core Area</h4>
                            <p>
                            <ul class="colorlib-footer-links">
                                <li><a href="#"><i class="icon-check"></i>  Quality Fabrics</a></li>
                                <li><a href="#"><i class="icon-check"></i> Bespoke Tailoring</a></li>
                                <li><a href="#"><i class="icon-check"></i> Logo Branding</a></li>
                                <li><a href="#"><i class="icon-check"></i> Custom designs</a></li>


                            </ul>
                            </p>
                        </div>


                        <div class="col-md-4 col-md-push-1 colorlib-widget">
                            <h4>Contact Info</h4>
                            <ul class="colorlib-footer-links">
                                <li>Sama Al Rahmaniah Readymade Gar Tr LLC
                                PO Box:69933; Shk MBZ Road (E311) Muweilah Commercial, Sharjah - U.A.E</li>
                                <li><a href="tel://+97165271437"><i class="icon-phone"></i> +971 6 527 1437, +971 50 535 8446</a></li>
                                <li><a href="mailto:uniforms@sama-garments.com"><i class="icon-envelope"></i>uniforms@sama-garments.com</a></li>
                                <li><a href="/"><i class="icon-globe"></i>sama-garments.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </footer>
        @endif
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
    </div>
    <script>
    // const sliderContainer = document.querySelector(".slider-container");
    // const slideWidth = sliderContainer.offsetWidth;
    // const totalSlides = 7; // Change this to the total number of slides
    // let currentPosition = 0;

    // function slideLeft() {
    //     currentPosition += slideWidth;
    //     if (currentPosition > 0) {
    //         currentPosition = -(slideWidth * (totalSlides - 1));
    //     }
    //     updateSliderPosition();
    // }

    // function slideRight() {
    //     currentPosition -= slideWidth;
    //     if (currentPosition < -(slideWidth * (totalSlides - 1))) {
    //         currentPosition = 0;
    //     }
    //     updateSliderPosition();
    // }

    // function updateSliderPosition() {
    //     sliderContainer.style.transform = `translateX(${currentPosition}px)`;
    // }

    // // Add event listeners for left and right buttons
    // const leftButton = document.querySelector("#left-button");
    // const rightButton = document.querySelector("#right-button");

    // leftButton.addEventListener("click", slideLeft);
    // rightButton.addEventListener("click", slideRight);

    // // Auto-slide every 5 seconds (adjust as needed)
    // setInterval(slideRight, 5000);
    </script>
    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <!-- jQuery Easing -->
    <script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Waypoints -->
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <!-- Stellar Parallax -->
    <script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
    <!-- Flexslider -->
    <script src="{{ asset('assets/js/jquery.flexslider-min.js') }}"></script>
    <!-- Owl carousel -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup-options.js') }}"></script>
    <!-- Counters -->
    <script src="{{ asset('assets/js/jquery.countTo.js') }}"></script>
    <!-- Main -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
