@extends('front.parent')

@section('title','name')

@section('style')


@endsection

@section('content')



    <div class="page-wrapper">

        <!-- ***** breadcrumb-section Start ***** -->

        <section class="breadcrumb-section">

            <div class="container">

                <nav class="breadcrumb-nav" aria-label="breadcrumb">

                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Our Services</li>


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

                        <h1 class="main-title mb-3">We Provide Best Services</h1>
                        <p class="subject-text">

                            The company aims to provide services to patients and the health sector in many ways, all based on the skills of medical and administrative experts, and their rich experience in quality and communication The company’s business areas include the following:

                        </p>

                    </div>

                    <div class="row row-cols-xl-4 row-cols-md-2 row-cols-1">

                        <a href="service.html"><div class="service-wrap">

                            <div class="service-box">

                                <div class="service-icon">

                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
                                        <path id="doctor-patient_1_" d="M31.36,30h-0.72v-9c0-3.358-2.151-6.289-5.354-7.292c-0.138-0.043-0.236-0.165-0.251-0.308  c-0.014-0.144,0.059-0.282,0.185-0.351c1.492-0.82,2.42-2.372,2.42-4.049c0-2.559-2.081-4.64-4.64-4.64S18.36,6.441,18.36,9  c0,1.677,0.928,3.229,2.421,4.049c0.126,0.069,0.198,0.208,0.185,0.351c-0.015,0.144-0.113,0.265-0.251,0.308  C17.512,14.711,15.36,17.642,15.36,21v9h-0.72v-9c0-1.389,0.336-2.711,0.944-3.877c-0.567-0.963-1.326-1.778-2.224-2.401V17  c0,2.283-1.764,4.162-4,4.346v2.329c0.854,0.168,1.5,0.923,1.5,1.825c0,1.025-0.834,1.86-1.86,1.86s-1.86-0.835-1.86-1.86  c0-0.902,0.646-1.657,1.5-1.825v-2.329c-2.236-0.184-4-2.062-4-4.346v-2.281C2.617,16.116,1.36,18.433,1.36,21v9H0.64v-9  c0-3.426,2.045-6.444,5.161-7.727C4.453,12.269,3.64,10.69,3.64,9c0-2.055,1.173-3.921,3.007-4.817C6.643,4.123,6.64,4.062,6.64,4  c0-1.301,1.059-2.36,2.36-2.36S11.36,2.699,11.36,4c0,0.062-0.002,0.123-0.007,0.183C13.187,5.079,14.36,6.945,14.36,9  c0,1.69-0.812,3.269-2.162,4.274c1.555,0.642,2.872,1.732,3.797,3.146c0.903-1.383,2.215-2.491,3.807-3.146  C18.452,12.269,17.64,10.69,17.64,9c0-2.956,2.405-5.36,5.36-5.36S28.36,6.044,28.36,9c0,1.69-0.812,3.269-2.162,4.273  c3.116,1.283,5.162,4.302,5.162,7.727V30z M9,24.36c-0.628,0-1.14,0.511-1.14,1.14S8.372,26.64,9,26.64s1.14-0.511,1.14-1.14  S9.628,24.36,9,24.36z M5.36,14.278V17c0,2.007,1.633,3.64,3.64,3.64s3.64-1.633,3.64-3.64v-2.72  c-0.429-0.231-0.882-0.423-1.355-0.571c-0.138-0.043-0.236-0.165-0.251-0.308c-0.014-0.144,0.059-0.282,0.185-0.351  c1.493-0.821,2.421-2.373,2.421-4.05c0-1.725-0.955-3.296-2.459-4.097C10.825,5.757,9.982,6.36,9,6.36S7.175,5.757,6.819,4.903  C5.314,5.704,4.36,7.275,4.36,9c0,1.677,0.928,3.229,2.421,4.049c0.126,0.069,0.199,0.208,0.185,0.351  c-0.015,0.144-0.113,0.265-0.251,0.308C6.239,13.857,5.786,14.049,5.36,14.278z M9,2.36C8.096,2.36,7.36,3.096,7.36,4  S8.096,5.64,9,5.64S10.64,4.904,10.64,4S9.904,2.36,9,2.36z M23,25.36c-0.092,0-0.185-0.035-0.255-0.105l-2.973-2.973  c-0.4-0.401-0.622-0.934-0.625-1.499c-0.002-0.572,0.22-1.111,0.625-1.518c0.402-0.402,0.937-0.624,1.505-0.626  c0.002,0,0.003,0,0.005,0c0.569,0,1.105,0.223,1.509,0.625L23,19.475l0.209-0.21c0.807-0.803,2.212-0.805,3.019,0  c0.413,0.414,0.635,0.963,0.624,1.548c-0.01,0.555-0.231,1.077-0.624,1.47l-2.973,2.973C23.185,25.325,23.092,25.36,23,25.36z   M21.282,19.36c-0.001,0-0.002,0-0.003,0c-0.377,0-0.731,0.147-0.997,0.414c-0.269,0.269-0.416,0.626-0.414,1.005  c0.001,0.375,0.148,0.729,0.414,0.993L23,24.491l2.718-2.719c0.261-0.26,0.407-0.605,0.413-0.973  c0.008-0.388-0.139-0.752-0.413-1.025c-0.534-0.536-1.467-0.535-1.999,0l-0.464,0.464c-0.141,0.141-0.369,0.141-0.51,0l-0.464-0.464  C22.015,19.507,21.659,19.36,21.282,19.36z"/>
                                        <rect id="_Transparent_Rectangle" style="fill:none;" width="32" height="32"/>
                                    </svg>
                                </div>
                                <p class="service-desc">1. Patient Services</p>

                            </div>
                        </div></a>
                        <a href="#brokage"><div class="service-wrap">

                            <div class="service-box">

                                <div class="service-icon">

                                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 28.832 28.832" style="enable-background:new 0 0 28.832 28.832;" xml:space="preserve"><g><path d="M11.98,5.373c0-1.584,1.284-2.869,2.869-2.869s2.869,1.284,2.869,2.869s-1.284,2.869-2.869,2.869   S11.98,6.957,11.98,5.373z M15.716,15.621c0.616-0.658,1.479-1.075,2.575-1.245c0.249-0.038,0.513-0.061,0.786-0.077   c0.088-0.003,0.171-0.012,0.259-0.012h1.707c-1.253-0.521-2.141-1.761-2.141-3.203c0-0.575,0.143-1.12,0.394-1.596   c-0.89-0.325-1.711-0.32-1.711-0.32h-5.753c-0.643,0.015-1.183,0.096-1.636,0.23c0.281,0.5,0.442,1.076,0.442,1.686   c0,1.442-0.887,2.681-2.142,3.203h1.412c0.017-0.002,0.033-0.002,0.051-0.002c0.1,0,0.209,0.004,0.319,0.012   c0.235,0.017,0.492,0.053,0.758,0.107c1.444,0.303,3.186,1.253,3.379,3.527l0.002,0.051v1.774h0.362l0.002-1.774   C14.779,17.957,14.729,16.675,15.716,15.621z M6.993,13.983c1.582,0,2.869-1.287,2.869-2.871S8.575,8.243,6.993,8.243   c-1.584,0-2.869,1.285-2.869,2.869C4.124,12.695,5.41,13.983,6.993,13.983z M9.728,14.908H3.976   c-4.118,0.076-3.975,3.103-3.975,3.103L0,25.067h0.004c0,0.017-0.003,0.035-0.003,0.05c0,0.67,0.545,1.211,1.213,1.211   c0.669,0,1.209-0.541,1.209-1.211c0-0.016-0.002-0.033-0.005-0.05h0.005v-6.532h0.758l-0.006,6.958l7.266,0.006l-0.006-6.996h0.786   v6.563h0.004c0,0.003,0,0.006,0,0.01c0,0.669,0.541,1.211,1.207,1.211c0.669,0,1.211-0.542,1.211-1.211c0-0.004,0-0.007,0-0.01   V18.01C13.378,14.861,9.728,14.908,9.728,14.908z M22.185,13.982c1.585,0,2.87-1.285,2.87-2.87s-1.285-2.87-2.87-2.87   s-2.87,1.285-2.87,2.87C19.316,12.697,20.6,13.982,22.185,13.982z M24.921,14.908h-5.754c-4.119,0.076-3.973,3.103-3.973,3.103   l-0.002,7.056h0.005c0,0.017-0.003,0.035-0.003,0.05c0,0.67,0.544,1.211,1.212,1.211c0.669,0,1.208-0.541,1.208-1.211   c0-0.016-0.003-0.033-0.004-0.05h0.004v-6.532h0.76l-0.009,6.958l7.266,0.006l-0.006-6.996h0.786v6.563h0.002   c0,0.003,0,0.006,0,0.01c0,0.669,0.542,1.211,1.21,1.211c0.667,0,1.209-0.542,1.209-1.211c0-0.004,0-0.007,0-0.01V18.01   C28.57,14.861,24.921,14.908,24.921,14.908z"/></g></svg>

                                </div>
                                <p class="service-desc">2. Brokage Services </p>

                            </div>
                        </div></a>
                        <a href="#MEDICAL"><div class="service-wrap">

                            <div class="service-box">

                                <div class="service-icon">

                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 324.667 324.667" enable-background="new 0 0 324.667 324.667">
                                      <g>
                                        <path d="m168.333,69.539v-2.739h2.738c3.313,0 6-2.687 6-6s-2.687-6-6-6h-2.738v-2.738c0-3.313-2.687-6-6-6s-6,2.687-6,6v2.738h-2.738c-3.313,0-6,2.687-6,6s2.687,6 6,6h2.738v2.738c0,3.313 2.687,6 6,6s6-2.686 6-5.999z"/>
                                        <path d="m54.919,199.478c3.313,0 6-2.687 6-6v-8.614c0-3.313-2.687-6-6-6s-6,2.687-6,6v8.614c0,3.313 2.687,6 6,6z"/>
                                        <path d="m78.748,199.478c3.313,0 6-2.687 6-6v-8.614c0-3.313-2.687-6-6-6s-6,2.687-6,6v8.614c0,3.313 2.686,6 6,6z"/>
                                        <path d="m54.919,229.12c3.313,0 6-2.687 6-6v-8.614c0-3.313-2.687-6-6-6s-6,2.687-6,6v8.614c0,3.313 2.687,6 6,6z"/>
                                        <path d="m78.748,229.12c3.313,0 6-2.687 6-6v-8.614c0-3.313-2.687-6-6-6s-6,2.687-6,6v8.614c0,3.313 2.686,6 6,6z"/>
                                        <path d="m54.919,258.762c3.313,0 6-2.687 6-6v-8.614c0-3.313-2.687-6-6-6s-6,2.687-6,6v8.614c0,3.314 2.687,6 6,6z"/>
                                        <path d="m78.748,258.762c3.313,0 6-2.687 6-6v-8.614c0-3.313-2.687-6-6-6s-6,2.687-6,6v8.614c0,3.314 2.686,6 6,6z"/>
                                        <path d="m245.919,199.478c3.313,0 6-2.687 6-6v-8.614c0-3.313-2.687-6-6-6s-6,2.687-6,6v8.614c0,3.313 2.687,6 6,6z"/>
                                        <path d="m269.748,199.478c3.313,0 6-2.687 6-6v-8.614c0-3.313-2.687-6-6-6s-6,2.687-6,6v8.614c0,3.313 2.686,6 6,6z"/>
                                        <path d="m245.919,229.12c3.313,0 6-2.687 6-6v-8.614c0-3.313-2.687-6-6-6s-6,2.687-6,6v8.614c0,3.313 2.687,6 6,6z"/>
                                        <path d="m269.748,229.12c3.313,0 6-2.687 6-6v-8.614c0-3.313-2.687-6-6-6s-6,2.687-6,6v8.614c0,3.313 2.686,6 6,6z"/>
                                        <path d="m245.919,258.762c3.313,0 6-2.687 6-6v-8.614c0-3.313-2.687-6-6-6s-6,2.687-6,6v8.614c0,3.314 2.687,6 6,6z"/>
                                        <path d="m269.748,258.762c3.313,0 6-2.687 6-6v-8.614c0-3.313-2.687-6-6-6s-6,2.687-6,6v8.614c0,3.314 2.686,6 6,6z"/>
                                        <path d="m144.419,155.221v8.614c0,3.313 2.687,6 6,6s6-2.687 6-6v-8.614c0-3.313-2.687-6-6-6s-6,2.687-6,6z"/>
                                        <path d="m168.248,155.221v8.614c0,3.313 2.687,6 6,6s6-2.687 6-6v-8.614c0-3.313-2.687-6-6-6s-6,2.687-6,6z"/>
                                        <path d="m150.419,178.864c-3.313,0-6,2.687-6,6v8.614c0,3.313 2.687,6 6,6s6-2.687 6-6v-8.614c0-3.314-2.686-6-6-6z"/>
                                        <path d="m174.248,178.864c-3.313,0-6,2.687-6,6v8.614c0,3.313 2.687,6 6,6s6-2.687 6-6v-8.614c0-3.314-2.687-6-6-6z"/>
                                        <path d="m150.419,208.506c-3.313,0-6,2.687-6,6v8.614c0,3.313 2.687,6 6,6s6-2.687 6-6v-8.614c0-3.314-2.686-6-6-6z"/>
                                        <path d="m174.248,208.506c-3.313,0-6,2.687-6,6v8.614c0,3.313 2.687,6 6,6s6-2.687 6-6v-8.614c0-3.314-2.687-6-6-6z"/>
                                        <path d="m318.667,284.144h-12.611v-127.376c0-3.314-2.687-6-6-6h-78v-42.943c0-3.313-2.687-6-6-6h-47.723v-8.747h20.277c3.313,0 6-2.687 6-6v-52.555c0-3.313-2.687-6-6-6h-52.555c-3.313,0-6,2.687-6,6v52.555c0,3.313 2.687,6 6,6h20.277v8.747h-47.723c-3.313,0-6,2.687-6,6v42.943h-78c-3.313,0-6,2.686-6,6v127.376h-12.609c-3.313,0-6,2.687-6,6s2.687,6 6,6h312.667c3.313,0 6-2.687 6-6s-2.687-6-6-6zm-108.611-170.319v170.319h-10.056v-26.374c0-3.313-2.687-6-6-6h-63.333c-3.313,0-6,2.687-6,6v26.375h-10.056v-170.32h95.445zm-22.056,170.319h-51.333v-20.374h51.333v20.374zm106.056,0h-72v-121.376h72v121.376zm-191.445,0h-72v-121.376h72v121.376zm39.445-243.621h40.555v40.555h-40.555v-40.555z"/>
                                      </g>
                                    </svg>

                                </div>
                                <p class="service-desc">3. Services To Saudi Medical Organizations</p>

                            </div>
                        </div></a>
                        <a href="#ORGANIZATIONS"><div class="service-wrap">

                            <div class="service-box">

                                <div class="service-icon">

                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 422.505 422.505" style="enable-background:new 0 0 422.505 422.505;" xml:space="preserve">
                                    <path d="M173.946,74.015c0-5.523,4.477-10,10-10h17.312V46.703c0-5.523,4.477-10,10-10s10,4.477,10,10v17.312h17.312  c5.523,0,10,4.477,10,10s-4.477,10-10,10h-17.312v17.313c0,5.523-4.477,10-10,10s-10-4.477-10-10V84.015h-17.312  C178.423,84.015,173.946,79.538,173.946,74.015z M414.669,412.505c0,5.523-4.477,10-10,10H17.835c-5.523,0-10-4.477-10-10  s4.477-10,10-10H56.19V74.014c0-5.523,4.477-10,10-10h71.725C142.812,27.913,173.836,0,211.258,0  c37.421,0,68.445,27.914,73.341,64.015l71.725-0.001c2.652,0,5.196,1.054,7.071,2.929c1.875,1.875,2.929,4.419,2.929,7.071v328.491  h38.345C410.192,402.505,414.669,406.982,414.669,412.505z M157.242,74.015c0,29.784,24.231,54.015,54.016,54.015  c29.784,0,54.014-24.231,54.014-54.015S241.042,20,211.258,20C181.474,20,157.242,44.231,157.242,74.015z M201.258,330.476h-51.581  v72.029h51.576L201.258,330.476z M272.839,330.476h-51.582l-0.005,72.029h51.586V330.476z M346.325,84.014H284.6  c-4.896,36.101-35.92,64.016-73.341,64.016c-37.422,0-68.447-27.915-73.343-64.016H76.19v318.491h53.487v-82.029  c0-5.523,4.477-10,10-10h71.581h0h71.581c5.523,0,10,4.477,10,10v82.029h53.485V84.014z M279.986,172.169h34.076  c5.523,0,10,4.477,10,10v89.148c0,5.523-4.477,10-10,10h-34.076c-5.523,0-10-4.477-10-10v-89.148  C269.986,176.646,274.463,172.169,279.986,172.169z M289.986,261.317h14.076v-69.148h-14.076V261.317z M238.294,182.169v89.148  c0,5.523-4.477,10-10,10H194.22c-5.523,0-10-4.477-10-10v-89.148c0-5.523,4.477-10,10-10h34.074  C233.817,172.169,238.294,176.646,238.294,182.169z M218.294,192.169H204.22v69.148h14.074V192.169z M152.53,182.169v89.148  c0,5.523-4.477,10-10,10h-34.075c-5.523,0-10-4.477-10-10v-89.148c0-5.523,4.477-10,10-10h34.075  C148.053,172.169,152.53,176.646,152.53,182.169z M132.53,192.169h-14.075v69.148h14.075V192.169z"/></svg>

                                </div>
                                <p class="service-desc">4. Services To Non-Saudi Medical Organizations</p>

                            </div>
                        </div></a>

                    </div>


                </div>

            </div>

        </section>

        <!-- ***** services-section End ***** -->


        <!-- ***** services-details-section Start ***** -->

        <section class="section-style services-details-section">

            <div class="services-details-area">

                <div class="container">

                    <div class="services-description-items">

                        <div class="service-desc-wrap" id="patient">

                            <div class="title-wrap mb-box mb-sm-5">

                                <h1 class="main-title subject-title">1. Patient Services</h1>

                            </div>
                            <div class="desc-rows">

                                <div class="row row-cols-lg-3 row-cols-md-2 gx-md-5 justify-content-center ">

                                    <div class="row-wrap">

                                        <div class="row-item">

                                            <span class="desc-m">We help patients to get consultations & appointments</span>
                                            <span class="desc-s">in USA, Europe, or,Asia This includes.</span>

                                        </div>

                                    </div>
                                    <div class="row-wrap">

                                        <div class="row-item">

                                            <span class="desc-m">Patient’s preparation before departure, pre-treatment</span>
                                            <span class="desc-s">evaluation including travel medical advices and vaccinations</span>

                                        </div>

                                    </div>
                                    <div class="row-wrap">

                                        <div class="row-item">

                                            <span class="desc-m">Medical bill review and discount pursuing.</span>
                                            <span class="desc-s">if necessary</span>

                                        </div>

                                    </div>
                                    <div class="row-wrap">

                                        <div class="row-item">

                                            <span class="desc-m">Travel arrangements including</span>
                                            <span class="desc-s">MedEvac, SOS from and to Saudi Arabia.</span>

                                        </div>

                                    </div>
                                    <div class="row-wrap">

                                        <div class="row-item">

                                            <span class="desc-m">24/7 remote medical & logistic</span>
                                            <span class="desc-s">supports while patient is OOK</span>

                                        </div>

                                    </div>
                                    <div class="row-wrap">

                                        <div class="row-item">

                                            <span class="desc-m">Visa application</span>
                                            <span class="desc-s">if necessary</span>

                                        </div>

                                    </div>
                                    <div class="row-wrap">

                                        <div class="row-item">

                                            <span class="desc-m">Post-treatment consultations and compliance management.</span>

                                        </div>

                                    </div>

                                </div>

                            </div>



                        </div>


                    </div>
                </div>

                <div class="desc-banner">

                   <div class="container">

                       <div class="row gx-lg-5 ">

                           <div class="col-lg">

                               <div class="banner-content">

                                   <p class="banner-text">

                                   outbound services by organizing medical tourism services in the world's most prestigious and recognized institution with <span>efficiency and credibility</span>.

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

                <div class="container">

                    <div class="services-description-items">

                        <div class="service-desc-wrap">

                            <div class="title-wrap small mb-box mb-sm-5">

                                <h1 class="main-title ">Common requested services for outbound patients:</h1>

                            </div>

                            <div class="dec-boxes">

                                <div class="row row-cols-lg-3 row-cols-md-2">

                                    <div class="box-wrap col-md-12 col-lg-4">

                                        <div class="box-item">

                                              <div class="item-icon">

                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g><g><rect x="15.967" y="16.145" transform="matrix(0.9999 -0.0164 0.0164 0.9999 -0.3892 0.3964)" width="16.017" height="15.574"/></g></g><g><g><rect x="287.991" y="16.164" width="16.612" height="15.574"/></g></g><g><g><path d="M254.639,16.014C251.406,6.704,242.551,0,232.154,0c-13.125,0-23.801,10.677-23.801,23.801s10.676,23.801,23.801,23.801    c10.397,0,19.252-6.704,22.485-16.014h9.761v128.33c0,57.516-46.792,104.309-104.309,104.309    c-57.516,0-104.309-46.793-104.309-104.309V31.588h9.762c3.233,9.31,12.088,16.014,22.485,16.014    c13.123,0,23.8-10.677,23.8-23.801C111.83,10.677,101.153,0,88.03,0C77.632,0,68.778,6.704,65.544,16.014H40.209v143.904    c0,63.377,49.436,115.416,111.77,119.603v16.971h15.574v-16.93c62.641-3.866,112.421-56.047,112.421-119.644V16.014H254.639z     M232.154,32.028c-4.536,0-8.227-3.691-8.227-8.227s3.691-8.227,8.227-8.227s8.227,3.691,8.227,8.227    S236.69,32.028,232.154,32.028z M88.03,15.574c4.536,0,8.226,3.691,8.226,8.227s-3.69,8.227-8.226,8.227s-8.227-3.691-8.227-8.227    S83.494,15.574,88.03,15.574z"/></g></g><g><g><rect x="151.98" y="303.762" width="15.574" height="56.066"/></g></g><g><g><path d="M448.339,56.048c-26.367,0-47.821,21.452-47.821,47.822c0,23.738,17.389,43.483,40.095,47.189v217.039    c0,17.781-14.438,32.247-32.186,32.247c-17.748,0-32.186-14.466-32.186-32.247v-48.042c0-26.369-21.425-47.821-47.76-47.821    c-26.334,0-47.76,21.452-47.76,47.821v120.103c0,31.026-25.383,56.268-56.585,56.268s-56.585-25.242-56.585-56.268v-72.027    h-15.574v72.027c0,39.614,32.371,71.842,72.159,71.842s72.159-32.228,72.159-71.842V320.055c0-17.781,14.438-32.247,32.186-32.247    c17.748,0,32.186,14.466,32.186,32.247v48.042c0,26.369,21.425,47.821,47.76,47.821c26.334,0,47.76-21.452,47.76-47.821V151.036    c22.646-3.756,39.973-23.471,39.973-47.166C496.159,77.5,474.707,56.048,448.339,56.048z M448.339,136.117    c-17.781,0-32.247-14.466-32.247-32.247c0-17.782,14.466-32.248,32.247-32.248s32.248,14.466,32.248,32.248    C480.586,121.651,466.12,136.117,448.339,136.117z"/></g></g><g><g><path d="M448.339,80.069c-13.125,0-23.801,10.677-23.801,23.801c0,13.124,10.676,23.801,23.801,23.801    s23.801-10.677,23.801-23.801C472.139,90.746,461.463,80.069,448.339,80.069z M448.339,112.096c-4.536,0-8.227-3.691-8.227-8.227    c0-4.536,3.691-8.227,8.227-8.227s8.227,3.691,8.227,8.227C456.566,108.406,452.875,112.096,448.339,112.096z"/></g></g></svg>

                                            </div>

                                            <p class="item-text">

                                                Cancer treatment, Organ transplantation, Cosmetic surgeries, Orthopedic, surgeries e.g. joint replacement & congenital anomalies, Cardiac surgeries, Congenital anomalies, Dental services, Psychiatry services, Alternative medicine.

                                            </p>

                                        </div>

                                    </div>
                                    <div class="box-wrap">

                                        <div class="box-item">

                                            <div class="item-icon">

                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="97.301px" height="97.302px" viewBox="0 0 97.301 97.302" style="enable-background:new 0 0 97.301 97.302;" xml:space="preserve"><g><g><path d="M51.583,45.473c-10.849,2.372-16.271-2.68-16.553-2.95c-1.37-1.367-3.587-1.379-4.97-0.021    c-1.393,1.366-1.414,3.604-0.048,4.996c0.271,0.276,5.706,5.671,16.019,5.671c2.144,0,4.499-0.231,7.062-0.793    c1.906-0.417,3.112-2.302,2.695-4.206C55.372,46.263,53.488,45.058,51.583,45.473z"/><circle cx="19.542" cy="36.266" r="7.948"/><path d="M93.032,68.812l-14.885-6.012c-0.516-0.207-1.066-0.314-1.621-0.314h-3.793v-0.824c0-0.422-0.109-0.814-0.291-1.165    l14.032,3.829c0.371,0.101,0.744,0.15,1.111,0.15c1.85,0,3.545-1.23,4.056-3.102c0.612-2.242-0.709-4.557-2.951-5.167    l-18.484-5.046c-0.367-0.1-0.728-0.1-1.13-0.098l-12.601,0.012c-0.587,1.387-1.812,2.48-3.391,2.826    c-2.079,0.455-4.195,0.686-6.292,0.686c-10.229,0-17.198-5.469-17.489-5.702c-1.002-0.799-1.634-1.941-1.777-3.215    c-0.145-1.275,0.216-2.53,1.017-3.534c0.916-1.15,2.286-1.809,3.757-1.809c1.074,0,2.131,0.367,2.976,1.034    c0.142,0.11,2.877,2.199,7.226,3.151l-7.761-5.004c-2.736-1.766-6.12-0.547-8.106,1.332c0,0-0.664,0.567-1.13,1.326    c-0.446,0.726-0.794,1.631-0.794,1.631L24.7,43.819c-0.899,2.602-0.61,6.175,2.136,7.947l14.744,9.508    c0.175,0.113,0.354,0.215,0.532,0.305c0,0.027-0.008,0.055-0.008,0.082v0.824h-4.193l-19.614-13.61    c0.097-0.106,0.19-0.22,0.27-0.347c0.72-1.15,0.371-2.667-0.78-3.389l-6.677-4.182c-1.121-0.703-2.584-0.384-3.327,0.698    c-1.888-0.923-4.214-0.372-5.449,1.407c-1.363,1.964-0.876,4.662,1.089,6.025l30.665,21.285c0.724,0.504,1.586,0.772,2.468,0.772    h5.717c0.364,0.981,1.302,1.684,2.407,1.684h5.439V93.15H47.47c-1.146,0-2.074,0.93-2.074,2.076s0.929,2.075,2.074,2.075h20.232    c1.146,0,2.075-0.929,2.075-2.075s-0.93-2.076-2.075-2.076h-2.983V72.828h5.438c1.106,0,2.043-0.702,2.408-1.684h3.119    l14.105,5.697c0.53,0.215,1.079,0.316,1.618,0.316c1.716,0,3.336-1.024,4.017-2.709C96.32,72.23,95.25,69.708,93.032,68.812z"/><path d="M37.083,37.846c7.871,0,12.233-2.105,15.077-4.597v5.456c-0.254,1.096-0.72,3.132-1.27,5.574    c0.211-0.042,0.419-0.076,0.63-0.122c0.342-0.075,0.688-0.112,1.033-0.112c2.246,0,4.227,1.594,4.708,3.791    c0.14,0.643,0.144,1.283,0.032,1.893l11.989-0.06c0.527,0,0.989,0.062,1.475,0.192l1.756,0.48    c-0.998-4.874-2.133-9.672-2.601-11.613v-6.485c1.287,2.681,2.091,6.522,2.009,12.41c-0.026,1.858,1.46,3.387,3.318,3.413    c0.018,0,0.032,0,0.049,0c1.837,0,3.34-1.476,3.363-3.319c0.225-16.004-7.793-23.512-15.5-26.364    c-0.008-0.002-0.016-0.002-0.021-0.004l-2.097,2.199l-2.159-2.175c-1.202,0.295-2.378,0.833-3.404,1.565    c-0.029,0.016-2.987,2.183-5.058,5.072c-2.41,3.259-4.491,6.072-13.332,6.072c-1.858,0-3.366,1.508-3.366,3.367    C33.716,36.339,35.224,37.846,37.083,37.846z"/><path d="M61.164,17.722c4.487,0,8.128-3.638,8.128-8.127c0-1.877-0.651-3.592-1.725-4.965h-2.628V3.397h1.444    c-0.506-0.425-1.056-0.799-1.654-1.092C64.113,0.949,62.75,0,61.166,0c-1.582,0-2.941,0.947-3.562,2.302    c-0.601,0.293-1.152,0.669-1.659,1.095h1.65V4.63H54.76c-1.068,1.373-1.722,3.088-1.722,4.965    C53.04,14.084,56.676,17.722,61.164,17.722z M61.166,1.714c1.219,0,2.208,0.99,2.208,2.208S62.384,6.13,61.166,6.13    c-1.217,0-2.206-0.99-2.206-2.208S59.949,1.714,61.166,1.714z"/></g></g></svg>

                                            </div>
                                            <p class="item-text">

                                                Physiotherapy, Rehabilitation.
                                            </p>

                                        </div>

                                    </div>
                                    <div class="box-wrap">

                                        <div class="box-item">

                                            <div class="item-icon">

                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g><g><path d="M384,221.091h-62.836l-27.927-62.836c-2.327-4.655-5.818-6.982-10.473-6.982c-4.655,0-9.309,2.327-10.473,6.982    l-51.2,116.364l-22.109-46.545c-2.327-3.491-5.818-6.982-10.473-6.982H128c-6.982,0-11.636,4.655-11.636,11.636    s4.655,11.636,11.636,11.636h52.364l30.255,62.836c2.327,3.491,5.818,6.982,10.473,6.982s8.145-2.327,10.473-6.982l51.2-115.2    l20.945,46.545c1.164,3.491,5.818,5.818,10.473,5.818H384c6.982,0,11.636-4.655,11.636-11.636S390.982,221.091,384,221.091z"/></g></g><g><g><path d="M407.273,34.909h-69.818c0-6.982-4.655-11.636-11.636-11.636h-29.091c-4.655,0-8.145-2.327-9.309-4.655    C280.436,6.982,268.8,0,256,0s-24.436,6.982-30.255,18.618c-2.327,2.327-5.818,4.655-10.473,4.655h-29.091    c-6.982,0-11.636,4.655-11.636,11.636v58.182c0,6.982,4.655,11.636,11.636,11.636h139.636c6.982,0,11.636-4.655,11.636-11.636    c0-6.982-4.655-11.636-11.636-11.636h-128V46.545h17.455c12.8,0,24.436-6.982,30.255-17.455c4.655-8.145,16.291-6.982,20.945,0    c5.818,10.473,17.455,17.455,30.255,17.455h17.455c0,6.982,4.655,11.636,11.636,11.636h81.455c6.982,0,11.636,4.655,11.636,11.636    v407.273c0,6.982-4.655,11.636-11.636,11.636H104.727c-6.982,0-11.636-4.655-11.636-11.636V69.818    c0-6.982,4.655-11.636,11.636-11.636H128c6.982,0,11.636-4.655,11.636-11.636S134.982,34.909,128,34.909h-23.273    c-19.782,0-34.909,15.127-34.909,34.909v407.273c0,19.782,15.127,34.909,34.909,34.909h302.545    c19.782,0,34.909-15.127,34.909-34.909V69.818C442.182,50.036,427.055,34.909,407.273,34.909z"/></g></g><g><g><path d="M279.273,372.364H128c-6.982,0-11.636,4.655-11.636,11.636s4.655,11.636,11.636,11.636h151.273    c6.982,0,11.636-4.655,11.636-11.636S286.255,372.364,279.273,372.364z"/></g></g><g><g><path d="M209.455,418.909H128c-6.982,0-11.636,4.655-11.636,11.636s4.655,11.636,11.636,11.636h81.455    c6.982,0,11.636-4.655,11.636-11.636S216.436,418.909,209.455,418.909z"/></g></g></svg>


                                            </div>
                                            <p class="item-text">

                                               Executive periodic exams.
                                            </p>

                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="texts-list-wrap">

                                <ul class="texts-list">

                                    <li class="list-item">Impound services to help non-Saudi patients to get treatment in Saudi hospitals.</li>
                                    <li class="list-item">In kingdom appointment Services for criticize and residents. This includes guidance on center of excellence.</li>
                                    <li class="list-item">Telemedicine for patients in and out of Kingdome.</li>
                                    <li class="list-item">Home Health Care coordination for selected patients.</li>
                                    <li class="list-item">Medication Delivery, Laboratory Samples collection.</li>
                                    <li class="list-item">VIP family medicine executive services including arranging annual executive health exams in or out of Kingdome.</li>
                                    <li class="list-item">Patient education.</li>
                                    <li class="list-item">Insurance brokerage.</li>

                                </ul>

                            </div>

                        </div>
                        <div class="service-desc-wrap" id="brokage">

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

                        </div>


                    </div>

                </div>

            </div>

        </section>

        <!-- ***** services-details-section End ***** -->


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

@endsection

@section('script')


@endsection
