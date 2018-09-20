@extends('layouts.admin')
@section('contenido')
    <div class="row">
        <div class="col-lg-9 col-md-9 col-xs-12">
           <h3>Listado de ingresos <a href="ingreso/create"><button class="btn btn-success">Nuevo</button> </a></h3>
            @include('compras.ingreso.search')
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                       <th>Fecha</th>
                       <th>Proveedor</th>
                       <th>Comprobante</th>
                       <th>Impuesto</th>
                       <th>Total</th>
                       <th>Estado</th>
                       <th>Opciones</th>
                    </thead>
                    @foreach($ingresos as $ing)
                        <tr>
                            <td>{{$ing->fecha_hora}}</td>
                            <td>{{$ing->nombre}}</td>
                            <td>{{$ing->num_comprobante}}</td>
                            <td>{{$ing->impuesto}}</td>
                            <td>{{$ing->total}}</td>
                            <td>{{$ing->estado}}</td>
                            <td>
                                <a href="{{URL::action('IngresoController@show',$ing->idingreso)}}"><button class="btn btn-info">Detalle</button></a>
                                <a href="" data-toggle="modal" data-target="#modal-delete-{{$ing->idingreso}}" ><button class="btn btn-danger">Anular</button></a>
                            </td>
                        </tr>
                        @include('compras.ingreso.eliminar')
                    @endforeach
                </table>
            </div>
            {{$ingresos->render()}}
        </div>
    </div>
@endsection