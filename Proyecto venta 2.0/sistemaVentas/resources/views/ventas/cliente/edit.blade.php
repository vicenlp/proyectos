@extends('layouts.admin')
@section('contenido')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12">
            <h3>Modificar Cliente: {{$persona->nombre}}</h3>
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

    {!!Form::model($persona,['method'=>'PATCH','route'=>['ventas.cliente.update',$persona->idpersona]]) !!}
    {{Form::token()}}

    <div class="row">

        <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" placeholder="Ingrese nombre" required value="{{$persona->nombre}}">
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="tipo_documento">Tipo documento</label>
                <select name="tipo_documento" class="form-control">
                    @if($persona->tipo_documento=='DNI')
                        <option value="DNI" selected>DNI</option>
                        <option value="pasaporte">pasaporte</option>
                        <option value="otro">otro</option>
                    @elseif($persona->tipo_documento=='pasaporte')
                        <option value="DNI">DNI</option>
                        <option value="pasaporte" selected>pasaporte</option>
                        <option value="otro">otro</option>
                    @else
                        <option value="DNI">DNI</option>
                        <option value="pasaporte">pasaporte</option>
                        <option value="otro" selected>otro</option>
                    @endif
                </select>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="num_documento">Numero de documento</label>
                <input type="text" name="num_documento" class="form-control" placeholder="Ingrese numero de doc" value="{{$persona->num_documento}}">
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="direccion">Direccion</label>
                <input type="text" name="direccion" class="form-control" placeholder="Ingrese direccion" value="{{$persona->direccion}}">
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="telefono">Telefono</label>
                <input type="text" name="telefono" class="form-control" placeholder="Ingrese telefono" value="{{$persona->telefono}}">
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Ingrese email" value="{{$persona->email}}">
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