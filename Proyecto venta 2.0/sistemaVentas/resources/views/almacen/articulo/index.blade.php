@extends('layouts.admin')
@section('contenido')
    <div class="row">
        <div class="col-lg-9 col-md-9 col-xs-12">
           <h3>Listado de articulos <a href="articulo/create"><button class="btn btn-success">Nuevo</button> </a></h3>
            @include('almacen.articulo.search')
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <th>Id</th>
                    <th>Categoria</th>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Stock</th>
                    <th>Descripcion</th>
                    <th>Imagen</th>
                    <th>Estado</th>
                    <th>Opciones</th>
                    </thead>
                    @foreach($articulos as $art)
                        <tr>
                            <td>{{$art->idarticulo}}</td>
                            <td>{{$art->categoria}}</td>
                            <td>{{$art->codigo}}</td>
                            <td>{{$art->nombre}}</td>
                            <td>{{$art->stock}}</td>
                            <td>{{$art->descripcion}}</td>
                            <td><img src="{{asset('imagenes/articulos/'.$art->imagen)}}" alt="{{$art->nombre}}" height="50px" width="50px" class="img-thumbnail"></td>
                            <td>{{$art->estado}}</td>
                            <td>
                                <a href="{{URL::action('ArticuloController@edit', $art->idarticulo)}}"><button class="btn btn-info">Editar</button></a>
                                <a href="" data-toggle="modal" data-target="#modal-delete-{{$art->idarticulo}}" ><button class="btn btn-danger">Eliminar</button></a>
                            </td>
                        </tr>
                        @include('almacen.articulo.eliminar')
                    @endforeach
                </table>
            </div>
            {{$articulos->render()}}
        </div>
    </div>
@endsection