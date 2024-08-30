@extends('adminlte::page')

@section('title', 'Tipo de Pagos')

@section('content_header')
    <h1>Editar Tipo de Pagos</h1>
@stop

@section('content')

<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">{{ __('Editar') }} Tipo de Pagos</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('tipopagos.update', $tipoPago ) }}" role="form" enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        @csrf
                        @include('tipoPago.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>






@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
