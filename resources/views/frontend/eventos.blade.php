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
                            <h3>Eventos Lesaffre 2021</h3>
                            <br>
                            <br>
                            @foreach ($eventos as $evento)
                            <div class="row" style="padding-right: 10%;">
                                <div class="col-sm-12 col-md-12 col-xs-12 col-lg-12">
                                    <div class="row">
                                        <div class="col-sm-2 col-md-2 col-xs-2 col-lg-2">
                                            <center style="margin-top: 18%">
                                                <i class="far fa-calendar-check fa-8x"></i>
                                            </center>
                                        </div>
                                        <div class="col-sm-10 col-md-10 col-xs-10 col-lg-10 " id="bloque">
                                            <b>Fecha del Evento:</b> {{ $evento->start }} <br>
                                            <b>Fecha de Cierre:</b> {{ $evento->end }} <br>
                                            <b>Evento:</b> {{ $evento->title }} <br>
                                            <b>Enlace de conexión:</b> <a href="{{ $evento->enlace }}" target="_blank" style="color:#FFFFFF"> {{ $evento->enlace }}</a> <br>
                                            <b>Notas del evento:</b> {{ $evento->notas }} <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="margin-top: 5%;"></div>
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