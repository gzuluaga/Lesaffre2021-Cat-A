@extends('frontend.layout.index')

@section('content')
        
<!-- Main Wrapper Start -->
<div class="wrapper">
    <div class="single-slide d-flex align-items-center bg-image" data-bg-image="assets/img/premios/beach-product-background.jpg" style="background-position: bottom !important; margin-top: 1% !important;">                    
        <!-- Main Content Wrapper Start -->
        <main class="main-content-wrapper">
            <div class="row">
                <div class="paralelogramo" style="margin-bottom: 0% !important;">Premios</div>
            </div>

            <div class="row justify-content-center"></div>
                <center>
                    <img src="{{ asset('assets/img/premios/premios_new.png') }}" alt="Premios" style="width: 65%; max-width: 100%; max-height: 100%;">
                </center>

                    <div class="row justify-content-center">
                        <div class="col-lg-9">
                            <article class="mb-md--55 pb-md--55">                                        
                                <div class="single-post__info">
                                    <div class="row mb--20 mb-md-33 mt--20">
                                        <div class="col-lg-12 col-md-12">
                                            <p align="justify" style="font-size: 15px !important;">
                                                El Desafío Lesaffre 2021 premiará al distribuidor que alcance la mejor posición en el concurso con un increíble viaje.
                                                También se entregarán premios a los mejores vendedores de cada mes y del cuatrimestre. 
                                                Todos los meses habrán capacitaciones que permitan conocer más a fondo los productos destacados del mes para ayudar a impulsarlos y compartir un espacio de encuentro entre todos. Al final del mes se podrá contestar una trivia para sumar puntos extra.
                                                Se  consideran las compras de distribuidores realizadas entre el 1 de Julio al 30 de Octubre de 2021. 
                                                La registración y aceptación de las bases de participación deberá realizarse en: www.lesaffreplay.com/DesafioLesaffre2021.
                                                Al inicio de cada mes de concurso se comunicará a cada participante las cuotas de dicho periodo. 
                                                10 días después de finalizado cada mes se comunicará el ranking de los distribuidores y los ganadores de los premios mensuales. 
                                                Del 1 al 10 de Noviembre se comunicará el ganador del viaje y del premio para el mejor vendedor del cuatrimestre.</p>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection