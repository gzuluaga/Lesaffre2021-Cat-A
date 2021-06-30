@extends('frontend.layout.index')

@section('content')
<!-- Tittle area Start -->

    <div style="margin-top: 3%">
       
        <div class="paralelogramo">Receta</div>
    </div>       
<!-- Tittle area End -->

<!-- Main Wrapper Start -->
<div class="wrapper">
    <!-- Main Content Wrapper Start -->
    <main class="main-content-wrapper">
        <!-- Slider area Start -->
        <section class="homepage-slider">
            <div class="element-carousel slick-right-bottom" data-slick-options='{
                "slidesToShow": 1, 
                "dots": true
            }'>
                <div class="item" >
                    <div class="single-slide d-flex align-items-center bg-image"
                        data-bg-image="assets/img/slider/splash.png">
                        <div class="container">
                            <div class="row align-items-center no-gutters w-100">                                    
                                <figure class="slider-image">
                                    <img src="assets/img/receta/receta_A.png">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Slider area End -->          
    </main>
    <!-- Main Content Wrapper End -->
</div>
<!-- Main Wrapper End -->
@endsection