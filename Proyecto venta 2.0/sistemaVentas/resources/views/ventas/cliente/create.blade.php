@extends('layouts.admin')
@section('contenido')

    <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12">
            <h3>Nuevo Cliente</h3>
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

    {!!Form::open(array('url'=>'ventas/cliente','method'=>'POST','autocomplete'=>'off')) !!}
    {{Form::token()}}

    <div class="row">

        <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" placeholder="Ingrese nombre" required value="{{old('nombre')}}">
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="tipo_documento">Tipo documento</label>
                <select name="tipo_documento" class="form-control">
                    <option value="DNI">DNI</option>
                    <option value="carnet">carnet</option>
                    <option value="pasaporte">pasaporte</option>
                    <option value="otro">otro</option>
                </select>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="num_documento">Numero de documento</label>
                <input type="text" name="num_documento" class="form-control" placeholder="Ingrese numero de doc" value="{{old('num_documento')}}">
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="direccion">Direccion</label>
                <input type="text" name="direccion" class="form-control" placeholder="Ingrese direccion" value="{{old('direccion')}}">
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="telefono">Telefono</label>
                <input type="text" name="telefono" class="form-control" placeholder="Ingrese telefono" value="{{old('telefono')}}">
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Ingrese email" value="{{old('email')}}">
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