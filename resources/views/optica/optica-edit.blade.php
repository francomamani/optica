@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="offset-3 col-md-6">
                    {{ Form::model($optica, [ 'route' => ['optica.update', $optica->id ], 'method' => 'PUT']) }}
                    <legend>Editar optica</legend>
                    <section class="form-group">
                        <label>Nombre</label>
                        {{ Form::text('nombre', $optica->nombre, ['class' => 'form-control']) }}
                    </section>
                    <section class="form-group">
                        <label>Direccion</label>
                        {{ Form::text('direccion', $optica->direccion, ['class' => 'form-control']) }}
                    </section>
                    <section class="form-group">
                        <label>Telefono</label>
                        {{ Form::text('telefono', $optica->telefono, ['class' => 'form-control']) }}
                    </section>
                    <section class="form-group">
                        <label>Tipo de Optica</label>
                        <select name="tipo_optica" class="form-control">
                            <option value="central">Central</option>
                            <option value="sucursal">Sucursal</option>
                        </select>
                    </section>
                    <section class="form-group">
                        <button type="submit" class="btn btn-success">ACTUALIZAR</button>
                    </section>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@endsection