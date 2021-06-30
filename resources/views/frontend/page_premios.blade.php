@extends('frontend.layout.index')

@section('content')
        
    <!-- Main Wrapper Start -->
    <div class="wrapper">
        <!-- Tittle area Start -->
        <div style="padding-top:10%;"></div>
            <div style="position: relative;">
                <div class="paralelogramo" style="position: absolute; left: 40px; top: 40px;"></div>
                <div class="paralelogramo2" style="position: absolute; left: 35px; top: 32px;">Premios</div>
            </div>       
        <!-- Tittle area End -->

        <!-- Main Content Wrapper Start -->
        <main class="main-content-wrapper" style="padding-top:3%;">
            <!-- Slider area Start -->
            <section class="premios">                     
                <div class="item">
                    <div class="premios d-flex align-items-center bg-image"
                        data-bg-image="assets/img/premios/premios_new.png">
                    </div>                       
                </div>
            </section>
            <!-- Slider area End -->
            
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <!-- Single Post Start -->
                    <article class="mb--75 mb-md--55 pb-md--55">                                        
                        <div class="single-post__info">
                            <div class="row mb--20 mb-md-33">
                                <div class="col-lg-12 col-md-12">
                                    <p align="justify">
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
@endsection
