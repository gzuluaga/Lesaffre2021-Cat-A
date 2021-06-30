@extends('frontend.layout.index')

@section('content')
<!-- Slider area Start -->
    <main class="main-content-wrapper">
            <section class="homepage-slider mb--11pt5" >
                <div class="element-carousel slick-right-bottom" data-slick-options='{
                    "slidesToShow": 1, 
                    "dots": true
                }'>
                    <div class="item">
                        <div class="single-slide d-flex align-items-center bg-image"
                            data-bg-image="assets/img/slider/splash.png">
                            <div class="container">
                                <div class="row align-items-center no-gutters w-100">
                                    <div class="col-lg-6 col-md-8">
                                        <div class="slider-content">
                                            <div class="slider-content__text mb--95 md-lg--80 mb-md--40 mb-sm--15">
                                                <h3 class="text-uppercase font-weight-light" data-animation="fadeInUp"
                                                    data-duration=".3s" data-delay=".3s">Este año cuanto más <br> aprendas más cerca <br> vas a estar de ganar</h3>
                                            </div>
                                            <div class="slider-content__btn">
                                                <a href="{{ URL::to('loginview') }}" class="css-button" data-animation="fadeInUp">EMPEZÁ</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 offset-lg-2 col-md-4">
                                        <figure class="slider-image d-none d-md-block">
                                            <img src="{{ asset('assets/img/slider/logo_slider.png')}}" alt="Slider Image">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Slider area End -->
            
            <!-- 3 box area Start -->
            <section class="method-area mb--11pt5">
                <div class="container">                    
                <div class="row" >
                        <div class="col-md-4 mb-sm--50">
                            <div class="text-align-center" style="max-width:50%;width:auto;height:auto;">
                                <a href="{{ URL::to('objetivos') }}" >
                                    <img src="{{ asset('assets/img/brand/objetivos.png')}}" alt="Eventos">
                                    <div class="product__overlay"></div>
                                    <div class="btn-link" data-animation="fadeInUp"
                                    data-duration=".3s" data-delay=".6s">OBJETIVOS</div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-4 mb-sm--50">
                            <div class="text-align-center" style="max-width:50%;width:auto;height:auto;">
                                <a href="{{ URL::to('productos') }}" >
                                    <img src="{{ asset('assets/img/brand/productos.png')}}" alt="Eventos">
                                    <div class="product__overlay"></div>
                                    <div class="btn-link" data-animation="fadeInUp"
                                    data-duration=".3s" data-delay=".6s">PRODUCTOS</div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-4 mb-sm--50">
                            <div class="text-align-center" style="max-width:50%;width:auto;height:auto;">
                                <a href="{{ URL::to('premios') }}" >
                                    <img src="{{ asset('assets/img/brand/premios.png')}}" alt="Eventos">
                                    <div class="product__overlay"></div>
                                    <div class="btn-link" data-animation="fadeInUp"
                                    data-duration=".3s" data-delay=".6s">PREMIOS</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-md-4 mb-sm--50">
                            <div class="text-align-center" style="max-width:50%;width:auto;height:auto;">
                                <a href="{{ URL::to('receta') }}" >
                                    <img src="{{ asset('assets/img/brand/recetas.png')}}" alt="Eventos">
                                    <div class="product__overlay"></div>
                                    <div class="btn-link" data-animation="fadeInUp"
                                    data-duration=".3s" data-delay=".6s">RECETA</div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-4 mb-sm--50">
                            <div class="text-align-center" style="max-width:50%;width:auto;height:auto;">
                                <a href="{{ URL::to('aprende') }}" >
                                    <img src="{{ asset('assets/img/brand/aprende.png')}}" alt="Eventos">
                                    <div class="product__overlay"></div>
                                    <div class="btn-link" data-animation="fadeInUp"
                                    data-duration=".3s" data-delay=".6s">APRENDE</div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-4 mb-sm--50">
                            <div class="text-align-center" style="max-width:50%;width:auto;height:auto;">
                                <a href="{{ URL::to('tiempos') }}" >
                                    <img src="{{ asset('assets/img/brand/tiempos.png')}}" alt="Eventos">
                                    <div class="product__overlay"></div>
                                    <div class="btn-link" data-animation="fadeInUp"
                                    data-duration=".3s" data-delay=".6s">TIEMPOS</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- 3 box area End -->
</main>
@endsection