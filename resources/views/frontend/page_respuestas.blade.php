@extends('frontend.layout.index')

@section('content')
<div class="ft-preloader active">
    <div class="ft-preloader-inner h-100 d-flex align-items-center justify-content-center">
        <div class="ft-child ft-bounce1"></div>
        <div class="ft-child ft-bounce2"></div>
        <div class="ft-child ft-bounce3"></div>
    </div>
</div>

<!-- Breadcrumb area Start -->
<section>
    <div class="content">
        <div class="row">
            <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
                <div class="paralelogramo" style="margin-bottom: 0% !important;">Trivia</div>
            </div>
        </div>
    </div>    
</section>
<div class="mb-5" style="margin-bottom: 7rem !important;"></div>
<!-- Breadcrumb area End -->

<div class="main-content-wrapper">
    <div class="page-content-inner pt--25 pb--80">
        <div class="container">
            <div class="row">                
                <div class="col-md-12">
                    @if ($condicion == 0)
                        <respuestas-component></respuestas-component>   
                    @else
                        <h4>Ya fue Diligenciado el formulario</h4>
                    @endif
               	</div>
            </div>
        </div>
    </div>
</div>

@endsection