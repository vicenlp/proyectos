@extends('layouts.admin')
@section('contenido')
    <div class="row">
        <div class="col-lg-9 col-md-8 col-xs-12">
           <h3>Listado de categorias <a href="categoria/create"><button class="btn btn-success">Nuevo</button> </a></h3>
            @include('almacen.categoria.search')
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Opciones</th>
                    </thead>
                    @foreach($categorias as $cat)
                        <tr>
                            <td>{{$cat->idcategoria}}</td>
                            <td>{{$cat->nombre}}</td>
                            <td>{{$cat->descripcion}}</td>
                            <td>
                                <a href="{{URL::action('CategoriaController@edit', $cat->idcategoria)}}"><button class="btn btn-info">Editar</button></a>
                                <a href="" data-toggle="modal" data-target="#modal-delete-{{$cat->idcategoria}}" ><button class="btn btn-danger">Eliminar</button></a>
                            </td>
                        </tr>
                        @include('almacen.categoria.eliminar')
                    @endforeach
                </table>
            </div>
            {{$categorias->render()}}
        </div>
    </div>
@endsection