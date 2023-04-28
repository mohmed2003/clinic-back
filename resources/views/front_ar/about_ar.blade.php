@extends('front.parent')

@section('title','عنا')

@section('styles')


@endsection

@section('content')


<header class="top-nav" id="header">

    <div class="container h-100">

        <div class="navbar-content">

            <div class="nav-logo">

                <a class="d-block" href="index_ar.html">

                    <img class="img-fluid" src="img/logo-fhmc-white.png" alt="FHMC">

                </a>

            </div>

            <ul class="navbar-menu">

                <li class="menu-item">

                    <a class="navbar-link  hvr-underline-from-left" href="{{route('view.index_ar')}}"> الرئيسية </a>

                </li>
                <li class="menu-item">

                    <a class="navbar-link active hvr-underline-from-left" href="{{route('view.about_ar')}}"> معلومات عنا</a>

                </li>
                <li class="menu-item">

                    <a class="navbar-link  hvr-underline-from-left" href="{{route('view.services_ar')}}"> خدماتنا </a>

                </li>
                <li class="menu-item">

                    <a class="navbar-link  hvr-underline-from-left" href="{{route('view.staff_ar')}}"> فريق العمل </a>

                </li>
                <li class="menu-item">

                    <a class="lang-btn" href="{{route('view.about')}}">

                        <i class="fa-solid fa-globe"></i>
                        ENG
                    </a>

                </li>

                <li class="menu-item">

                    <a class="contact-btn" href="{{route('view.contact_ar')}}">إتصل بنا</a>
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


    <div class="page-wrapper">


        <!-- ***** breadcrumb-section Start ***** -->

        <section class="breadcrumb-section">

            <div class="container">

                <nav class="breadcrumb-nav" aria-label="breadcrumb">

                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index_ar.html">الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page">معلومات عنا</li>

                  </ol>

                </nav>

            </div>



        </section>

        <!-- ***** breadcrumb-section End ***** -->


        <!-- ***** about-section Start ***** -->

        <section class="section-style about-section  about-page ">

            <div class="container">

                <div class="about-area">

                    <div class="row   mb_y2">

                        <div class="col-lg-6 mb-box mb-lg-0 order-1 order-lg-2">

                            <div class="about-img col-img">

                                <img class="img-fluid" src="img/22.png" alt="imgDesc">

                            </div>

                        </div>

                        <div class="col-lg-6 order-2 order-lg-1">

                            <div class="about-texts same-h">

                                <div class="title-wrap mb-3">

                                    <h1 class="main-title">من نحن ؟</h1>

                                </div>
                                <p class="about-desc">

                                إيمانًا بأهمية الدور الذي يلعبه قطاع الخدمات الطبية المساندة كمساعد لقطاع الرعاية الصحية ، أنشأنا شركة طبية في الرياض - المملكة العربية السعودية في عام 2015. نقدم خدمات طبية متكاملة من خلال التخطيط والتصميم والتواصل والتأسيس ، وتشغيل المشاريع الطبية وفقًا لأعلى المعايير الدولية بالإضافة إلى ذلك ، نقوم بتوظيف أفضل الموظفين الطبيين والإداريين المؤهلين لتقديم خدمات طبية حديثة تلبي أعلى المعايير العالمية لجودة الرعاية الصحية والسلامة.

                                </p>

                            </div>


                        </div>

                    </div>
                    <div class="row   mb_y2">

                        <div class="col-lg-6 mb-box mb-lg-0">

                            <div class="about-img doctor-img col-img">

                                <img class="img-fluid" src="img/doctor-is-going-examine-his-patient-using-his-stethoscope-sitting-people.webp" alt="imgDesc">

                                <div class="exp-years">

                                    <p class="m-0"> + <span id="">20</span> </p>
                                    عاماً

                                </div>

                            </div>

                        </div>

                        <div class="col-lg-6">

                            <div class="about-texts same-h">

                                <p class="about-desc">

                                 يعتبر الدكتور فهد رائدًا في مجال الرعاية الصحية يتمتع بخبرة تزيد عن 20 عامًا في تعزيز النمو التنظيمي والصحة العامة في القدرات الإدارية والسريرية القوية. مع خبرة الدكتور فهد الواسعة وموظفينا المتفانين ، سيتم تزويدك بخدمات ودعم عالي الجودة ، ونحن نسعى جاهدين للتميز في تقديم خدمات الرعاية الصحية ، ونتطلع إلى الأمام لتلبية احتياجاتك.
                                </p>

                            </div>


                        </div>

                    </div>
                    <div class="about-info  same-h">

                        <div class="row row-cols-lg-2 row-cols-md-1 ">

                            <div class="info-wrap">

                                 <div class="info-item">

                                    <div class="info-icon">

                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
                                            <path id="Vision_2_" d="M4,7.36C2.147,7.36,0.64,5.853,0.64,4S2.147,0.64,4,0.64S7.36,2.147,7.36,4S5.853,7.36,4,7.36z M4,1.36  C2.544,1.36,1.36,2.544,1.36,4S2.544,6.64,4,6.64S6.64,5.456,6.64,4S5.456,1.36,4,1.36z M28,31.36c-1.853,0-3.36-1.508-3.36-3.36  s1.508-3.36,3.36-3.36s3.36,1.508,3.36,3.36S29.853,31.36,28,31.36z M28,25.36c-1.456,0-2.64,1.184-2.64,2.64s1.184,2.64,2.64,2.64  s2.64-1.184,2.64-2.64S29.456,25.36,28,25.36z M4,29.36c-0.75,0-1.36-0.61-1.36-1.36S3.25,26.64,4,26.64S5.36,27.25,5.36,28  S4.75,29.36,4,29.36z M4,27.36c-0.353,0-0.64,0.287-0.64,0.64S3.647,28.64,4,28.64S4.64,28.353,4.64,28S4.353,27.36,4,27.36z   M28,5.36c-0.75,0-1.36-0.61-1.36-1.36S27.25,2.64,28,2.64S29.36,3.25,29.36,4S28.75,5.36,28,5.36z M28,3.36  c-0.353,0-0.64,0.287-0.64,0.64S27.647,4.64,28,4.64S28.64,4.353,28.64,4S28.353,3.36,28,3.36z M16,21.36  c-2.956,0-5.36-2.405-5.36-5.36c0-2.956,2.404-5.36,5.36-5.36c2.955,0,5.36,2.404,5.36,5.36C21.36,18.955,18.955,21.36,16,21.36z   M16,11.36c-2.559,0-4.64,2.082-4.64,4.64s2.082,4.64,4.64,4.64s4.64-2.081,4.64-4.64S18.559,11.36,16,11.36z M16,19.36  c-1.853,0-3.36-1.508-3.36-3.36s1.507-3.36,3.36-3.36s3.36,1.507,3.36,3.36S17.853,19.36,16,19.36z M16,13.36  c-1.456,0-2.64,1.185-2.64,2.64c0,1.456,1.185,2.64,2.64,2.64c1.456,0,2.64-1.184,2.64-2.64S17.456,13.36,16,13.36z M28,0.64  c-1.853,0-3.36,1.507-3.36,3.36c0,0.797,0.29,1.519,0.755,2.096L21.55,9.941C20.038,9.174,18.208,8.64,16,8.64  c-8.143,0-11.3,7.146-11.331,7.218c-0.039,0.09-0.039,0.193,0,0.283c0.021,0.05,1.524,3.451,5.114,5.566l-3.688,3.687  C5.519,24.93,4.796,24.64,4,24.64c-1.853,0-3.36,1.508-3.36,3.36S2.147,31.36,4,31.36S7.36,29.853,7.36,28  c0-0.796-0.29-1.519-0.755-2.096l3.845-3.845c1.512,0.767,3.342,1.301,5.55,1.301c8.144,0,11.3-7.146,11.331-7.219  c0.039-0.09,0.039-0.193,0-0.283c-0.021-0.05-1.524-3.45-5.114-5.566l3.687-3.688C26.481,7.07,27.204,7.36,28,7.36  c1.853,0,3.36-1.507,3.36-3.36S29.853,0.64,28,0.64z M6.64,28c0,1.456-1.185,2.64-2.64,2.64S1.36,29.456,1.36,28  S2.544,25.36,4,25.36S6.64,26.544,6.64,28z M26.603,16c-0.48,0.977-3.568,6.64-10.603,6.64S5.877,16.977,5.398,16  C5.877,15.023,8.966,9.36,16,9.36S26.122,15.023,26.603,16z M28,6.64c-0.645,0-1.229-0.242-1.688-0.628l-0.32-0.32  C25.603,5.233,25.36,4.647,25.36,4c0-1.456,1.184-2.64,2.64-2.64S30.64,2.544,30.64,4S29.456,6.64,28,6.64z"/>
                                            <rect id="_Transparent_Rectangle"/>
                                        </svg>

                                    </div>
                                    <div class="info-texts">

                                        <h2 class="info-title">رؤية نقية</h2>
                                        <p class="info-desc">أن نكون الطبيب الشخصي المفضل</p>

                                    </div>


                                </div>


                            </div>
                            <div class="info-wrap">

                                  <div class="info-item">

                                    <div class="info-icon">

                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 511.992 511.992" style="enable-background:new 0 0 511.992 511.992;" xml:space="preserve"><g><g><path d="M510.096,249.937c-4.032-5.867-100.928-143.275-254.101-143.275C124.56,106.662,7.44,243.281,2.512,249.105    c-3.349,3.968-3.349,9.792,0,13.781C7.44,268.71,124.56,405.329,255.995,405.329S504.549,268.71,509.477,262.886    C512.571,259.217,512.848,253.905,510.096,249.937z M255.995,383.996c-105.365,0-205.547-100.48-230.997-128    c25.408-27.541,125.483-128,230.997-128c123.285,0,210.304,100.331,231.552,127.424    C463.013,282.065,362.256,383.996,255.995,383.996z"/></g></g><g><g><path d="M255.995,170.662c-47.061,0-85.333,38.272-85.333,85.333s38.272,85.333,85.333,85.333s85.333-38.272,85.333-85.333    S303.056,170.662,255.995,170.662z M255.995,319.996c-35.285,0-64-28.715-64-64s28.715-64,64-64s64,28.715,64,64    S291.28,319.996,255.995,319.996z"/></g></g></svg>
                                    </div>
                                    <div class="info-texts">

                                        <h2 class="info-title">القيم النقية</h2>
                                        <p class="info-desc">الرحمة والصدق والجودة.</p>

                                    </div>


                                </div>

                            </div>
                            <div class="info-wrap">

                                 <div class="info-item">

                                    <div class="info-icon">

                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 297 297" style="enable-background:new 0 0 297 297;" xml:space="preserve"><g><path d="M252.678,116.792c-1.167-3.593-4.181-6.277-7.885-7.021l-58.111-11.684l-29.068-51.656   c-1.853-3.292-5.336-5.329-9.114-5.329s-7.261,2.037-9.114,5.329l-29.068,51.656l-58.111,11.684   c-3.704,0.744-6.718,3.428-7.885,7.021c-1.167,3.592-0.306,7.535,2.252,10.314l40.145,43.609l-6.844,58.877   c-0.437,3.752,1.185,7.448,4.24,9.668c3.057,2.222,7.073,2.622,10.506,1.046l53.88-24.704l53.88,24.704   c1.391,0.638,2.878,0.952,4.358,0.952c2.172,0,4.33-0.676,6.148-1.998c3.056-2.22,4.677-5.916,4.24-9.668l-6.844-58.877   l40.145-43.609C252.984,124.327,253.846,120.384,252.678,116.792z M191.645,160.077c-2.062,2.24-3.046,5.267-2.694,8.291   l5.253,45.181l-41.346-18.958c-1.384-0.634-2.871-0.952-4.359-0.952s-2.975,0.318-4.359,0.952l-41.346,18.958l5.253-45.181   c0.351-3.024-0.632-6.051-2.694-8.291l-30.806-33.465l44.592-8.966c2.985-0.6,5.56-2.47,7.053-5.124L148.5,72.883l22.307,39.639   c1.493,2.653,4.068,4.524,7.053,5.124l44.592,8.966L191.645,160.077z"/><path d="M148.5,0C66.617,0,0,66.617,0,148.5S66.617,297,148.5,297S297,230.383,297,148.5S230.383,0,148.5,0z M148.5,276.085   c-70.351,0-127.585-57.234-127.585-127.585S78.149,20.916,148.5,20.916S276.085,78.149,276.085,148.5   S218.851,276.085,148.5,276.085z"/><path d="M148.5,122.182c-14.512,0-26.319,11.806-26.319,26.318s11.807,26.318,26.319,26.318s26.318-11.806,26.318-26.318   S163.012,122.182,148.5,122.182z M148.5,153.902c-2.979,0-5.404-2.423-5.404-5.402s2.424-5.402,5.404-5.402   s5.402,2.423,5.402,5.402S151.479,153.902,148.5,153.902z"/></g></svg>

                                    </div>
                                    <div class="info-texts">

                                        <h2 class="info-title">مهمة نقية</h2>
                                        <p class="info-desc">لجعل الخدمات الطبية متاحة دون الحاجة إلى ذلك</p>

                                    </div>

                                </div>


                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!-- ***** about-section End ***** -->


        <!-- ***** services-banner-section Start ***** -->

        <section class="section-style services-banner-section">

            <div class="container">

                <div class="services-banner padding-box">

                    <p class="banner-text">

                        توفر خدمتنا الوقت والجهد لعملائنا من خلال الاحتفاظ بالخدمة وتنسيقها
                         بالإضافة إلى تقديم المشورة بشأن أنسب مزود بتكلفة معقولة.
                    </p>
                    <a class="banner-link duplicated-btn" href="services_ar.html">تصفح خدماتنا</a>

                </div>

            </div>

        </section>

        <!-- ***** services-banner-section End ***** -->


        <!-- ***** philosophy-banner-section Start ***** -->

        <section class="section-style philosophy-banner-section w-bg">

            <div class="container">

                <div class="philosophy-banner padding-box">

                    <h1 class="main-title med-title clr-main mb-4">فلسفتنا</h1>
                    <p class="banner-text">

                        التميز والريادة في مجال إدارة وتطوير الخدمات الطبية وفق أحدث الأنظمة والمعايير العالمية. نسعى جاهدين لأن تكون خدماتنا الخيار الأول للأفراد وكيانات الأعمال في مجال الرعاية الصحية ، وأن نكون هدف التعاون المطلوب للمهنيين ذوي الخبرة الطبية والإدارية الممتازة.
                    </p>


                </div>

            </div>

        </section>

        <!-- ***** philosophy-banner-section End ***** -->

        <!-- start slide show for clinic images-->

        <section class="section-style clinic-images w-bg">
                    <div class="container">
                        <div id="carouselExampleIndicators" class="carousel slide w-100">
                            <div class="carousel-indicators">
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            </div>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="img/image (1).jpg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="img/1308676-1480657900.jpeg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="img/tbl_articles_article_22075_6095c8857c7-be96-4cb1-b9e4-eb59cf619665.jpg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="img/_111780185_whatsubject.jpg" class="d-block w-100" alt="...">
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                              </button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                              </button>
                          </div>
                    </div>
        </section>

        <!-- end slide show for clinic images-->


        <!-- ***** إتصل بنا-section Start ***** -->



        <!-- ***** إتصل بنا-section End ***** -->

        <section class="section-style about-viduo">
            <div class="container">
                <div class="content w-75 d-flex align-items-center justify-content-center m-auto">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/U24WMWyMr08?start=69" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>                </div>
             </div>
            </section>

        <!-- ***** footer Start ***** -->

        @endsection

        @section('scripts')


        @endsection
