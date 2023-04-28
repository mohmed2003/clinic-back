
@extends('front.parent')

@section('title','طاقمنا')

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

                    <a class="navbar-link active hvr-underline-from-left" href="{{route('view.staff_ar')}}"> فريق العمل </a>

                </li>
                <li class="menu-item">

                    <a class="lang-btn" href="{{route('view.staff')}}">

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
                    <li class="breadcrumb-item active" aria-current="page"> فريق العمل </li>

                  </ol>

                </nav>

            </div>



        </section>

        <!-- ***** breadcrumb-section End ***** -->


        <!-- ***** staff-section Start ***** -->

        <section class="section-style staff-section staff-page">

            <div class="container">

                <div class="title-wrap mb-box mb-sm-5">

                        <h1 class="main-title mb-3">قابل متخصصينا</h1>
                        <p class="subject-text">

                            تهدف الشركة إلى تقديم الخدمات للمرضى والقطاع الصحي بعدة طرق ، وكل ذلك يعتمد على مهارات الخبراء الطبيين والإداريين ، وخبراتهم الغنية في الجودة والتواصل في مجالات عمل الشركة.
                        </p>

                    </div>

                <div class="staff-area staff-wrapper">

                    <div class="row row-cols-lg-3 row-cols-md-2 ">

                        <div class="staff-wrap">

                             <div class="staff-box padding-box">

                                <div class="staff-img">

                                    <img class="img-fluid "src="img/person.png" alt="staffName">

                                </div>
                                <div class="staff-details">

                                    <div class="staff-info">

                                        <h5 class="staff-name">د.محمد السالم</h5>
                                        <p class="staff-position">طبيب عام</p>

                                    </div>
                                    <p class="staff-desc">

                                        طبيب مبدع ذو خبرة وكفاءة عالية يعمل مع فريق وكادر خبير يقدم العديد من الخدمات الطبية
                                        والنصائح والتوجيهات التي تفيد مراجعينا

                                    </p>

                                </div>
                                <a class="contact-btn hvr-underline-from-left " href="#">تواصل</a>

                            </div>

                        </div>
                        <div class="staff-wrap">

                             <div class="staff-box padding-box">

                                <div class="staff-img">

                                    <img class="img-fluid "src="img/person.png" alt="staffName">

                                </div>
                                <div class="staff-details">

                                    <div class="staff-info">

                                        <h5 class="staff-name">د.محمد السالم</h5>
                                        <p class="staff-position">طبيب عام</p>

                                    </div>
                                    <p class="staff-desc">

                                        طبيب مبدع ذو خبرة وكفاءة عالية يعمل مع فريق وكادر خبير يقدم العديد من الخدمات الطبية
                                        والنصائح والتوجيهات التي تفيد مراجعينا

                                    </p>

                                </div>
                                <a class="contact-btn hvr-underline-from-left " href="#">تواصل</a>

                            </div>

                        </div>
                        <div class="staff-wrap">

                             <div class="staff-box padding-box">

                                <div class="staff-img">

                                    <img class="img-fluid "src="img/person.png" alt="staffName">

                                </div>
                                <div class="staff-details">

                                    <div class="staff-info">

                                        <h5 class="staff-name">د.محمد السالم</h5>
                                        <p class="staff-position">طبيب عام</p>

                                    </div>
                                    <p class="staff-desc">

                                        طبيب مبدع ذو خبرة وكفاءة عالية يعمل مع فريق وكادر خبير يقدم العديد من الخدمات الطبية
                                        والنصائح والتوجيهات التي تفيد مراجعينا

                                    </p>

                                </div>
                                <a class="contact-btn hvr-underline-from-left " href="#">تواصل</a>

                            </div>

                        </div>
                        <div class="staff-wrap">

                             <div class="staff-box padding-box">

                                <div class="staff-img">

                                    <img class="img-fluid "src="img/person.png" alt="staffName">

                                </div>
                                <div class="staff-details">

                                    <div class="staff-info">

                                        <h5 class="staff-name">د.محمد السالم</h5>
                                        <p class="staff-position">طبيب عام</p>

                                    </div>
                                    <p class="staff-desc">

                                        طبيب مبدع ذو خبرة وكفاءة عالية يعمل مع فريق وكادر خبير يقدم العديد من الخدمات الطبية
                                        والنصائح والتوجيهات التي تفيد مراجعينا

                                    </p>

                                </div>
                                <a class="contact-btn hvr-underline-from-left " href="#">تواصل</a>

                            </div>

                        </div>
                        <div class="staff-wrap">

                             <div class="staff-box padding-box">

                                <div class="staff-img">

                                    <img class="img-fluid "src="img/person.png" alt="staffName">

                                </div>
                                <div class="staff-details">

                                    <div class="staff-info">

                                        <h5 class="staff-name">د.محمد السالم</h5>
                                        <p class="staff-position">طبيب عام</p>

                                    </div>
                                    <p class="staff-desc">

                                        طبيب مبدع ذو خبرة وكفاءة عالية يعمل مع فريق وكادر خبير يقدم العديد من الخدمات الطبية
                                        والنصائح والتوجيهات التي تفيد مراجعينا

                                    </p>

                                </div>
                                <a class="contact-btn hvr-underline-from-left " href="#">تواصل</a>

                            </div>

                        </div>
                        <div class="staff-wrap">

                             <div class="staff-box padding-box">

                                <div class="staff-img">

                                    <img class="img-fluid "src="img/person.png" alt="staffName">

                                </div>
                                <div class="staff-details">

                                    <div class="staff-info">

                                        <h5 class="staff-name">د.محمد السالم</h5>
                                        <p class="staff-position">طبيب عام</p>

                                    </div>
                                    <p class="staff-desc">

                                        طبيب مبدع ذو خبرة وكفاءة عالية يعمل مع فريق وكادر خبير يقدم العديد من الخدمات الطبية
                                        والنصائح والتوجيهات التي تفيد مراجعينا

                                    </p>

                                </div>
                                <a class="contact-btn hvr-underline-from-left " href="#">تواصل</a>

                            </div>

                        </div>


                    </div>

                    <div class="bootstarp-pagination">

                        <nav aria-label="table-Pagination">
                          <ul class="pagination">
                            <li class="page-item disabled">
                              <a class="page-link " href="#" aria-label="Previous">
                                <span aria-hidden="true">«</span>
                              </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>

                            <li class="page-item">
                              <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">»</span>
                              </a>
                            </li>
                          </ul>
                        </nav>
                    </div>

                </div>

            </div>

        </section>

        <!-- ***** staff-section End ***** -->

                <!-- ***** staff-section Start ***** -->

                <section class="section-style staff-section staff-page">

                    <div class="container">

                        <div class="title-wrap mb-box mb-sm-5">

                                <h1 class="main-title mb-3">الأطباء المتعاونون</h1>
                                <p class="subject-text">

                                    تهدف الشركة إلى تقديم الخدمات للمرضى والقطاع الصحي بعدة طرق ، وكل ذلك يعتمد على مهارات الخبراء الطبيين والإداريين ، وخبراتهم الغنية في الجودة والتواصل في مجالات عمل الشركة.
                                </p>

                            </div>

                        <div class="staff-area staff-wrapper">

                            <div class="row row-cols-lg-3 row-cols-md-2 ">

                                <div class="staff-wrap">

                                     <div class="staff-box padding-box">

                                        <div class="staff-img">

                                            <img class="img-fluid "src="img/person.png" alt="staffName">

                                        </div>
                                        <div class="staff-details">

                                            <div class="staff-info">

                                                <h5 class="staff-name">د.محمد السالم</h5>
                                                <p class="staff-position">طبيب عام</p>

                                            </div>
                                            <p class="staff-desc">

                                                طبيب مبدع ذو خبرة وكفاءة عالية يعمل مع فريق وكادر خبير يقدم العديد من الخدمات الطبية
                                                والنصائح والتوجيهات التي تفيد مراجعينا

                                            </p>

                                        </div>
                                        <a class="contact-btn hvr-underline-from-left " href="#">تواصل</a>

                                    </div>

                                </div>
                                <div class="staff-wrap">

                                     <div class="staff-box padding-box">

                                        <div class="staff-img">

                                            <img class="img-fluid "src="img/person.png" alt="staffName">

                                        </div>
                                        <div class="staff-details">

                                            <div class="staff-info">

                                                <h5 class="staff-name">د.محمد السالم</h5>
                                                <p class="staff-position">طبيب عام</p>

                                            </div>
                                            <p class="staff-desc">

                                                طبيب مبدع ذو خبرة وكفاءة عالية يعمل مع فريق وكادر خبير يقدم العديد من الخدمات الطبية
                                                والنصائح والتوجيهات التي تفيد مراجعينا

                                            </p>

                                        </div>
                                        <a class="contact-btn hvr-underline-from-left " href="#">تواصل</a>

                                    </div>

                                </div>
                                <div class="staff-wrap">

                                     <div class="staff-box padding-box">

                                        <div class="staff-img">

                                            <img class="img-fluid "src="img/person.png" alt="staffName">

                                        </div>
                                        <div class="staff-details">

                                            <div class="staff-info">

                                                <h5 class="staff-name">د.محمد السالم</h5>
                                                <p class="staff-position">طبيب عام</p>

                                            </div>
                                            <p class="staff-desc">

                                                طبيب مبدع ذو خبرة وكفاءة عالية يعمل مع فريق وكادر خبير يقدم العديد من الخدمات الطبية
                                                والنصائح والتوجيهات التي تفيد مراجعينا

                                            </p>

                                        </div>
                                        <a class="contact-btn hvr-underline-from-left " href="#">تواصل</a>

                                    </div>

                                </div>
                                <div class="staff-wrap">

                                     <div class="staff-box padding-box">

                                        <div class="staff-img">

                                            <img class="img-fluid "src="img/person.png" alt="staffName">

                                        </div>
                                        <div class="staff-details">

                                            <div class="staff-info">

                                                <h5 class="staff-name">د.محمد السالم</h5>
                                                <p class="staff-position">طبيب عام</p>

                                            </div>
                                            <p class="staff-desc">

                                                طبيب مبدع ذو خبرة وكفاءة عالية يعمل مع فريق وكادر خبير يقدم العديد من الخدمات الطبية
                                                والنصائح والتوجيهات التي تفيد مراجعينا

                                            </p>

                                        </div>
                                        <a class="contact-btn hvr-underline-from-left " href="#">تواصل</a>

                                    </div>

                                </div>
                                <div class="staff-wrap">

                                     <div class="staff-box padding-box">

                                        <div class="staff-img">

                                            <img class="img-fluid "src="img/person.png" alt="staffName">

                                        </div>
                                        <div class="staff-details">

                                            <div class="staff-info">

                                                <h5 class="staff-name">د.محمد السالم</h5>
                                                <p class="staff-position">طبيب عام</p>

                                            </div>
                                            <p class="staff-desc">

                                                طبيب مبدع ذو خبرة وكفاءة عالية يعمل مع فريق وكادر خبير يقدم العديد من الخدمات الطبية
                                                والنصائح والتوجيهات التي تفيد مراجعينا

                                            </p>

                                        </div>
                                        <a class="contact-btn hvr-underline-from-left " href="#">تواصل</a>

                                    </div>

                                </div>
                                <div class="staff-wrap">

                                     <div class="staff-box padding-box">

                                        <div class="staff-img">

                                            <img class="img-fluid "src="img/person.png" alt="staffName">

                                        </div>
                                        <div class="staff-details">

                                            <div class="staff-info">

                                                <h5 class="staff-name">د.محمد السالم</h5>
                                                <p class="staff-position">طبيب عام</p>

                                            </div>
                                            <p class="staff-desc">

                                                طبيب مبدع ذو خبرة وكفاءة عالية يعمل مع فريق وكادر خبير يقدم العديد من الخدمات الطبية
                                                والنصائح والتوجيهات التي تفيد مراجعينا

                                            </p>

                                        </div>
                                        <a class="contact-btn hvr-underline-from-left " href="#">تواصل</a>

                                    </div>

                                </div>


                            </div>


                        </div>

                    </div>

                </section>

                <!-- ***** staff-section End ***** -->
                <!-- ***** hospitals-section start ***** -->
                <section class="section-style hospitals-section staff-page">
                    <div class="container">
                        <div class="title-wrap mb-box mb-sm-5">

                            <h1 class="main-title mb-3">المستشفيات الخارجية</h1>
                            <p class="subject-text">

                                تهدف الشركة إلى تقديم الخدمات للمرضى والقطاع الصحي بعدة طرق ، وكل ذلك يعتمد على مهارات الخبراء الطبيين والإداريين ، وخبراتهم الغنية في الجودة والتواصل في مجالات عمل الشركة.
                            </p>

                        </div>
                 <div class="row row-cols-xl-4 row-cols-md-2 row-cols-1">

                    <a href="#"><div class="service-wrap">

                        <div class="service-box">

                            <div class="service-icon">

                                <i class="fa-solid fa-hospital"></i>
                            </div>
                            <p class="service-desc">New York-Presbyterian in America</p>

                        </div>
                    </div></a>
                    <a href="#"><div class="service-wrap">

                        <div class="service-box">

                            <div class="service-icon">

                                <i class="fa-solid fa-hospital"></i>
                            </div>
                            <p class="service-desc">Brigham and Women's in America</p>

                        </div>
                    </div></a>
                    <a href="#"><div class="service-wrap">

                        <div class="service-box">

                            <div class="service-icon">

                                <i class="fa-solid fa-hospital"></i>

                            </div>
                            <p class="service-desc">Cleveland Clinic in America</p>

                        </div>
                    </div></a>
                    <a href="#"><div class="service-wrap">

                        <div class="service-box">

                            <div class="service-icon">

                                <i class="fa-solid fa-hospital"></i>
                            </div>
                            <p class="service-desc">Charité Hospital in France</p>

                        </div>
                    </div></a>

                    </div>
                    </div>
                </section>
                <!-- ***** hospitals-section End ***** -->



                @endsection

                @section('scripts')


                @endsection
