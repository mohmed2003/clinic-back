@extends('front.parent')

@section('title','services')

@section('style')


@endsection

@section('content')



    <div class="page-wrapper">

        <!-- ***** breadcrumb-section Start ***** -->

        <section class="breadcrumb-section">

            <div class="container">

                <nav class="breadcrumb-nav" aria-label="breadcrumb">

                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('view.index')}}">{{__('app.home')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> {{__('app.services')}}</li>


                  </ol>

                </nav>

            </div>



        </section>

        <!-- ***** breadcrumb-section End ***** -->


        <!-- ***** services-section Start ***** -->

        <section class="section-style services-section no-more">

            <div class="container">

                <div class="services-area">

                    <div class="title-wrap mb-box mb-sm-5">

                        <h1 class="main-title mb-3">{{__('app.titleOfServices')}}</h1>
                        <p class="subject-text">

                            {{__('app.desServices')}}
                        </p>

                    </div>

                    <div class="row row-cols-xl-4 row-cols-md-2 row-cols-1">
                        @foreach ($services as $service)
                        <a href="{{route('view.service',$service->id)}}"><div class="service-wrap">

                            <div class="service-box">

                                <div class="service-icon">

                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
                                        <path id="doctor-patient_1_" d="M31.36,30h-0.72v-9c0-3.358-2.151-6.289-5.354-7.292c-0.138-0.043-0.236-0.165-0.251-0.308  c-0.014-0.144,0.059-0.282,0.185-0.351c1.492-0.82,2.42-2.372,2.42-4.049c0-2.559-2.081-4.64-4.64-4.64S18.36,6.441,18.36,9  c0,1.677,0.928,3.229,2.421,4.049c0.126,0.069,0.198,0.208,0.185,0.351c-0.015,0.144-0.113,0.265-0.251,0.308  C17.512,14.711,15.36,17.642,15.36,21v9h-0.72v-9c0-1.389,0.336-2.711,0.944-3.877c-0.567-0.963-1.326-1.778-2.224-2.401V17  c0,2.283-1.764,4.162-4,4.346v2.329c0.854,0.168,1.5,0.923,1.5,1.825c0,1.025-0.834,1.86-1.86,1.86s-1.86-0.835-1.86-1.86  c0-0.902,0.646-1.657,1.5-1.825v-2.329c-2.236-0.184-4-2.062-4-4.346v-2.281C2.617,16.116,1.36,18.433,1.36,21v9H0.64v-9  c0-3.426,2.045-6.444,5.161-7.727C4.453,12.269,3.64,10.69,3.64,9c0-2.055,1.173-3.921,3.007-4.817C6.643,4.123,6.64,4.062,6.64,4  c0-1.301,1.059-2.36,2.36-2.36S11.36,2.699,11.36,4c0,0.062-0.002,0.123-0.007,0.183C13.187,5.079,14.36,6.945,14.36,9  c0,1.69-0.812,3.269-2.162,4.274c1.555,0.642,2.872,1.732,3.797,3.146c0.903-1.383,2.215-2.491,3.807-3.146  C18.452,12.269,17.64,10.69,17.64,9c0-2.956,2.405-5.36,5.36-5.36S28.36,6.044,28.36,9c0,1.69-0.812,3.269-2.162,4.273  c3.116,1.283,5.162,4.302,5.162,7.727V30z M9,24.36c-0.628,0-1.14,0.511-1.14,1.14S8.372,26.64,9,26.64s1.14-0.511,1.14-1.14  S9.628,24.36,9,24.36z M5.36,14.278V17c0,2.007,1.633,3.64,3.64,3.64s3.64-1.633,3.64-3.64v-2.72  c-0.429-0.231-0.882-0.423-1.355-0.571c-0.138-0.043-0.236-0.165-0.251-0.308c-0.014-0.144,0.059-0.282,0.185-0.351  c1.493-0.821,2.421-2.373,2.421-4.05c0-1.725-0.955-3.296-2.459-4.097C10.825,5.757,9.982,6.36,9,6.36S7.175,5.757,6.819,4.903  C5.314,5.704,4.36,7.275,4.36,9c0,1.677,0.928,3.229,2.421,4.049c0.126,0.069,0.199,0.208,0.185,0.351  c-0.015,0.144-0.113,0.265-0.251,0.308C6.239,13.857,5.786,14.049,5.36,14.278z M9,2.36C8.096,2.36,7.36,3.096,7.36,4  S8.096,5.64,9,5.64S10.64,4.904,10.64,4S9.904,2.36,9,2.36z M23,25.36c-0.092,0-0.185-0.035-0.255-0.105l-2.973-2.973  c-0.4-0.401-0.622-0.934-0.625-1.499c-0.002-0.572,0.22-1.111,0.625-1.518c0.402-0.402,0.937-0.624,1.505-0.626  c0.002,0,0.003,0,0.005,0c0.569,0,1.105,0.223,1.509,0.625L23,19.475l0.209-0.21c0.807-0.803,2.212-0.805,3.019,0  c0.413,0.414,0.635,0.963,0.624,1.548c-0.01,0.555-0.231,1.077-0.624,1.47l-2.973,2.973C23.185,25.325,23.092,25.36,23,25.36z   M21.282,19.36c-0.001,0-0.002,0-0.003,0c-0.377,0-0.731,0.147-0.997,0.414c-0.269,0.269-0.416,0.626-0.414,1.005  c0.001,0.375,0.148,0.729,0.414,0.993L23,24.491l2.718-2.719c0.261-0.26,0.407-0.605,0.413-0.973  c0.008-0.388-0.139-0.752-0.413-1.025c-0.534-0.536-1.467-0.535-1.999,0l-0.464,0.464c-0.141,0.141-0.369,0.141-0.51,0l-0.464-0.464  C22.015,19.507,21.659,19.36,21.282,19.36z"/>
                                        <rect id="_Transparent_Rectangle" style="fill:none;" width="32" height="32"/>
                                    </svg>
                                </div>
                                <p class="service-desc">{{$service->id .". ". $service->title}}</p>
                            </div>
                        </div></a>
                        @endforeach




                    </div>


                </div>

            </div>

        </section>

        <!-- ***** services-section End ***** -->


        <!-- ***** services-details-section Start ***** -->

        <section class="section-style services-details-section">



            <div class="services-details-area">
                @foreach ($services as $service)

                <div class="container">

                    <div class="services-description-items">

                        <div class="service-desc-wrap" id="patient">

                            <div class="title-wrap mb-box mb-sm-5 mt-5">

                                <h1 class="main-title subject-title">{{$service->id .". ". $service->title}}</h1>

                            </div>

                            @if ($service->sup_titles_count>0)
                            <div class="desc-rows">

                                <div class="row row-cols-lg-3 row-cols-md-2 gx-md-5 justify-content-center ">



                                    {{-- @while ($service->sup_titles_count > 0) --}}
                                    @foreach ($service->sup_titles as $sup_title)
                                    {{-- <p>{{$sup_title->title}}</p> --}}
                                    <div class="row-wrap">

                                        <div class="row-item">

                                            <span class="desc-m">{{$sup_title->title}}</span>
                                            <span class="desc-s">{{$sup_title->description ?? ""}}</span>

                                        </div>

                                    </div>
                                    @endforeach



                                    {{-- @endwhile --}}

                                </div>

                            </div>

                            @else

                            <div></div>

                            @endif



                        </div>


                    </div>
                </div>



                <div class="container">

                    <div class="services-description-items">

                        <div class="service-desc-wrap">
                            @if ($service->sup_descriptions_count > 0)
                            <div class="title-wrap small mb-box mb-sm-5 mt">

                                <h1 class="main-title ">Common requested services for outbound patients:</h1>

                            </div>
                            @else
                            <div class="title-wrap small mb-box mb-sm-5">

                                <h1 class="main-title "></h1>

                            </div>

                            @endif




                            @if ($service->sup_descriptions_count > 0)


                            <div class="dec-boxes">

                                <div class="row row-cols-lg-3 row-cols-md-2">

                                    {{-- @while ($service->sup_descriptions_count > 0) --}}
                                    @foreach ($service->sup_descriptions as $sup_description)

                                    <div class="box-wrap col-md-12 col-lg-4">

                                        <div class="box-item">

                                              <div class="item-icon">

                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g><g><path d="M384,221.091h-62.836l-27.927-62.836c-2.327-4.655-5.818-6.982-10.473-6.982c-4.655,0-9.309,2.327-10.473,6.982    l-51.2,116.364l-22.109-46.545c-2.327-3.491-5.818-6.982-10.473-6.982H128c-6.982,0-11.636,4.655-11.636,11.636    s4.655,11.636,11.636,11.636h52.364l30.255,62.836c2.327,3.491,5.818,6.982,10.473,6.982s8.145-2.327,10.473-6.982l51.2-115.2    l20.945,46.545c1.164,3.491,5.818,5.818,10.473,5.818H384c6.982,0,11.636-4.655,11.636-11.636S390.982,221.091,384,221.091z"/></g></g><g><g><path d="M407.273,34.909h-69.818c0-6.982-4.655-11.636-11.636-11.636h-29.091c-4.655,0-8.145-2.327-9.309-4.655    C280.436,6.982,268.8,0,256,0s-24.436,6.982-30.255,18.618c-2.327,2.327-5.818,4.655-10.473,4.655h-29.091    c-6.982,0-11.636,4.655-11.636,11.636v58.182c0,6.982,4.655,11.636,11.636,11.636h139.636c6.982,0,11.636-4.655,11.636-11.636    c0-6.982-4.655-11.636-11.636-11.636h-128V46.545h17.455c12.8,0,24.436-6.982,30.255-17.455c4.655-8.145,16.291-6.982,20.945,0    c5.818,10.473,17.455,17.455,30.255,17.455h17.455c0,6.982,4.655,11.636,11.636,11.636h81.455c6.982,0,11.636,4.655,11.636,11.636    v407.273c0,6.982-4.655,11.636-11.636,11.636H104.727c-6.982,0-11.636-4.655-11.636-11.636V69.818    c0-6.982,4.655-11.636,11.636-11.636H128c6.982,0,11.636-4.655,11.636-11.636S134.982,34.909,128,34.909h-23.273    c-19.782,0-34.909,15.127-34.909,34.909v407.273c0,19.782,15.127,34.909,34.909,34.909h302.545    c19.782,0,34.909-15.127,34.909-34.909V69.818C442.182,50.036,427.055,34.909,407.273,34.909z"/></g></g><g><g><path d="M279.273,372.364H128c-6.982,0-11.636,4.655-11.636,11.636s4.655,11.636,11.636,11.636h151.273    c6.982,0,11.636-4.655,11.636-11.636S286.255,372.364,279.273,372.364z"/></g></g><g><g><path d="M209.455,418.909H128c-6.982,0-11.636,4.655-11.636,11.636s4.655,11.636,11.636,11.636h81.455    c6.982,0,11.636-4.655,11.636-11.636S216.436,418.909,209.455,418.909z"/></g></g></svg>

                                            </div>

                                            <p class="item-text">

                                             {{$sup_description->description}}
                                            </p>

                                        </div>

                                    </div>
                                    {{-- @endwhile --}}
                                    @endforeach


                                </div>
                            </div>
                            @else
                           <div></div>
                            @endif

                            <div class="texts-list-wrap">

                                <ul class="texts-list">
                                    {{-- @while ($service->steps_count > 0) --}}
                                    @foreach ($service->steps as $step)

                                    <li class="list-item">{{$step->sentence}}</li>
                                    {{-- @endwhile --}}
                                    @endforeach

                                </ul>

                            </div>

                        </div>
                        {{-- <div class="service-desc-wrap" id="brokage">

                            <div class="title-wrap  mb-box mb-sm-5">

                                <h1 class="main-title subject-title">2. Brokage Services</h1>

                            </div>


                            <div class="texts-list-wrap">

                                <ul class="texts-list">

                                    <li class="list-item">Health insurance brokage services</li>

                                </ul>

                            </div>

                        </div>
                        <div class="service-desc-wrap" id="MEDICAL">

                            <div class="title-wrap  mb-box mb-sm-5">

                                <h1 class="main-title subject-title">3. Services To Saudi Medical Organizations (Hospitals, Polyclinics, Clinics, Medical School/Universities)</h1>

                            </div>


                            <div class="texts-list-wrap ">

                                <ul class="texts-list no-marker">

                                    <li class="list-item">1) Business to business (B to B).</li>

                                    <li class="list-item">2) Technical (medical) consultations, Accreditation, Training courses, Management assessment.</li>

                                    <li class="list-item">3) Visiting doctors arrangements.</li>

                                    <li class="list-item">4) Outsourced medical services management (IT, H IS, Lab, Pharmacy, QI, patient education, pricing, Patient education, 24/7 ER phone consultation, 24/7 ER specialist phone consultation, revenue cycle management, TPA for medical bills, Broker for health insurance, Medical translator, Radiology, H ome visit, AI software</li>

                                    <li class="list-item">5) Medical contracting support services.</li>

                                    <li class="list-item">6) Medical supplies volume discount.</li>

                                    <li class="list-item">7) Providing professional advice in collaboration with specialized international institutions.</li>

                                    <li class="list-item">8) Medical recruitment coordination and assisting in the selection and interviewing process of medical and administrative staff.</li>

                                    <li class="list-item">9) Evaluating and coordinate training programs and developing training plans for medical Leaders.</li>


                                </ul>

                            </div>

                        </div>
                        <div class="service-desc-wrap" id="ORGANIZATIONS">

                            <div class="title-wrap  mb-box mb-sm-5">

                                <h1 class="main-title subject-title">4. Services To Non-Saudi Medical Organizations 4 (Hospitals, Rehab, Medical School/Universities)</h1>

                            </div>


                            <div class="texts-list-wrap">

                                <ul class="texts-list">

                                    <li class="list-item">Business to business (B to B).</li>


                                    <li class="list-item">Representation, liaise, connect, Conceirge services, meetings and familiarization visits arrangements.</li>


                                    <li class="list-item">Arrange technical (medical) consultations, Accreditation, Training courses.</li>


                                    <li class="list-item">Visiting doctors arrangements.</li>


                                    <li class="list-item">Medical Tourism Partnership</li>


                                </ul>

                            </div>

                        </div> --}}


                    </div>

                </div>
                @endforeach
                   <div class="desc-banner">

                   <div class="container">

                       <div class="row gx-lg-5 ">

                           <div class="col-lg">

                               <div class="banner-content">

                                   <p class="banner-text">

                                    {{__('app.bannerflage1')}} <span>{{__('app.bannerflage2')}}</span>.

                               </p>

                               </div>

                           </div>
                           <div class="col-xl-auto col-lg-5">

                               <div class="banner-img">

                                        <img class="img-fluid" src="{{asset('front/img/flag_2.png')}}" alt="imgDesc">

                                </div>

                           </div>

                       </div>


                  </div>

                </div>
            </div>




        </section>

        <!-- ***** services-details-section End ***** -->


        <!-- ***** contact-us-section Start ***** -->



        <!-- ***** contact-us-section End ***** -->

@endsection

@section('script')


@endsection
