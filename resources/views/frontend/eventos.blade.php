@extends('frontend.layout.index')

@section('content')
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
                            <h4>Eventos</h4>
                            @foreach ($eventos as $evento)
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-xs-12 col-lg-12" id="bloque">
                                    <b>Fecha del Evento:</b> {{ $evento->start }} <br>
                                    <b>Fecha de Cierre:</b> {{ $evento->end }} <br>
                                    <b>Evento:</b> {{ $evento->title }} <br>
                                    <b>Enlace de conexión:</b> <a href="{{ $evento->enlace }}" target="_blank" style="color:#FFFFFF"> {{ $evento->enlace }}</a>
                                </div>
                            </div>
                            <div style="margin-top: 2%;"></div>
                            @endforeach
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </section>
    </main>
    <!-- Main Content Wrapper End -->
</div>

@endsection