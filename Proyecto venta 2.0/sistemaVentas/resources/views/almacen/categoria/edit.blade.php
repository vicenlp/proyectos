@extends('layouts.admin')
@section('contenido')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12">
            <h3>Modificar Categoria: {{$categoria->nombre}}</h3>
            @if (count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {!!Form::model($categoria,['method'=>'PATCH','route'=>['almacen.categoria.update',$categoria->idcategoria]]) !!}
            {{Form::token()}}
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" value="{{$categoria->nombre}}" placeholder="Ingrese nombre">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <input type="text" name="descripcion" class="form-control" value="{{$categoria->descripcion}}" placeholder="Ingrese descripcion">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
            {!!Form::close()!!}
        </div>
    </div>
@endsection