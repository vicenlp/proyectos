@extends('layouts.admin')
@section('contenido')
    <div class="row">
        <div class="col-lg-9 col-md-9 col-xs-12">
           <h3>Listado de ventas <a href="venta/create"><button class="btn btn-success">Nuevo</button> </a></h3>
            @include('ventas.venta.search')
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                       <th>Fecha</th>
                       <th>Cliente</th>
                       <th>Comprobante</th>
                       <th>Impuesto</th>
                       <th>Total</th>
                       <th>Estado</th>
                       <th>Opciones</th>
                    </thead>
                    @foreach($ventas as $ven)
                        <tr>
                            <td>{{$ven->fecha_hora}}</td>
                            <td>{{$ven->nombre}}</td>
                            <td>{{$ven->num_comprobante}}</td>
                            <td>{{$ven->impuesto}}</td>
                            <td>{{$ven->total_venta}}</td>
                            <td>{{$ven->estado}}</td>
                            <td>
                                <a href="{{URL::action('VentaController@show',$ven->idventa)}}"><button class="btn btn-info">Detalle</button></a>
                                <a href="" data-toggle="modal" data-target="#modal-delete-{{$ven->idventa}}" ><button class="btn btn-danger">Anular</button></a>
                            </td>
                        </tr>
                        @include('ventas.venta.eliminar')
                    @endforeach
                </table>
            </div>
            {{$ventas->render()}}
        </div>
    </div>
@endsection