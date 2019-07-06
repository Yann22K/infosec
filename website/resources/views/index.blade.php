@extends('layouts.mainlayout')
@section('title', 'Réservation de salles')
@section('main')
<!-- Background Area Start -->
<section id="slider-container" class="slider-area"> 
    <div class="slider-owl owl-theme owl-carousel"> 
        <!-- Start Slingle Slide -->
        <div class="single-slide item" style="background-image: url(asset/img/slider/slider1.jpg)">
        <!-- Start Slider Content -->
            <div class="slider-content-area">  
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-md-offset-left-5"> 
                            <div class="slide-content-wrapper">
                                <div class="slide-content">
                                    <h3>Trouvez vos salles pour vos événements </h3>
                                    <h2></h2>
                                    <p>I must explain to you how all this mistaken idea of denouncing pleasure and prsing pain was born and I will give you a complete account of the system  </p>
                                    <a class="default-btn" href="about.html">Learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Start Slider Content -->
        </div><!-- End Slingle Slide -->
        <!-- Start Slingle Slide -->
        <div class="single-slide item" style="background-image: url(asset/img/slider/slider2.jpg)">
        <!-- Start Slider Content -->
            <div class="slider-content-area">   
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-md-offset-left-5"> 
                            <div class="slide-content-wrapper text-left">
                                <div class="slide-content">
                                    <h3>EDUCATION MAKES </h3>
                                    <h2>PROPER HUMANITY </h2>
                                    <p>I must explain to you how all this mistaken idea of denouncing pleasure and prsing pain was born and I will give you a complete account of the system  </p>
                                    <a class="default-btn" href="about.html">Learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Start Slider Content -->
        </div><!-- End Slingle Slide -->
        <!-- Start Slingle Slide -->
        <div class="single-slide item" style="background-image: url(asset/img/sslider/slider3.jpg)">
            <!-- Start Slider Content -->
            <div class="slider-content-area">  
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-md-offset-left-5"> 
                            <div class="slide-content-wrapper">
                                <div class="slide-content">
                                    <h3>EDUCATION MAKES </h3>
                                    <h2>PROPER HUMANITY </h2>
                                    <p>I must explain to you how all this mistaken idea of denouncing pleasure and prsing pain was born and I will give you a complete account of the system  </p>
                                    <a class="default-btn" href="about.html">Learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Start Slider Content -->
        </div><!-- End Slingle Slide -->								
    </div>
</section>
<!-- Courses Area Start -->
<div class="courses-area pt-150 text-center">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-title">
                    <img src="asset/img/icon/section.png" alt="section-title">
                    <h2>Nos Salles</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-course">
                    <div class="course-img">
                        <a href="course-details.html"><img src="asset/img/salles/salle1.jpg" alt="course">
                            <div class="course-hover">
                                <i class="fa fa-link"></i>
                            </div>
                        </a>
                    </div>
                    <div class="course-content">
                        <h3><a href="course-details.html">CSE ENGINEERING</a></h3>
                        <p>I must explain to you how all this a mistaken idea of denouncing great explorer of the rut the is lder of human happiness</p>
                        <a class="default-btn" href="/details">Lire plus</a>
                    </div>   
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-course">
                    <div class="course-img">
                        <a href="course-details.html"><img src="asset/img/salles/salle2.jpg" alt="course">
                            <div class="course-hover">
                                <i class="fa fa-link"></i>
                            </div>
                        </a>
                    </div>
                    <div class="course-content">
                        <h3><a href="course-details.html">CSE ENGINEERING</a></h3>
                        <p>I must explain to you how all this a mistaken idea of denouncing great explorer of the rut the is lder of human happiness</p>
                        <a class="default-btn" href="/details">Lire plus</a>
                    </div>   
                </div>
            </div>
            <div class="col-md-4 hidden-sm col-xs-12">
                <div class="single-course">
                    <div class="course-img">
                        <a href="course-details.html"><img src="asset/img/salles/salle3.jpg" alt="course">
                            <div class="course-hover">
                                <i class="fa fa-link"></i>
                            </div>
                        </a>
                    </div>
                    <div class="course-content">
                        <h3><a href="course-details.html">CSE ENGINEERING</a></h3>
                        <p>I must explain to you how all this a mistaken idea of denouncing great explorer of the rut the is lder of human happiness</p>
                        <a class="default-btn" href="/details">Lire plus</a>
                    </div>   
                </div>
            </div>
        </div>
    </div>
</div><!-- Courses Area End -->
@endsection