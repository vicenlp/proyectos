@extends('layouts.admin')
@section('contenido')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12">
            <h3>Modificar Articulo: {{$articulo->nombre}}</h3>
            @if (count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>

    {!!Form::model($articulo,['method'=>'PATCH','route'=>['almacen.articulo.update',$articulo->idarticulo],'files'=>'true']) !!}
    {{Form::token()}}

    <div class="row">
        <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="categoria">Categoria</label>
                <select name="idcategoria" class="form-control">
                    @foreach($categorias as $cat)
                        @if($cat->idcategoria==$articulo->idcategoria)
                            <option value="{{$cat->idcategoria}}" selected>{{$cat->nombre}}</option>
                        @else
                            <option value="{{$cat->idcategoria}}">{{$cat->nombre}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="codigo">Codigo</label>
                <input type="text" name="codigo" class="form-control" placeholder="Ingrese codigo" required value="{{$articulo->codigo}}">
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" placeholder="Ingrese nombre" required value="{{$articulo->nombre}}">
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="stock">Stock</label>
                <input type="text" name="stock" class="form-control" placeholder="Ingrese cantidad" required value="{{$articulo->stock}}">
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <input type="text" name="descripcion" class="form-control" placeholder="Ingrese descripcion" value="{{$articulo->descripcion}}">
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="imagen">Imagen</label>
                <input type="file" name="imagen" class="form-control">
                @if (($articulo->imagen)!="")
                    <img src="{{asset('imagenes/articulos/'.$articulo->imagen)}}" height="50px" width="50px" class="thumbnail">
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
        </div>
    </div>

    {!!Form::close()!!}

@endsection