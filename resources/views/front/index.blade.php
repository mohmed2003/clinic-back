@extends('front.parent')

@section('title','FHMC')

@section('style')


@endsection

@section('content')

    <div class="page-wrapper">


        <!-- ***** welcome-section Start ***** -->

        <section class="section-style welcome-section p-0">

            <div class="welcome-container" style="background-image: url({{asset('front/img/welcome-banner.webp')}})">

                <div class="container">

                    <div class="welcome-content">



                <div class="col col-12 d-flex align-items-center justify-content-start">
                    <div class="time position-relative">
                                <svg version="1.1" class="img-fluid" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500" width="100%" id="blobSvg" style="opacity: 1;">                        <defs>                        <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="50%">                            <stop offset="0%" style="stop-color: rgb(68, 106, 71);"></stop>           <stop offset="100%" style="stop-color: rgb(68, 106, 71);"></stop>                        </linearGradient>                        </defs>                                            <path id="blob" fill="url(#gradient)" style="opacity: 1;"><animate class="img-fluid" attributeName="d" dur="10s" repeatCount="indefinite" values="M400,314Q352,378,277,420Q202,462,143,396Q84,330,66.5,241.5Q49,153,125.5,97.5Q202,42,298.5,55Q395,68,421.5,159Q448,250,400,314Z;M392.2525,331.53996Q379.05994,413.07992,285.7525,456.15485Q192.44505,499.22978,100.80019,432.44731Q9.15533,365.66484,30.81018,260.57493Q52.46503,155.48501,121.45005,74.10764Q190.43506,-7.26974,268.13261,60.97003Q345.83016,129.2098,375.63761,189.6049Q405.44505,250,392.2525,331.53996Z;M388.67097,319.27849Q360.55699,388.55699,291.23441,379.72688Q221.91183,370.89678,145.00645,354.28387Q68.10108,337.67097,71.32903,251.33548Q74.55699,165,142.39247,119.95591Q210.22796,74.91183,286.12043,91.61398Q362.0129,108.31613,389.39892,179.15806Q416.78495,250,388.67097,319.27849Z;M429.79847,339.54154Q392.67727,429.08308,294.97368,455.00137Q197.27008,480.91966,143.94598,403.56786Q90.62188,326.21607,83.52769,246.22992Q76.43351,166.24376,136.8518,92.77008Q197.27008,19.29641,287.1482,55Q377.02632,90.70359,421.97299,170.3518Q466.91966,250,429.79847,339.54154Z;M390.7302,319.10952Q360.37524,388.21905,284.62068,409.39959Q208.86612,430.58014,161.11156,373.20082Q113.35701,315.8215,88.46857,238.04463Q63.58014,160.26776,136.76776,117.04463Q209.95537,73.8215,303.79007,69.52027Q397.62476,65.21905,409.35497,157.60952Q421.08517,250,390.7302,319.10952Z;M400,314Q352,378,277,420Q202,462,143,396Q84,330,66.5,241.5Q49,153,125.5,97.5Q202,42,298.5,55Q395,68,421.5,159Q448,250,400,314Z"></animate></path></svg>
                        <div class="content-time ">
                            <h1 class="clock"></h1>
                            <h1 class="date"></h1>
                        </div>
                    </div>
                </div>

                        <div class="title-wrap">

                            <span class="sub-title">WELCOME TO MY FAMILY HEALTH MEDICAL COMPANY</span>
                            <h1 class="main-title">
                                Nothing Is More
                                Important Than
                                Your Health
                            </h1>

                        </div>
                        <a class="duplicated-btn more-btn" href="contact.html">contact-us</a>
                        <div class="welcome-info">

                            <a href="#" class="info-item">

                                <div class="info-icon"><i class="fas fa-map-marker-alt"></i></div>
                                <div class="info-texts">

                                    <span class="text-item info-title">ADDRESS</span>
                                    <span class="text-item info-val">KING KHALED - RIYADH</span>

                                </div>

                            </a>
                            <a href="#" class="info-item">

                                <div class="info-icon"><i class="fab fa-whatsapp"></i></div>
                                <div class="info-texts">

                                    <span class="text-item info-title">PHONE</span>
                                    <span class="text-item info-val">014358888</span>

                                </div>

                            </a>

                        </div>

                    </div>

                </div>


            </div>
        </section>

        <!-- ***** welcome-section End ***** -->


        <!-- ***** about-section Start ***** -->

        <section class="section-style about-section w-bg mb-0">

            <div class="container">

                <div class="about-area">

                    <div class="row   mb_y2">

                        <div class="col-lg-6 mb-box mb-lg-0">

                            <div class="about-img col-img">

                                <img class="img-fluid" src="{{asset('front/img/22.png')}}" alt="imgDesc">

                            </div>

                        </div>

                        <div class="col-lg-6">

                            <div class="about-texts same-h">

                                <div class="title-wrap mb-3">

                                    <span class="sub-title">about us </span>
                                    <h1 class="main-title">who are we ?</h1>

                                </div>
                                <p class="about-desc">

                                    Believing In The Importance Of The Role Played By The Medical Support Services Sector In Assistant Of The Health Care Sector , We Set Up Medical Company In Riyadh - Kingdom Of Saudi Arabia In 2015. We Provide Integrated Medical Services Through Planning , Designing , Communicating , Establishing , And Operating Medical Projects In Accordance With The Highest International Standards In Addition , We Recruit The Best Medical And Administrative Personnel Qualified To Provide Up - To - Date Medical Services That Meet The Highest Global Standards Of Health Care Quality And Safety .



                                </p>
                                <a class="about-more duplicated-btn" href="about.html">view more</a>

                            </div>


                        </div>

                    </div>
                    <div class="row ">

                        <div class="col-lg-6 mb-box mb-lg-0 order-1 order-lg-2">

                            <div class="about-img col-img ">

                                <img class="img-fluid" src="{{asset('front/img/22_1.PNG')}}" alt="imgDesc">

                            </div>

                        </div>

                        <div class="col-lg-6 order-2 order-lg-1">

                            <div class="about-info same-h">

                                <div class="info-item">

                                    <div class="info-icon">

                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
                                            <path id="Vision_2_" d="M4,7.36C2.147,7.36,0.64,5.853,0.64,4S2.147,0.64,4,0.64S7.36,2.147,7.36,4S5.853,7.36,4,7.36z M4,1.36  C2.544,1.36,1.36,2.544,1.36,4S2.544,6.64,4,6.64S6.64,5.456,6.64,4S5.456,1.36,4,1.36z M28,31.36c-1.853,0-3.36-1.508-3.36-3.36  s1.508-3.36,3.36-3.36s3.36,1.508,3.36,3.36S29.853,31.36,28,31.36z M28,25.36c-1.456,0-2.64,1.184-2.64,2.64s1.184,2.64,2.64,2.64  s2.64-1.184,2.64-2.64S29.456,25.36,28,25.36z M4,29.36c-0.75,0-1.36-0.61-1.36-1.36S3.25,26.64,4,26.64S5.36,27.25,5.36,28  S4.75,29.36,4,29.36z M4,27.36c-0.353,0-0.64,0.287-0.64,0.64S3.647,28.64,4,28.64S4.64,28.353,4.64,28S4.353,27.36,4,27.36z   M28,5.36c-0.75,0-1.36-0.61-1.36-1.36S27.25,2.64,28,2.64S29.36,3.25,29.36,4S28.75,5.36,28,5.36z M28,3.36  c-0.353,0-0.64,0.287-0.64,0.64S27.647,4.64,28,4.64S28.64,4.353,28.64,4S28.353,3.36,28,3.36z M16,21.36  c-2.956,0-5.36-2.405-5.36-5.36c0-2.956,2.404-5.36,5.36-5.36c2.955,0,5.36,2.404,5.36,5.36C21.36,18.955,18.955,21.36,16,21.36z   M16,11.36c-2.559,0-4.64,2.082-4.64,4.64s2.082,4.64,4.64,4.64s4.64-2.081,4.64-4.64S18.559,11.36,16,11.36z M16,19.36  c-1.853,0-3.36-1.508-3.36-3.36s1.507-3.36,3.36-3.36s3.36,1.507,3.36,3.36S17.853,19.36,16,19.36z M16,13.36  c-1.456,0-2.64,1.185-2.64,2.64c0,1.456,1.185,2.64,2.64,2.64c1.456,0,2.64-1.184,2.64-2.64S17.456,13.36,16,13.36z M28,0.64  c-1.853,0-3.36,1.507-3.36,3.36c0,0.797,0.29,1.519,0.755,2.096L21.55,9.941C20.038,9.174,18.208,8.64,16,8.64  c-8.143,0-11.3,7.146-11.331,7.218c-0.039,0.09-0.039,0.193,0,0.283c0.021,0.05,1.524,3.451,5.114,5.566l-3.688,3.687  C5.519,24.93,4.796,24.64,4,24.64c-1.853,0-3.36,1.508-3.36,3.36S2.147,31.36,4,31.36S7.36,29.853,7.36,28  c0-0.796-0.29-1.519-0.755-2.096l3.845-3.845c1.512,0.767,3.342,1.301,5.55,1.301c8.144,0,11.3-7.146,11.331-7.219  c0.039-0.09,0.039-0.193,0-0.283c-0.021-0.05-1.524-3.45-5.114-5.566l3.687-3.688C26.481,7.07,27.204,7.36,28,7.36  c1.853,0,3.36-1.507,3.36-3.36S29.853,0.64,28,0.64z M6.64,28c0,1.456-1.185,2.64-2.64,2.64S1.36,29.456,1.36,28  S2.544,25.36,4,25.36S6.64,26.544,6.64,28z M26.603,16c-0.48,0.977-3.568,6.64-10.603,6.64S5.877,16.977,5.398,16  C5.877,15.023,8.966,9.36,16,9.36S26.122,15.023,26.603,16z M28,6.64c-0.645,0-1.229-0.242-1.688-0.628l-0.32-0.32  C25.603,5.233,25.36,4.647,25.36,4c0-1.456,1.184-2.64,2.64-2.64S30.64,2.544,30.64,4S29.456,6.64,28,6.64z"></path>
                                            <rect id="_Transparent_Rectangle"></rect>
                                        </svg>

                                    </div>
                                    <div class="info-texts">

                                        <h2 class="info-title">pur vision</h2>
                                        <p class="info-desc">To Be The Preferred Personal Medical</p>

                                    </div>


                                </div>
                                <div class="info-item">

                                    <div class="info-icon">

                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 511.992 511.992" style="enable-background:new 0 0 511.992 511.992;" xml:space="preserve"><g><g><path d="M510.096,249.937c-4.032-5.867-100.928-143.275-254.101-143.275C124.56,106.662,7.44,243.281,2.512,249.105    c-3.349,3.968-3.349,9.792,0,13.781C7.44,268.71,124.56,405.329,255.995,405.329S504.549,268.71,509.477,262.886    C512.571,259.217,512.848,253.905,510.096,249.937z M255.995,383.996c-105.365,0-205.547-100.48-230.997-128    c25.408-27.541,125.483-128,230.997-128c123.285,0,210.304,100.331,231.552,127.424    C463.013,282.065,362.256,383.996,255.995,383.996z"></path></g></g><g><g><path d="M255.995,170.662c-47.061,0-85.333,38.272-85.333,85.333s38.272,85.333,85.333,85.333s85.333-38.272,85.333-85.333    S303.056,170.662,255.995,170.662z M255.995,319.996c-35.285,0-64-28.715-64-64s28.715-64,64-64s64,28.715,64,64    S291.28,319.996,255.995,319.996z"></path></g></g></svg>
                                    </div>
                                    <div class="info-texts">

                                        <h2 class="info-title">pur values</h2>
                                        <p class="info-desc">Compassion , Honesty , Quality .</p>

                                    </div>


                                </div>
                                <div class="info-item">

                                    <div class="info-icon">

                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 297 297" style="enable-background:new 0 0 297 297;" xml:space="preserve"><g><path d="M252.678,116.792c-1.167-3.593-4.181-6.277-7.885-7.021l-58.111-11.684l-29.068-51.656   c-1.853-3.292-5.336-5.329-9.114-5.329s-7.261,2.037-9.114,5.329l-29.068,51.656l-58.111,11.684   c-3.704,0.744-6.718,3.428-7.885,7.021c-1.167,3.592-0.306,7.535,2.252,10.314l40.145,43.609l-6.844,58.877   c-0.437,3.752,1.185,7.448,4.24,9.668c3.057,2.222,7.073,2.622,10.506,1.046l53.88-24.704l53.88,24.704   c1.391,0.638,2.878,0.952,4.358,0.952c2.172,0,4.33-0.676,6.148-1.998c3.056-2.22,4.677-5.916,4.24-9.668l-6.844-58.877   l40.145-43.609C252.984,124.327,253.846,120.384,252.678,116.792z M191.645,160.077c-2.062,2.24-3.046,5.267-2.694,8.291   l5.253,45.181l-41.346-18.958c-1.384-0.634-2.871-0.952-4.359-0.952s-2.975,0.318-4.359,0.952l-41.346,18.958l5.253-45.181   c0.351-3.024-0.632-6.051-2.694-8.291l-30.806-33.465l44.592-8.966c2.985-0.6,5.56-2.47,7.053-5.124L148.5,72.883l22.307,39.639   c1.493,2.653,4.068,4.524,7.053,5.124l44.592,8.966L191.645,160.077z"></path><path d="M148.5,0C66.617,0,0,66.617,0,148.5S66.617,297,148.5,297S297,230.383,297,148.5S230.383,0,148.5,0z M148.5,276.085   c-70.351,0-127.585-57.234-127.585-127.585S78.149,20.916,148.5,20.916S276.085,78.149,276.085,148.5   S218.851,276.085,148.5,276.085z"></path><path d="M148.5,122.182c-14.512,0-26.319,11.806-26.319,26.318s11.807,26.318,26.319,26.318s26.318-11.806,26.318-26.318   S163.012,122.182,148.5,122.182z M148.5,153.902c-2.979,0-5.404-2.423-5.404-5.402s2.424-5.402,5.404-5.402   s5.402,2.423,5.402,5.402S151.479,153.902,148.5,153.902z"></path></g></svg>

                                    </div>
                                    <div class="info-texts">

                                        <h2 class="info-title">pur mission</h2>
                                        <p class="info-desc">To Make Medical Services Accessible Without A Need To</p>

                                    </div>


                                </div>

                            </div>
                        </div>

                    </div>


                </div>

            </div>

        </section>

        <!-- ***** about-section End ***** -->


        <!-- ***** banner-section Start ***** -->

        <section class="section-style banner-section">

            <div class="container">

                <div class="banner-area">


                    <div class="row gx-lg-5">

                        <div class="col-md-auto">

                            <div class="banner-img">

                                <img class="img-fluid" src="{{asset('front/img/phone.png')}}" alt="imgDesc">

                            </div>

                        </div>

                        <div class="col-md">

                            <p class="banner-text">We Do A Lot More Things <br> And Lot More Helps .</p>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!-- ***** banner-section End ***** -->


        <!-- ***** services-section Start ***** -->

        <section class="section-style services-section">

            <div class="container">

                <div class="services-area">

                    <div class="title-wrap text-center mb-box mb-sm-5">

                        <span class="sub-title">our services</span>
                        <h1 class="main-title">We Provide Best Services</h1>

                    </div>

                    <div class="row row-cols-xl-4 row-cols-md-2 row-cols-1">

                        <a href="service.html"><div class="service-wrap">

                            <div class="service-box">

                                <div class="service-icon">

                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
                                        <path id="doctor-patient_1_" d="M31.36,30h-0.72v-9c0-3.358-2.151-6.289-5.354-7.292c-0.138-0.043-0.236-0.165-0.251-0.308  c-0.014-0.144,0.059-0.282,0.185-0.351c1.492-0.82,2.42-2.372,2.42-4.049c0-2.559-2.081-4.64-4.64-4.64S18.36,6.441,18.36,9  c0,1.677,0.928,3.229,2.421,4.049c0.126,0.069,0.198,0.208,0.185,0.351c-0.015,0.144-0.113,0.265-0.251,0.308  C17.512,14.711,15.36,17.642,15.36,21v9h-0.72v-9c0-1.389,0.336-2.711,0.944-3.877c-0.567-0.963-1.326-1.778-2.224-2.401V17  c0,2.283-1.764,4.162-4,4.346v2.329c0.854,0.168,1.5,0.923,1.5,1.825c0,1.025-0.834,1.86-1.86,1.86s-1.86-0.835-1.86-1.86  c0-0.902,0.646-1.657,1.5-1.825v-2.329c-2.236-0.184-4-2.062-4-4.346v-2.281C2.617,16.116,1.36,18.433,1.36,21v9H0.64v-9  c0-3.426,2.045-6.444,5.161-7.727C4.453,12.269,3.64,10.69,3.64,9c0-2.055,1.173-3.921,3.007-4.817C6.643,4.123,6.64,4.062,6.64,4  c0-1.301,1.059-2.36,2.36-2.36S11.36,2.699,11.36,4c0,0.062-0.002,0.123-0.007,0.183C13.187,5.079,14.36,6.945,14.36,9  c0,1.69-0.812,3.269-2.162,4.274c1.555,0.642,2.872,1.732,3.797,3.146c0.903-1.383,2.215-2.491,3.807-3.146  C18.452,12.269,17.64,10.69,17.64,9c0-2.956,2.405-5.36,5.36-5.36S28.36,6.044,28.36,9c0,1.69-0.812,3.269-2.162,4.273  c3.116,1.283,5.162,4.302,5.162,7.727V30z M9,24.36c-0.628,0-1.14,0.511-1.14,1.14S8.372,26.64,9,26.64s1.14-0.511,1.14-1.14  S9.628,24.36,9,24.36z M5.36,14.278V17c0,2.007,1.633,3.64,3.64,3.64s3.64-1.633,3.64-3.64v-2.72  c-0.429-0.231-0.882-0.423-1.355-0.571c-0.138-0.043-0.236-0.165-0.251-0.308c-0.014-0.144,0.059-0.282,0.185-0.351  c1.493-0.821,2.421-2.373,2.421-4.05c0-1.725-0.955-3.296-2.459-4.097C10.825,5.757,9.982,6.36,9,6.36S7.175,5.757,6.819,4.903  C5.314,5.704,4.36,7.275,4.36,9c0,1.677,0.928,3.229,2.421,4.049c0.126,0.069,0.199,0.208,0.185,0.351  c-0.015,0.144-0.113,0.265-0.251,0.308C6.239,13.857,5.786,14.049,5.36,14.278z M9,2.36C8.096,2.36,7.36,3.096,7.36,4  S8.096,5.64,9,5.64S10.64,4.904,10.64,4S9.904,2.36,9,2.36z M23,25.36c-0.092,0-0.185-0.035-0.255-0.105l-2.973-2.973  c-0.4-0.401-0.622-0.934-0.625-1.499c-0.002-0.572,0.22-1.111,0.625-1.518c0.402-0.402,0.937-0.624,1.505-0.626  c0.002,0,0.003,0,0.005,0c0.569,0,1.105,0.223,1.509,0.625L23,19.475l0.209-0.21c0.807-0.803,2.212-0.805,3.019,0  c0.413,0.414,0.635,0.963,0.624,1.548c-0.01,0.555-0.231,1.077-0.624,1.47l-2.973,2.973C23.185,25.325,23.092,25.36,23,25.36z   M21.282,19.36c-0.001,0-0.002,0-0.003,0c-0.377,0-0.731,0.147-0.997,0.414c-0.269,0.269-0.416,0.626-0.414,1.005  c0.001,0.375,0.148,0.729,0.414,0.993L23,24.491l2.718-2.719c0.261-0.26,0.407-0.605,0.413-0.973  c0.008-0.388-0.139-0.752-0.413-1.025c-0.534-0.536-1.467-0.535-1.999,0l-0.464,0.464c-0.141,0.141-0.369,0.141-0.51,0l-0.464-0.464  C22.015,19.507,21.659,19.36,21.282,19.36z"></path>
                                        <rect id="_Transparent_Rectangle" style="fill:none;" width="32" height="32"></rect>
                                    </svg>
                                </div>
                                <p class="service-desc">1.Patient Services</p>

                            </div>
                        </div></a>
                        <a href=""><div class="service-wrap">

                            <div class="service-box">

                                <div class="service-icon">

                                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 28.832 28.832" style="enable-background:new 0 0 28.832 28.832;" xml:space="preserve"><g><path d="M11.98,5.373c0-1.584,1.284-2.869,2.869-2.869s2.869,1.284,2.869,2.869s-1.284,2.869-2.869,2.869   S11.98,6.957,11.98,5.373z M15.716,15.621c0.616-0.658,1.479-1.075,2.575-1.245c0.249-0.038,0.513-0.061,0.786-0.077   c0.088-0.003,0.171-0.012,0.259-0.012h1.707c-1.253-0.521-2.141-1.761-2.141-3.203c0-0.575,0.143-1.12,0.394-1.596   c-0.89-0.325-1.711-0.32-1.711-0.32h-5.753c-0.643,0.015-1.183,0.096-1.636,0.23c0.281,0.5,0.442,1.076,0.442,1.686   c0,1.442-0.887,2.681-2.142,3.203h1.412c0.017-0.002,0.033-0.002,0.051-0.002c0.1,0,0.209,0.004,0.319,0.012   c0.235,0.017,0.492,0.053,0.758,0.107c1.444,0.303,3.186,1.253,3.379,3.527l0.002,0.051v1.774h0.362l0.002-1.774   C14.779,17.957,14.729,16.675,15.716,15.621z M6.993,13.983c1.582,0,2.869-1.287,2.869-2.871S8.575,8.243,6.993,8.243   c-1.584,0-2.869,1.285-2.869,2.869C4.124,12.695,5.41,13.983,6.993,13.983z M9.728,14.908H3.976   c-4.118,0.076-3.975,3.103-3.975,3.103L0,25.067h0.004c0,0.017-0.003,0.035-0.003,0.05c0,0.67,0.545,1.211,1.213,1.211   c0.669,0,1.209-0.541,1.209-1.211c0-0.016-0.002-0.033-0.005-0.05h0.005v-6.532h0.758l-0.006,6.958l7.266,0.006l-0.006-6.996h0.786   v6.563h0.004c0,0.003,0,0.006,0,0.01c0,0.669,0.541,1.211,1.207,1.211c0.669,0,1.211-0.542,1.211-1.211c0-0.004,0-0.007,0-0.01   V18.01C13.378,14.861,9.728,14.908,9.728,14.908z M22.185,13.982c1.585,0,2.87-1.285,2.87-2.87s-1.285-2.87-2.87-2.87   s-2.87,1.285-2.87,2.87C19.316,12.697,20.6,13.982,22.185,13.982z M24.921,14.908h-5.754c-4.119,0.076-3.973,3.103-3.973,3.103   l-0.002,7.056h0.005c0,0.017-0.003,0.035-0.003,0.05c0,0.67,0.544,1.211,1.212,1.211c0.669,0,1.208-0.541,1.208-1.211   c0-0.016-0.003-0.033-0.004-0.05h0.004v-6.532h0.76l-0.009,6.958l7.266,0.006l-0.006-6.996h0.786v6.563h0.002   c0,0.003,0,0.006,0,0.01c0,0.669,0.542,1.211,1.21,1.211c0.667,0,1.209-0.542,1.209-1.211c0-0.004,0-0.007,0-0.01V18.01   C28.57,14.861,24.921,14.908,24.921,14.908z"></path></g></svg>

                                </div>
                                <p class="service-desc">2.Brokage Services</p>

                            </div>
                        </div></a>
                        <a href=""><div class="service-wrap">

                            <div class="service-box">

                                <div class="service-icon">

                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 324.667 324.667" enable-background="new 0 0 324.667 324.667">
                                      <g>
                                        <path d="m168.333,69.539v-2.739h2.738c3.313,0 6-2.687 6-6s-2.687-6-6-6h-2.738v-2.738c0-3.313-2.687-6-6-6s-6,2.687-6,6v2.738h-2.738c-3.313,0-6,2.687-6,6s2.687,6 6,6h2.738v2.738c0,3.313 2.687,6 6,6s6-2.686 6-5.999z"></path>
                                        <path d="m54.919,199.478c3.313,0 6-2.687 6-6v-8.614c0-3.313-2.687-6-6-6s-6,2.687-6,6v8.614c0,3.313 2.687,6 6,6z"></path>
                                        <path d="m78.748,199.478c3.313,0 6-2.687 6-6v-8.614c0-3.313-2.687-6-6-6s-6,2.687-6,6v8.614c0,3.313 2.686,6 6,6z"></path>
                                        <path d="m54.919,229.12c3.313,0 6-2.687 6-6v-8.614c0-3.313-2.687-6-6-6s-6,2.687-6,6v8.614c0,3.313 2.687,6 6,6z"></path>
                                        <path d="m78.748,229.12c3.313,0 6-2.687 6-6v-8.614c0-3.313-2.687-6-6-6s-6,2.687-6,6v8.614c0,3.313 2.686,6 6,6z"></path>
                                        <path d="m54.919,258.762c3.313,0 6-2.687 6-6v-8.614c0-3.313-2.687-6-6-6s-6,2.687-6,6v8.614c0,3.314 2.687,6 6,6z"></path>
                                        <path d="m78.748,258.762c3.313,0 6-2.687 6-6v-8.614c0-3.313-2.687-6-6-6s-6,2.687-6,6v8.614c0,3.314 2.686,6 6,6z"></path>
                                        <path d="m245.919,199.478c3.313,0 6-2.687 6-6v-8.614c0-3.313-2.687-6-6-6s-6,2.687-6,6v8.614c0,3.313 2.687,6 6,6z"></path>
                                        <path d="m269.748,199.478c3.313,0 6-2.687 6-6v-8.614c0-3.313-2.687-6-6-6s-6,2.687-6,6v8.614c0,3.313 2.686,6 6,6z"></path>
                                        <path d="m245.919,229.12c3.313,0 6-2.687 6-6v-8.614c0-3.313-2.687-6-6-6s-6,2.687-6,6v8.614c0,3.313 2.687,6 6,6z"></path>
                                        <path d="m269.748,229.12c3.313,0 6-2.687 6-6v-8.614c0-3.313-2.687-6-6-6s-6,2.687-6,6v8.614c0,3.313 2.686,6 6,6z"></path>
                                        <path d="m245.919,258.762c3.313,0 6-2.687 6-6v-8.614c0-3.313-2.687-6-6-6s-6,2.687-6,6v8.614c0,3.314 2.687,6 6,6z"></path>
                                        <path d="m269.748,258.762c3.313,0 6-2.687 6-6v-8.614c0-3.313-2.687-6-6-6s-6,2.687-6,6v8.614c0,3.314 2.686,6 6,6z"></path>
                                        <path d="m144.419,155.221v8.614c0,3.313 2.687,6 6,6s6-2.687 6-6v-8.614c0-3.313-2.687-6-6-6s-6,2.687-6,6z"></path>
                                        <path d="m168.248,155.221v8.614c0,3.313 2.687,6 6,6s6-2.687 6-6v-8.614c0-3.313-2.687-6-6-6s-6,2.687-6,6z"></path>
                                        <path d="m150.419,178.864c-3.313,0-6,2.687-6,6v8.614c0,3.313 2.687,6 6,6s6-2.687 6-6v-8.614c0-3.314-2.686-6-6-6z"></path>
                                        <path d="m174.248,178.864c-3.313,0-6,2.687-6,6v8.614c0,3.313 2.687,6 6,6s6-2.687 6-6v-8.614c0-3.314-2.687-6-6-6z"></path>
                                        <path d="m150.419,208.506c-3.313,0-6,2.687-6,6v8.614c0,3.313 2.687,6 6,6s6-2.687 6-6v-8.614c0-3.314-2.686-6-6-6z"></path>
                                        <path d="m174.248,208.506c-3.313,0-6,2.687-6,6v8.614c0,3.313 2.687,6 6,6s6-2.687 6-6v-8.614c0-3.314-2.687-6-6-6z"></path>
                                        <path d="m318.667,284.144h-12.611v-127.376c0-3.314-2.687-6-6-6h-78v-42.943c0-3.313-2.687-6-6-6h-47.723v-8.747h20.277c3.313,0 6-2.687 6-6v-52.555c0-3.313-2.687-6-6-6h-52.555c-3.313,0-6,2.687-6,6v52.555c0,3.313 2.687,6 6,6h20.277v8.747h-47.723c-3.313,0-6,2.687-6,6v42.943h-78c-3.313,0-6,2.686-6,6v127.376h-12.609c-3.313,0-6,2.687-6,6s2.687,6 6,6h312.667c3.313,0 6-2.687 6-6s-2.687-6-6-6zm-108.611-170.319v170.319h-10.056v-26.374c0-3.313-2.687-6-6-6h-63.333c-3.313,0-6,2.687-6,6v26.375h-10.056v-170.32h95.445zm-22.056,170.319h-51.333v-20.374h51.333v20.374zm106.056,0h-72v-121.376h72v121.376zm-191.445,0h-72v-121.376h72v121.376zm39.445-243.621h40.555v40.555h-40.555v-40.555z"></path>
                                      </g>
                                    </svg>

                                </div>
                                <p class="service-desc">3.SERVICES TO SAUDI MEDICAL ORGANIZATIONS</p>

                            </div>
                        </div></a>
                        <a href=""><div class="service-wrap">

                            <div class="service-box">

                                <div class="service-icon">

                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 422.505 422.505" style="enable-background:new 0 0 422.505 422.505;" xml:space="preserve">
                                    <path d="M173.946,74.015c0-5.523,4.477-10,10-10h17.312V46.703c0-5.523,4.477-10,10-10s10,4.477,10,10v17.312h17.312  c5.523,0,10,4.477,10,10s-4.477,10-10,10h-17.312v17.313c0,5.523-4.477,10-10,10s-10-4.477-10-10V84.015h-17.312  C178.423,84.015,173.946,79.538,173.946,74.015z M414.669,412.505c0,5.523-4.477,10-10,10H17.835c-5.523,0-10-4.477-10-10  s4.477-10,10-10H56.19V74.014c0-5.523,4.477-10,10-10h71.725C142.812,27.913,173.836,0,211.258,0  c37.421,0,68.445,27.914,73.341,64.015l71.725-0.001c2.652,0,5.196,1.054,7.071,2.929c1.875,1.875,2.929,4.419,2.929,7.071v328.491  h38.345C410.192,402.505,414.669,406.982,414.669,412.505z M157.242,74.015c0,29.784,24.231,54.015,54.016,54.015  c29.784,0,54.014-24.231,54.014-54.015S241.042,20,211.258,20C181.474,20,157.242,44.231,157.242,74.015z M201.258,330.476h-51.581  v72.029h51.576L201.258,330.476z M272.839,330.476h-51.582l-0.005,72.029h51.586V330.476z M346.325,84.014H284.6  c-4.896,36.101-35.92,64.016-73.341,64.016c-37.422,0-68.447-27.915-73.343-64.016H76.19v318.491h53.487v-82.029  c0-5.523,4.477-10,10-10h71.581h0h71.581c5.523,0,10,4.477,10,10v82.029h53.485V84.014z M279.986,172.169h34.076  c5.523,0,10,4.477,10,10v89.148c0,5.523-4.477,10-10,10h-34.076c-5.523,0-10-4.477-10-10v-89.148  C269.986,176.646,274.463,172.169,279.986,172.169z M289.986,261.317h14.076v-69.148h-14.076V261.317z M238.294,182.169v89.148  c0,5.523-4.477,10-10,10H194.22c-5.523,0-10-4.477-10-10v-89.148c0-5.523,4.477-10,10-10h34.074  C233.817,172.169,238.294,176.646,238.294,182.169z M218.294,192.169H204.22v69.148h14.074V192.169z M152.53,182.169v89.148  c0,5.523-4.477,10-10,10h-34.075c-5.523,0-10-4.477-10-10v-89.148c0-5.523,4.477-10,10-10h34.075  C148.053,172.169,152.53,176.646,152.53,182.169z M132.53,192.169h-14.075v69.148h14.075V192.169z"></path></svg>

                                </div>
                                <p class="service-desc">4.SERVICES TO NON - SAUDI MEDICAL ORGANIZATIONS</p>

                            </div>
                        </div></a>
                    </div>
                    <a class="about-more duplicated-btn mx-auto mt-0 mt-sm-3" href="services.html">View More</a>

                </div>

            </div>

        </section>

        <!-- ***** services-section End ***** -->


        <!-- ***** staff-section Start ***** -->

        <section class="section-style staff-section ">

            <div class="container">

                  <div class="title-wrap text-center mb-box mb-sm-5">
                    <span class="sub-title">our staff</span>
                     <h1 class="main-title">Meet Our Specialists</h1>
                </div>

            </div>
            <div class="staff-container">

                <div class="container ">

                    <div class="staff-area">

                        <div class="slider-container staff-slider-container equal-h">

                                <div class="swiper staff-slider">

                                      <div class="swiper-wrapper">

                                            <div class="swiper-slide">

                                            <div class="staff-box padding-box">

                                                    <div class="staff-img">

                                                        <img class="img-fluid "src="{{asset('front/img/person.png')}}" alt="staffName">

                                                    </div>
                                                    <div class="staff-details">

                                                        <div class="staff-info">

                                                            <h5 class="staff-name">Name Surname</h5>
                                                            <p class="staff-position">Co-Founder & CTO</p>

                                                        </div>
                                                        <p class="staff-desc">

                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                            eiusmod tempor incididunt ut ero labore et dolore.

                                                        </p>

                                                    </div>
                                                    <a class="contact-btn hvr-underline-from-left " href="#">contact</a>

                                            </div>
                                            </div>
                                            <div class="swiper-slide">

                                                <div class="staff-box padding-box">

                                                    <div class="staff-img">

                                                        <img class="img-fluid "src="{{asset('front/img/person.png')}}" alt="staffName">

                                                    </div>
                                                    <div class="staff-details">

                                                        <div class="staff-info">

                                                            <h5 class="staff-name">Name Surname</h5>
                                                            <p class="staff-position">Co-Founder & CTO</p>

                                                        </div>
                                                        <p class="staff-desc">

                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                            eiusmod tempor incididunt ut ero labore et dolore.

                                                        </p>

                                                    </div>
                                                    <a class="contact-btn hvr-underline-from-left " href="#">contact</a>

                                                </div>


                                            </div>
                                            <div class="swiper-slide">

                                                <div class="staff-box padding-box">

                                                    <div class="staff-img">

                                                        <img class="img-fluid "src="{{asset('front/img/person.png')}}" alt="staffName">

                                                    </div>
                                                    <div class="staff-details">

                                                        <div class="staff-info">

                                                            <h5 class="staff-name">Name Surname</h5>
                                                            <p class="staff-position">Co-Founder & CTO</p>

                                                        </div>
                                                        <p class="staff-desc">

                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                            eiusmod tempor incididunt ut ero labore et dolore.

                                                        </p>

                                                    </div>
                                                    <a class="contact-btn hvr-underline-from-left " href="#">contact</a>

                                                </div>


                                            </div>


                                      </div>

                                </div>


                        </div>
                        <div class="more-wrap mt-4 pt-2 mt-sm-5 pt-sm-0">

                            <a class="about-more duplicated-btn mx-auto" href="staff.html">View More</a>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!-- ***** staff-section End ***** -->


        <!-- ***** services-banner-section Start ***** -->

        <section class="section-style services-banner-section">

            <div class="container">

                <div class="services-banner padding-box">

                    <p class="banner-text">

                        Our Service Saves Time And Effort For Our Clients By Remining & Coordinating The Service
                        As Well As Providing Advice On The Most Suitable Provider With Reasonable Cost .
                    </p>
                    <a class="banner-link duplicated-btn" href="services.html">Browser Our Services</a>

                </div>

            </div>

        </section>

        <!-- ***** services-banner-section End ***** -->

        <!-- ***** The opinions of our customers start ***** -->

        <section class="section-style opinions">
            <div class="container">
                <h1 class="main-title w-50 m-auto titel-opinions"> opinions of our customers</h1>
              <div class="row mt-5 notes row-cols-1 row-cols-lg-3 row-cols-md-2 row-cols-xl-3 gx-0 gx-md-2 gy-5">
                <div class="fram fram1 ">
                  <h5>Eka Ardilah</h5>
                  <p class="note ">I feel very helpful with all the books provided, so I do my job easily and happily Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                </div>
                <div class="fram  fram2 ">
                  <h5>Hazar Hamzah</h5>
                  <p class="note">Thank you. Many good books to accompany everyday Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, dolores?</p>
                </div>
                <div class="fram fram3 ">
                  <h5>Khoerunnisa</h5>
                  <p class="note">Thanks team, many recommended books for me to read Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur, veniam doloremque.</p>
                </div>
              </div>
            </div>
          </section>

        <!-- ***** The opinions of our customers End ***** -->

        <!-- ***** contact-us-section Start ***** -->

        <section class="section-style contact-us-section">

            <div class="container">

                <div class="contact-area">

                    <div class="row">

                        <div class="col-lg-6">

                            <div class="contact-boxes">

                                <div class="box-item info-box padding-box">

                                    <div class="title-wrap ">
                                        <span class="sub-title">contact us</span>
                                        <h1 class="main-title">our information</h1>
                                    </div>
                                    <div class="info-items">

                                        <div class="info-item">

                                            <div class="info-icon"><i class="fas fa-map-marker-alt"></i></div>
                                            <div class="info-texts">

                                                <span class="text-item info-title">ADDRESS</span>
                                                <span class="text-item info-val">AL NA'AYEM AL IZDIHAR DISTRICT 3666</span>

                                            </div>

                                        </div>
                                        <div class="info-item">

                                            <div class="info-icon"><i class="far fa-envelope"></i></div>
                                            <div class="info-texts">

                                                <span class="text-item info-title">EMAIL</span>
                                                <a href="#" class="text-item info-val">INFO@MFHMC.SA</a>

                                            </div>

                                        </div>
                                        <div class="info-item">

                                            <div class="info-icon"><i class="fab fa-whatsapp"></i></div>
                                            <div class="info-texts">

                                                <span class="text-item info-title">PHONE</span>
                                                <span class="text-item info-val">014358888</span>

                                            </div>

                                        </div>

                                    </div>

                                </div>
                                <div class="box-item hours-box padding-box">

                                    <div class="title-wrap ">
                                        <h1 class="main-title">Opening Hours</h1>
                                    </div>
                                    <div class="info-items">

                                        <div class="info-item">

                                            <div class="info-texts ">

                                                <span class="text-item info-title">SATURDAY - THURSDAY</span>
                                                <span class="text-item info-val">09:00 - 20:00</span>

                                            </div>

                                        </div>
                                        <div class="info-item">

                                            <div class="info-texts ">

                                                <span class="text-item info-title">SATURDAY - FRIDAY</span>
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

        <!-- ***** contact-us-section End ***** -->


        <!-- ***** footer Start ***** -->



 @endsection


@section('script')

    <script>


        /*------------- #staff slider --------------*/
        var swiper = new Swiper('.staff-slider', {

          effect: 'coverflow',
          grabCursor: true,
          centeredSlides: true,
          slidesPerView: "auto",
          initialSlide: 0,
          loop: true,
          loopedSlides: 3,
          breakpoints: {

            0:{
                   coverflowEffect: {
                    slideShadows: false,
                },

              },

            768:{
                   coverflowEffect: {
                    stretch: 125,
                    depth: 200,
                    rotate: 0,
                    slideShadows: false,
                    modifier: 1,

                },
              },

            992: {

                  coverflowEffect: {
                    stretch: 0,
                    depth: 150,
                    rotate: 0,
                    slideShadows: false,
                    modifier: 1,

                },

              },

            1200: {

                slidesPerView: 3,
                coverflowEffect: {
                    stretch: 0,
                    depth: 150,
                    rotate: 0,
                    slideShadows: false,
                    modifier: 1,

            },

              },

            },


        });


    </script>

@endsection

