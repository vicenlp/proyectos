@extends('layouts.admin')
@section('contenido')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12">
            <h3>Nuevo Articulo</h3>
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

    {!!Form::open(array('url'=>'almacen/articulo','method'=>'POST','autocomplete'=>'off','files'=>'true')) !!}
    {{Form::token()}}

    <div class="row">
        <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="categoria">Categoria</label>
                <select name="idcategoria" class="form-control">
                    @foreach($categorias as $cat)
                        <option value="{{$cat->idcategoria}}">{{$cat->nombre}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="codigo">Codigo</label>
                <input type="text" name="codigo" class="form-control" placeholder="Ingrese codigo" required value="{{old('codigo')}}">
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" placeholder="Ingrese nombre" required value="{{old('nombre')}}">
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="stock">Stock</label>
                <input type="text" name="stock" class="form-control" placeholder="Ingrese cantidad" required value="{{old('stock')}}">
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <input type="text" name="descripcion" class="form-control" placeholder="Ingrese descripcion" value="{{old('descripcion')}}">
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="imagen">Imagen</label>
                <input type="file" name="imagen" class="form-control">
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