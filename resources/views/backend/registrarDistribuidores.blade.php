@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Registrar Distribuidores</div>

                <div class="card-body">
                   <template>
                   		<registro-distribuidores></registro-distribuidores>
                   </template>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection