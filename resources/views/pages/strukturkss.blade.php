@extends('layouts.app')

@section('content')
<div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner1.jpg)">
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-heading">
                        <h1 class="banner-title">Struktur KSS Group</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Company</a></li>
                                <li class="breadcrumb-item" aria-current="page">KSS Group</li>
                                <li class="breadcrumb-item active" aria-current="page">Struktur KSS Group</li>
                            </ol>
                        </nav>
                    </div>
                </div><!-- Col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </div><!-- Banner text end -->
</div><!-- Banner area end -->

<section id="main-container" class="main-container">
    <div class="container">
        <div class="row">

            <div class="col-xl-3 col-lg-4">
                <div class="sidebar sidebar-left">
                    <div class="widget">
                        <h3 class="widget-title">KSS Group</h3>
                        <ul class="nav service-menu">
                            <li><a href="{{route('about')}}">Profile</a></li>
                            <li class="active"><a href="{{route('strukturkss')}}">Struktur</a></li>
                        </ul>
                    </div><!-- Widget end -->

                    <div class="widget">


                    </div><!-- Widget end -->

                </div><!-- Sidebar end -->
            </div><!-- Sidebar Col end -->

            <div class="col-xl-8 col-lg-8">

                <div class="row justify-content-center">
                    <div class="col-lg-3 col-sm-6 mb-5">
                        <div class="ts-team-wrapper">
                            <div class="team-img-wrapper">
                                <img loading="lazy" src="images/team/team1.jpg" class="img-fluid" alt="team-img">
                            </div>
                            <div class="ts-team-content-classic">
                                <h3 class="ts-name">Nats Stenman</h3>
                                <p class="ts-designation">Chief Operating Officer</p>
                                <p class="ts-description">Nats Stenman began his career in SHIPPING with boots on the ground</p>
                                <div class="team-social-icons">
                                    <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
                                </div>
                                <!--/ social-icons-->
                            </div>
                        </div>
                        <!--/ Team wrapper 1 end -->

                    </div><!-- Col end -->

                    <div class="col-lg-3 col-sm-6 mb-5">
                        <div class="ts-team-wrapper">
                            <div class="team-img-wrapper">
                                <img loading="lazy" src="images/team/team2.jpg" class="img-fluid" alt="team-img">
                            </div>
                            <div class="ts-team-content-classic">
                                <h3 class="ts-name">ANGELA LYOUER</h3>
                                <p class="ts-designation">Innovation Officer</p>
                                <p class="ts-description">Nats Stenman began his career in SHIPPING with boots on the ground</p>
                                <div class="team-social-icons">
                                    <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="#"><i class="fab fa-google-plus"></i></a>
                                    <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
                                </div>
                                <!--/ social-icons-->
                            </div>
                        </div>
                        <!--/ Team wrapper 2 end -->
                    </div><!-- Col end -->

                </div><!-- Content row 1 end -->

                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-5">
                        <div class="ts-team-wrapper">
                            <div class="team-img-wrapper">
                                <img loading="lazy" src="images/team/team3.jpg" class="img-fluid" alt="team-img">
                            </div>
                            <div class="ts-team-content-classic">
                                <h3 class="ts-name">Mark Conter</h3>
                                <p class="ts-designation">Safety Officer</p>
                                <p class="ts-description">Nats Stenman began his career in SHIPPING with boots on the ground</p>
                                <div class="team-social-icons">
                                    <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="#"><i class="fab fa-google-plus"></i></a>
                                    <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
                                </div>
                                <!--/ social-icons-->
                            </div>
                        </div>
                        <!--/ Team wrapper 3 end -->
                    </div><!-- Col end -->

                    <div class="col-lg-3 col-md-4 col-sm-6 mb-5">
                        <div class="ts-team-wrapper">
                            <div class="team-img-wrapper">
                                <img loading="lazy" src="images/team/team4.jpg" class="img-fluid" alt="team-img">
                            </div>
                            <div class="ts-team-content-classic">
                                <h3 class="ts-name">AYESHA STEWART</h3>
                                <p class="ts-designation">Finance Officer</p>
                                <p class="ts-description">Nats Stenman began his career in SHIPPING with boots on the ground</p>
                                <div class="team-social-icons">
                                    <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
                                </div>
                                <!--/ social-icons-->
                            </div>
                        </div>
                        <!--/ Team wrapper 4 end -->

                    </div><!-- Col end -->

                    <div class="col-lg-3 col-md-4 col-sm-6 mb-5">
                        <div class="ts-team-wrapper">
                            <div class="team-img-wrapper">
                                <img loading="lazy" src="images/team/team5.jpg" class="img-fluid" alt="team-img">
                            </div>
                            <div class="ts-team-content-classic">
                                <h3 class="ts-name">Dave Clarkte</h3>
                                <p class="ts-designation">Civil Engineer</p>
                                <p class="ts-description">Nats Stenman began his career in SHIPPING with boots on the ground</p>
                                <div class="team-social-icons">
                                    <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="#"><i class="fab fa-google-plus"></i></a>
                                    <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
                                </div>
                                <!--/ social-icons-->
                            </div>
                        </div>
                        <!--/ Team wrapper 5 end -->
                    </div><!-- Col end -->

                    <div class="col-lg-3 col-md-4 col-sm-6 mb-5">
                        <div class="ts-team-wrapper">
                            <div class="team-img-wrapper">
                                <img loading="lazy" src="images/team/team6.jpg" class="img-fluid" alt="team-img">
                            </div>
                            <div class="ts-team-content-classic">
                                <h3 class="ts-name">Elton Joe</h3>
                                <p class="ts-designation">Site Supervisor</p>
                                <p class="ts-description">Nats Stenman began his career in SHIPPING with boots on the ground</p>
                                <div class="team-social-icons">
                                    <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="#"><i class="fab fa-google-plus"></i></a>
                                    <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
                                </div>
                                <!--/ social-icons-->
                            </div>
                        </div>
                        <!--/ Team wrapper 6 end -->
                    </div><!-- Col end -->
                </div><!-- Content row end -->

            </div><!-- Content Col end -->


        </div><!-- Main row end -->
    </div><!-- Conatiner end -->
</section><!-- Main container end -->

@stop

@push('script')

@endpush