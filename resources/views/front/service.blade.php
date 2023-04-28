@extends('front.parent')

@section('title','service')

@section('style')


@endsection

@section('content')


    <div class="page-wrapper">


        <section class="section-style services-details-section">



            <div class="services-details-area">

                <div class="container">

                    <div class="services-description-items">

                        <div class="service-desc-wrap" id="patient">

                            <div class="title-wrap mb-box mb-sm-5 mt-5">

                                <h1 class="main-title subject-title">{{$id .". ". $services->title}}</h1>

                            </div>

                            @if ($services->sup_titles_count>0)
                            <div class="desc-rows">

                                <div class="row row-cols-lg-3 row-cols-md-2 gx-md-5 justify-content-center ">



                                    @foreach ($services->sup_titles as $sup_title)

                                    <div class="row-wrap">

                                        <div class="row-item">

                                            <span class="desc-m">{{$sup_title->title ?? ""}}</span>
                                            <span class="desc-s">{{$sup_title->description ?? ""}}</span>

                                        </div>

                                    </div>
                                    @endforeach




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

                            @if ($services->sup_descriptions_count > 0)

                            <div class="title-wrap small mb-box mb-sm-5 mt">

                                <h1 class="main-title ">Common requested services for outbound patients:</h1>

                            </div>

                            @else

                            <div class="title-wrap small mb-box mb-sm-5">

                                <h1 class="main-title "></h1>

                            </div>

                            @endif




                        @if ($services->sup_descriptions_count > 0)


                            <div class="dec-boxes">

                                <div class="row row-cols-lg-3 row-cols-md-2">

                                    @foreach ($services->sup_descriptions as $sup_description)

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
                                    @endforeach


                                </div>
                            </div>

                        @else

                           <div></div>

                        @endif

                            <div class="texts-list-wrap">

                                <ul class="texts-list">
                                    @foreach ($services->steps as $step)

                                    <li class="list-item">{{$step->sentence}}</li>
                                    @endforeach

                                </ul>

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

                                    {{__('app.bannerflage1')}}<span>{{__('app.bannerflage2')}}</span>.

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



@endsection

@section('script')


@endsection

