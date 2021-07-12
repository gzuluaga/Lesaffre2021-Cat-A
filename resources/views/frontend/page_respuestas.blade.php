@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Trivia Desafío Lesaffre 2021</div>

                <div class="card-body">
                   <template>
                   		<respuestas-component></respuestas-component>
                   </template>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection