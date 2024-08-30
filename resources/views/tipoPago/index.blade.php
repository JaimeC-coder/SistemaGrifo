@extends('adminlte::page')

@section('title', 'Permisos')

@section('content_header')
    <h1>Lista de Pagos</h1>
@stop

@section('content')


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Pagos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tipopagos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo Tipo de Pago') }}
                                </a>

                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>#</th>
                                        <th>Tipo de Pago</th>
                                        <th>Accion</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($tipoPagos as $item)
                                        <tr>
                                            <td>{{ $item->idTipopago }}</td>
                                            <td>{{ $item->tpagotipo }}</td>
                                            <td>
                                                <form action="{{route('tipopagos.destroy',$item)}}" method="POST">
                                                    <a href="{{route('tipopagos.edit',$item)}}" class="btn btn-info">Editar</a>
                                                    <a href="{{route('tipopagos.show',$item)}}" class="btn btn-info">Ver</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Borrar</button>
                                                </form>

                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>





@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
