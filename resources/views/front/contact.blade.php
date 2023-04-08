@extends('front.parent')

@section('title','name')

@section('style')


@endsection

@section('content')


    <div class="page-wrapper">


        <!-- ***** contact-banner-section Start ***** -->

        <section class="section-style contact-banner-section" style="background-image: url({{asset('front//img/contact-bg.webp')}})">

            <div class="container">

                <div class="contact-banner">

                    <nav class="breadcrumb-nav" aria-label="breadcrumb">

                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>

                        </ol>

                </nav>

                    <h1 class="main-title">How Can We Help?</h1>

                </div>

            </div>

        </section>

        <!-- ***** contact-banner-section End ***** -->


        <!-- ***** contact-us-section Start ***** -->

        <section class="section-style contact-us-section contact-page pt-0">

            <div class="container">

                <div class="contact-area">

                    <div class="row ">

                        <div class="col-12 mb-5">
                                <div class="chat w-50 m-auto">
                                    <form>
                                        <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Email address</label>
                                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                        </div>
                                        <div class="mb-3">
                                          <label for="exampleInputPassword1" class="form-label">Name</label>
                                          <input type="text" class="form-control" id="exampleInputPassword1">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-check-label d-block mb-2" for="exampleCheck1">Massge</label>
                                            <textarea name="" class="form-control form-label" id="exampleCheck1" cols="30" rows="10"></textarea>
                                          </div>
                                        <button type="submit" class="btn btn-primary submit">Submit</button>
                                      </form>

                            </div>
                        </div>

                        <div class="col-lg-6">

                            <div class="box-item info-box no-bg padding-box">

                                <div class="title-wrap ">
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

                        </div>

                        <div class="col-lg-6">

                            <div class="box-item hours-box no-bg padding-box">

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

                        <div class="col-lg-12 mt-5">
                            <div class="map-container mb_y2" id="map">

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


@endsection
