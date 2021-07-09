@extends('frontend.layout.index')

@section('content')
<div>    
    <div class="paralelogramo" style="margin-bottom: 0% !important;">Receta</div>
</div>       

<!-- Main Wrapper Start -->
<div class="wrapper">
    <!-- Main Content Wrapper Start -->
    <main class="main-content-wrapper">
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
    </main>
    <!-- Main Content Wrapper End -->
</div>
<!-- Main Wrapper End -->
@endsection