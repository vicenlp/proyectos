@extends('layouts.admin')
@section('contenido')
    <div class="row">
        <div class="col-lg-9 col-md-9 col-xs-12">
           <h3>Listado de proveedores <a href="proveedor/create"><button class="btn btn-success">Nuevo</button> </a></h3>
            @include('compras.proveedor.search')
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                       <th>Id</th>
                       <th>Nombre</th>
                       <th>Tipo de documento</th>
                       <th>Numero de documento</th>
                       <th>Direccion</th>
                       <th>Telefono</th>
                       <th>Email</th>
                       <th>Opciones</th>
                    </thead>
                    @foreach($personas as $per)
                        <tr>
                            <td>{{$per->idpersona}}</td>
                            <td>{{$per->nombre}}</td>
                            <td>{{$per->tipo_documento}}</td>
                            <td>{{$per->num_documento}}</td>
                            <td>{{$per->direccion}}</td>
                            <td>{{$per->telefono}}</td>
                            <td>{{$per->email}}</td>
                            <td>
                                <a href="{{URL::action('ProveedorController@edit', $per->idpersona)}}"><button class="btn btn-info">Editar</button></a>
                                <a href="" data-toggle="modal" data-target="#modal-delete-{{$per->idpersona}}" ><button class="btn btn-danger">Eliminar</button></a>
                            </td>
                        </tr>
                        @include('compras.proveedor.eliminar')
                    @endforeach
                </table>
            </div>
            {{$personas->render()}}
        </div>
    </div>
@endsection