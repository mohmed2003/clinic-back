
@extends('front.parent')

@section('title','اتصل بنا')

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

                    <a class="navbar-link  hvr-underline-from-left" href="{{route('view.about_ar')}}"> معلومات عنا</a>

                </li>
                <li class="menu-item">

                    <a class="navbar-link  hvr-underline-from-left" href="{{route('view.services_ar')}}"> خدماتنا </a>

                </li>
                <li class="menu-item">

                    <a class="navbar-link  hvr-underline-from-left" href="{{route('view.staff_ar')}}"> فريق العمل </a>

                </li>
                <li class="menu-item">

                    <a class="lang-btn" href="{{route('view.contact')}}">

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


        <!-- ***** contact-banner-section Start ***** -->

        <section class="section-style contact-banner-section" style="background-image: url(./img/contact-bg.webp)">

            <div class="container">

                <div class="contact-banner">

                    <nav class="breadcrumb-nav" aria-label="breadcrumb">

                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index_ar.html">الرئيسية</a> </li>
                            <li class="breadcrumb-item active" aria-current="page">إتصل بنا</li>

                        </ol>

                </nav>

                    <h1 class="main-title">نحن هنا لمساعدتك</h1>

                </div>

            </div>

        </section>

        <!-- ***** contact-banner-section End ***** -->


        <!-- ***** إتصل بنا-section Start ***** -->

        <section class="section-style إتصل بنا-section contact-page pt-0">

            <div class="container">

                <div class="contact-area">

                    <div class="row">

                        <div class="col-12 mb-5">
                            <div class="chat w-50 m-auto">
                                <form>
                                    <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label">عنوان الايميل</label>
                                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                      <div id="emailHelp" class="form-text">لن يتم مشاركة عنوان الايميل الخاص فيك مع اي حهة.</div>
                                    </div>
                                    <div class="mb-3">
                                      <label for="exampleInputPassword1" class="form-label">الاسم</label>
                                      <input type="text" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-check-label d-block mb-2" for="exampleCheck1">الرسالة</label>
                                        <textarea name="" class="form-control" id="exampleCheck1" cols="30" rows="10"></textarea>
                                      </div>
                                    <button type="submit" class="btn btn-primary submit">ارسل</button>
                                  </form>

                        </div>
                    </div>

                        <div class="col-lg-6">

                            <div class="box-item info-box no-bg padding-box">

                                <div class="title-wrap ">
                                    <h1 class="main-title">معلومات عنا </h1>
                                </div>
                                <div class="info-items">

                                    <div class="info-item">

                                        <div class="info-icon"><i class="fas fa-map-marker-alt"></i></div>
                                        <div class="info-texts">

                                            <span class="text-item info-title">العنوان</span>
                                            <span class="text-item info-val">شارع الإزدهار 3306</span>

                                        </div>

                                    </div>
                                    <div class="info-item">

                                        <div class="info-icon"><i class="far fa-envelope"></i></div>
                                        <div class="info-texts">

                                            <span class="text-item info-title">الإيميل</span>
                                            <a href="#" class="text-item info-val">INFO@MFHMC.SA</a>

                                        </div>

                                    </div>
                                    <div class="info-item">

                                        <div class="info-icon"><i class="fab fa-whatsapp"></i></div>
                                        <div class="info-texts">

                                            <span class="text-item info-title">الهاتف</span>
                                            <span class="text-item info-val">014358888</span>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="col-lg-6">

                            <div class="box-item hours-box no-bg padding-box">

                                <div class="title-wrap ">
                                    <h1 class="main-title">ساعات العمل</h1>
                                </div>
                                <div class="info-items">

                                    <div class="info-item">

                                        <div class="info-texts ">

                                            <span class="text-item info-title">الأحد - الخميس</span>
                                            <span class="text-item info-val">09:00 - 20:00</span>

                                        </div>

                                    </div>
                                    <div class="info-item">

                                        <div class="info-texts ">

                                            <span class="text-item info-title">الجمعة - السبت</span>
                                            <span class="text-item info-val">14:00 - 20:00</span>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="col-lg-12 mt-5">
                            <div class="map-container mb_y2" id="map">

                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28979.453789321382!2d46.753383950057724!3d24.780666225054798!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2efda2e71a4331%3A0xf746e0fda2277c89!2z2KfZhNin2LLYr9mH2KfYsdiMINin2YTYsdmK2KfYtiDYp9mE2LPYudmI2K_Zitip!5e0!3m2!1sar!2seg!4v1663162736376!5m2!1sar!2seg"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                             </div>

                                </div>

                    </div>

                </div>

            </div>

        </section>

        <!-- ***** إتصل بنا-section End ***** -->


        <!-- ***** footer Start ***** -->
        @endsection

        @section('scripts')


        @endsection
