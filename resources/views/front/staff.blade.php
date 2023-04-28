@extends('front.parent')

@section('title','staff')

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
                    <li class="breadcrumb-item active" aria-current="page"> {{__('app.staff')}}</li>

                  </ol>

                </nav>

            </div>



        </section>

        <!-- ***** breadcrumb-section End ***** -->


        <!-- ***** staff-section Start ***** -->

        <section class="section-style staff-section staff-page">

            <div class="container">

                <div class="title-wrap mb-box mb-sm-5">

                        <h1 class="main-title mb-3">{{__('app.our_doctors')}}</h1>
                        <p class="subject-text">

                            {{__('app.desour_doctros')}}
                        </p>

                    </div>

                <div class="staff-area staff-wrapper">

                    <div class="row row-cols-lg-3 row-cols-md-2 ">
                        @foreach ($doctorsStaff as $doctorStaff)
                        <div class="staff-wrap">

                            <div class="staff-box padding-box">

                               <div class="staff-img">

                                <img class="img-fluid  img-circle img-bordered-sm" style="border-radius:50%; border:2px solid #1b7c1e;padding:2px " src="{{asset('storage/images/doctor/'.$doctorStaff->user->image)}}" alt="staffName">

                               </div>
                               <div class="staff-details">

                                   <div class="staff-info">

                                       <h5 class="staff-name">{{$doctorStaff->user->f_name  ." ". $doctorStaff->user->l_name }}</h5>
                                       <p class="staff-position">{{$doctorStaff->spachilty->name}}</p>

                                   </div>
                                   <p class="staff-desc">

                                    {{$doctorStaff->description}}

                                   </p>

                               </div>
                               <a class="contact-btn hvr-underline-from-left " href="#">{{__('app.contactDoc')}}</a>

                           </div>

                       </div>
                        @endforeach




                    </div>

                    <div class="bootstarp-pagination">

                        <nav aria-label="table-Pagination">
                          <ul class="pagination">

                             {{$doctorsStaff->links()}}


                          </ul>
                        </nav>
                    </div>

                </div>

            </div>

        </section>

        <section class="section-style staff-section staff-page">

            <div class="container">

                <div class="title-wrap mb-box mb-sm-5">

                        <h1 class="main-title mb-3">{{__('app.co_doctors')}}</h1>
                        <p class="subject-text">

                            {{__('app.desco_doctors')}}
                        </p>

                    </div>

                    <div class="staff-area staff-wrapper">

                        <div class="row row-cols-lg-3 row-cols-md-2 ">
                            @foreach ($doctorsCo as $doctorCo)
                            <div class="staff-wrap">

                                <div class="staff-box padding-box">

                                   <div class="staff-img">

                                    <img class="img-fluid  img-circle img-bordered-sm" style="border-radius:50%; border:2px solid #1b7c1e;padding:2px " src="{{asset('storage/images/doctor/'.$doctorStaff->user->image)}}" alt="staffName">

                                   </div>
                                   <div class="staff-details">

                                       <div class="staff-info">

                                           <h5 class="staff-name">{{$doctorCo->user->f_name ." ". $doctorCo->user->l_name}}</h5>
                                           <p class="staff-position">{{$doctorCo->spachilty->name}}</p>

                                       </div>
                                       <p class="staff-desc">

                                        {{$doctorCo->description}}

                                       </p>

                                   </div>
                                   <a class="contact-btn hvr-underline-from-left " href="#">{{__('app.contactDoc')}}</a>

                               </div>

                           </div>
                            @endforeach




                        </div>

                        <div class="bootstarp-pagination">

                            <nav aria-label="table-Pagination">
                              <ul class="pagination">

                                 {{$doctorsCo->links()}}


                              </ul>
                            </nav>
                        </div>

                    </div>

            </div>

        </section>

        <!-- ***** staff-section End ***** -->

        <!-- ***** hospitals-section start ***** -->
        <section class="section-style hospitals-section staff-page">
            <div class="container">
                <div class="title-wrap mb-box mb-sm-5">

                    <h1 class="main-title mb-3">{{__('app.hospital')}}</h1>
                    <p class="subject-text">

                        {{__('app.deshospitla')}}
                    </p>

                </div>
          <div class="row row-cols-xl-4 row-cols-md-2 row-cols-1">
            @foreach ($hospitals as $hospital )
                <a href="{{$hospital->url}}" target=_blank>
                    <div class="service-wrap">

                      <div class="service-box">

                        <div class="service-icon">

                            <i class="fa-solid fa-hospital"></i>
                        </div>
                        <p class="service-desc">{{$hospital->name ." in ". $hospital->city->country->name}}</p>

                      </div>
                    </div>
                </a>
            @endforeach




            </div>
            </div>
        </section>
        <!-- ***** hospitals-section End ***** -->

        <!-- ***** contact-us-section Start ***** -->



        <!-- ***** contact-us-section End ***** -->


@endsection

@section('script')
<script>


</script>

@endsection
