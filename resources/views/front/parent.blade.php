<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="height=device-height,
                      width=device-width, initial-scale=1.0,
                      minimum-scale=1.0, maximum-scale=1.0,
                      user-scalable=no">

    <meta name="theme-color" content="#446A47">

    <title>@yield('title','FHMC')</title>

    <link rel="stylesheet" type="text/css" href="{{asset('front/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('front/css/all.min.css')}}">

    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Cairo'>

    <link rel="icon" href="img/logo-fhmc-icon.png" sizes="16x16 32x32 48x48 64x64">

    <link rel="stylesheet" type="text/css" href="{{asset('front/css/swiper.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('front/css/main.css')}}">

    @yield('style')


</head>

<body>


    <!-- ***** header Start ***** -->

    <header class="top-nav" id="header">

        <div class="container h-100">

            <div class="navbar-content">

                <div class="nav-logo">

                    <a class="d-block" href="index.html">

                        <img class="img-fluid" src="{{asset('front/img/logo-fhmc-white.png')}}" alt="FHMC">

                    </a>

                </div>

                <ul class="navbar-menu">

                    <li class="menu-item">

                        <a class="navbar-link active hvr-underline-from-left" href="index.html"> home </a>

                    </li>
                    <li class="menu-item">

                        <a class="navbar-link  hvr-underline-from-left" href="about.html"> about us</a>

                    </li>
                    <li class="menu-item">

                        <a class="navbar-link  hvr-underline-from-left" href="services.html"> our services </a>

                    </li>
                    <li class="menu-item">

                        <a class="navbar-link  hvr-underline-from-left" href="staff.html"> our staff </a>

                    </li>
                    <li class="menu-item">

                        <a class="lang-btn" href="index_ar.html">

                            <i class="fa-solid fa-globe"></i>
                            العربية
                        </a>

                    </li>
                    <li class="menu-item">

                        <a class="contact-btn" href="contact.html">contact us</a>
                    </li>



                </ul>

                <div class="nav-toggler mobile-item">


                    <svg width="100" height="100" viewBox="0 0 100 100">
                            <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058"></path>
                            <path class="line line2" d="M 20,50 H 80"></path>
                            <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942"></path>
                    </svg>


                </div>

            </div>

        </div>

    </header>

    <!-- ***** header End ***** -->


    @yield('content')

    <footer class="section-style w-bg mb-0">

        <div class="container">

            <div class="row gx-lg-5 ">

                <div class="col-lg-3 col-12">

                    <div class="footer-col">

                        <a class="footer-logo" href="index.html">

                            <img class="img-fluid" src="{{asset('front/img/logo-fhmc.png')}}" alt="FHMC">

                        </a>

                    </div>

                </div>

                <div class="col-md">

                    <div class="footer-col">

                        <div class="footer-menu">

                            <h3 class="menu-title">CONTACT US</h3>
                            <ul class="menu-list">

                                <li class="list-item">

                                    <a class="item-link" href="#">014358888</a>

                                </li>
                                <li class="list-item">

                                    <a class="item-link" href="#">info@mfhme.sa</a>

                                </li>


                            </ul>

                        </div>

                    </div>

                </div>

                <div class="col-md">

                    <div class="footer-col">

                        <div class="footer-menu">

                            <h3 class="menu-title">CUSTOMER SERERVICE</h3>
                            <ul class="menu-list">

                                <li class="list-item">

                                    <a class="item-link" href="about.html">About Us</a>

                                </li>
                                <li class="list-item">

                                    <a class="item-link" href="services.html">Our Services</a>

                                </li>
                                <li class="list-item">

                                    <a class="item-link" href="#">Our Staff</a>

                                </li>


                            </ul>

                        </div>

                    </div>


                </div>


                <div class="col-md">

                    <div class="footer-col">

                        <div class="footer-menu">

                            <h3 class="menu-title">Clinics</h3>
                            <ul class="menu-list">

                                <li class="list-item">

                                    <a class="item-link" href="#">clinic1</a>

                                </li>
                                <li class="list-item">

                                    <a class="item-link" href="#">clinic2</a>

                                </li>
                                <li class="list-item">

                                    <a class="item-link" href="#">clinic3</a>

                                </li>


                            </ul>

                        </div>

                    </div>


                </div>

                <div class="col-md">

                    <div class="footer-col">

                        <div class="footer-menu">

                            <h3 class="menu-title">Other</h3>
                            <ul class="menu-list">

                                <li class="list-item">

                                    <a class="item-link" target="_blank" href="https://translate.google.com/?hl=ar&sl=en&tl=ar&op=translate">Google translate</a>

                                </li>
                                <li class="list-item">

                                    <a class="item-link" href="#">link2</a>

                                </li>
                                <li class="list-item">

                                    <a class="item-link" href="#">link3</a>

                                </li>


                            </ul>

                        </div>

                    </div>


                </div>


                <div class="col-md col-9">

                    <div class="footer-col">

                        <div class="social-list">

                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-snapchat-ghost"></i></a>
                            <a href="#"><i class="fa-brands fa-whatsapp"></i></a>

                        </div>

                    </div>

                </div>
                <div class="col-md col-3 mb-5 d-flex align-items-start justify-content-center">
                    <span class="temperature ">28&deg;c</span>
                </div>
            </div>

        </div>

    </footer>

    <!-- ***** footer End ***** -->


</div>


    <!-- ***** scrollup-btn Start ***** -->
    <div class="scrollup" id="scrollup">

            <i class="fas fa-level-up-alt"></i>

    </div>
    <!-- ***** scrollup-btn Start ***** -->




    <!-- jquery 3.5.1   -->
    <script src="{{asset('front/js/jquery-3.5.1.min.js')}}"></script>

     <!-- bootstrap v5   -->
    <script src="{{asset('front/js/bootstrap.bundle.min.js')}}"></script>

    <!-- matchHeight jquery plugin   -->
    <script src="{{asset('front/js/jquery.matchHeight-min.js')}}"></script>

    <!-- swiper js   -->
    <script src="{{asset('front/js/swiper.js')}}"></script>

     <!-- main style js   -->
    <script src="{{asset('front/js/main.js')}}"></script>

    <script src="{{asset('front/js/script.js')}}"></script>


@yield('script')


</body>

</html>
