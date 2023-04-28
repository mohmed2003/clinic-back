<?php
$apiKey = "48baa18cca6c0190026ef3f163073a37";
$lon = "55.270782"; // or use latitude and longitude
$lat="25.204849";
$url = "https://api.openweathermap.org/data/2.5/weather?lat={$lat}&lon={$lon}&appid=$apiKey";
$response = file_get_contents($url);
$weatherData = json_decode($response, true);

if ($weatherData && isset($weatherData['main']['temp'])) {
    $temperature = $weatherData['main']['temp'];
    $temperatureCelsius = $temperature - 273.15; // Convert from Kelvin to Celsius
    $temperatureCelsius = round($temperatureCelsius, 2); // Round to two decimal places
}



?>
<!DOCTYPE html>
<html lang="en" >

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

    <link rel="icon" href="{{asset('front/img/logo-fhmc-icon.png')}}" sizes="16x16 32x32 48x48 64x64">

    <link rel="stylesheet" type="text/css" href="{{asset('front/css/swiper.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('front/css/main.css')}}">


    {{-- <link rel="stylesheet" href="{{asset('cms/dist/css/adminlte.min.css')}}"> --}}


    @yield('style')


</head>

<body>


    <!-- ***** header Start ***** -->

    <header class="top-nav" id="header">

        <div class="container h-100">

            <div class="navbar-content">

                <div class="nav-logo">

                    <a class="d-block" href="{{route('view.index')}}">

                        <img class="img-fluid" src="{{asset('front/img/logo-fhmc-white.png')}}" alt="FHMC">

                    </a>

                </div>

                <ul class="navbar-menu">

                    <li class="menu-item">

                        <a class="navbar-link active hvr-underline-from-left" id="index" href="{{route('view.index')}}"> {{__('app.home')}} </a>

                    </li>
                    <li class="menu-item">

                        <a class="navbar-link  hvr-underline-from-left" id="about"  href="{{route('view.about')}}">{{__('app.about')}}</a>

                    </li>
                    <li class="menu-item">

                        <a class="navbar-link  hvr-underline-from-left" id="services" href="{{route('view.services')}}"> {{__('app.services')}} </a>

                    </li>
                    <li class="menu-item">

                        <a class="navbar-link  hvr-underline-from-left" id="staff"  href="{{route('view.staff')}}"> {{__('app.staff')}} </a>

                    </li>
                    <li class="menu-item">

                        <a class="lang-btn" href="{{route('locale-set','ar')}}">

                            <i class="fa-solid fa-globe"></i>
                            {{__('app.language')}}
                        </a>

                    </li>
                    <li class="menu-item">

                        <a class="contact-btn" id="contact"  href="{{route('view.contact')}}">{{__('app.contact')}}</a>
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

    <section class="section-style contact-us-section">

        <div class="container">

            <div class="contact-area">

                <div class="row">

                    <div class="col-lg-6">

                        <div class="contact-boxes">

                            <div class="box-item info-box padding-box">

                                <div class="title-wrap ">
                                    <span class="sub-title">{{__('app.contact')}}</span>
                                    <h1 class="main-title">{{__('app.ourInformation')}}</h1>
                                </div>
                                <div class="info-items">

                                    <div class="info-item">

                                        <div class="info-icon"><i class="fas fa-map-marker-alt"></i></div>
                                        <div class="info-texts">

                                            <span class="text-item info-title">{{__('app.address')}}</span>
                                            <span class="text-item info-val">{{__('app.addressdesFoot')}}</span>

                                        </div>

                                    </div>
                                    <div class="info-item">

                                        <div class="info-icon"><i class="far fa-envelope"></i></div>
                                        <div class="info-texts">

                                            <span class="text-item info-title">{{__('app.mail')}}</span>
                                            <a href="#" class="text-item info-val">INFO@MFHMC.SA</a>

                                        </div>

                                    </div>
                                    <div class="info-item">

                                        <div class="info-icon"><i class="fab fa-whatsapp"></i></div>
                                        <div class="info-texts">

                                            <span class="text-item info-title">{{__('app.phone')}}</span>
                                            <span class="text-item info-val">014358888</span>

                                        </div>

                                    </div>

                                </div>

                            </div>
                            <div class="box-item hours-box padding-box">

                                <div class="title-wrap ">
                                    <h1 class="main-title">{{__('app.openingHours')}}</h1>
                                </div>
                                <div class="info-items">

                                    <div class="info-item">

                                        <div class="info-texts ">

                                            <span class="text-item info-title">{{__('app.day1')}}</span>
                                            <span class="text-item info-val">09:00 - 20:00</span>

                                        </div>

                                    </div>
                                    <div class="info-item">

                                        <div class="info-texts ">

                                            <span class="text-item info-title">{{__('app.day2')}}</span>
                                            <span class="text-item info-val">14:00 - 20:00</span>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-6">

                       <div class="map-container mt-box mt-lg-0" id="map">

                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28979.453789321382!2d46.753383950057724!3d24.780666225054798!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2efda2e71a4331%3A0xf746e0fda2277c89!2z2KfZhNin2LLYr9mH2KfYsdiMINin2YTYsdmK2KfYtiDYp9mE2LPYudmI2K_Zitip!5e0!3m2!1sar!2seg!4v1663162736376!5m2!1sar!2seg"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

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

                            <h3 class="menu-title">{{__('app.contact')}}</h3>
                            <ul class="menu-list">

                                <li class="list-item">

                                    <a class="item-link" href="#" target="_blank">014358888</a>

                                </li>
                                <li class="list-item">

                                    <a class="item-link" href="mailto:info@mfhme.sa" target="_blank">info@mfhme.sa</a>

                                </li>


                            </ul>

                        </div>

                    </div>

                </div>

                <div class="col-md">

                    <div class="footer-col">

                        <div class="footer-menu">

                            <h3 class="menu-title">{{__('app.cServices')}}</h3>
                            <ul class="menu-list">

                                <li class="list-item">

                                    <a class="item-link" href="about.html">{{__('app.about')}}</a>

                                </li>
                                <li class="list-item">

                                    <a class="item-link" href="services.html">{{__('app.services')}}</a>

                                </li>
                                <li class="list-item">

                                    <a class="item-link" href="#">{{__('app.staff')}}</a>

                                </li>


                            </ul>

                        </div>

                    </div>


                </div>


                <div class="col-md">

                    <div class="footer-col">

                        <div class="footer-menu">

                            <h3 class="menu-title">{{__('app.clinics')}}</h3>
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

                            <h3 class="menu-title">{{__('app.other')}}</h3>
                            <ul class="menu-list">

                                <li class="list-item">

                                    <a class="item-link" target="_blank" href="https://translate.google.com/?hl=ar&sl=en&tl=ar&op=translate">{{__('app.googleTrl')}}</a>

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
                    <span class="temperature ">{{$temperatureCelsius}} &deg;C</span>
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

    <script>
        // Get all link elements
        // const links = document.getElementsByClassName('navbar-link');
        // const link = document.getElementId('index');


        //     // Remove 'active' class from all links
        //     for (let j = 0; j < links.length; j++) {
        //       links[j].classList.remove('active');
        //     }

        //     // Add 'active' class to clicked link
        //     link.classList.add('active');
      </script>


@yield('script')


</body>

</html>
