@extends('frontend.layout.index')

@section('content')
<div class="wrapper">
    <div class="single-slide d-flex align-items-center bg-image" data-bg-image="assets/img/premios/beach-product-background.jpg" style="background-position: bottom !important; margin-top: 1% !important;">                    
        <main class="main-content-wrapper">
            <div class="row col-lg-12">
                <div class="paralelogramo" style="margin-bottom: 0% !important;">Aprende</div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="row align-items-center no-gutters w-100">
                        <div class="col-lg-6 col-md-8">
                            <div class="slider-content">
                                <div class="slider-content__text md-lg--80 mb-md--40 mb-sm--15" style="margin-bottom:5%;">
                                    <p class="text-uppercase font-weight-light" style="text-align: justify;">
                                            Todos los meses habrán capacitaciones que permitan conocer más a fondo los productos destacados del mes para ayudar a impulsarlos y compartir un espacio de encuentro entre todos. 
                                            Al final del mes se podrá contestar una trivia para sumar puntos extra.
                                    </p>
                                </div>
                                <div class="col-lg-12 col-md-12" style="margin-bottom: 10%;">
                                    <div class="slider-content__btn">
                                        <a class="css-button">20 puntos por asistencia</a>
                                    </div>
                                    <br>
                                    <div class="slider-content__btn">
                                        <a class="css-button">5 puntos por Trivia</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="col-lg-4 offset-lg-2 col-md-4" style="padding-bottom: 10%;">
                                <figure class="slider-image d-none d-md-block">
                                    <img src="assets/img/aprende/aprende.png" style="max-width:65%;width:auto;height:auto;">
                                </figure>
                            </div>
                    </div>
                </div>                    
            </div>
        </main>
    </div>
</div>
@endsection