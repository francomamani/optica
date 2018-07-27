@extends('layouts.app')

@section('content')
<div class="container">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="container-fluid">
                    <div class="row">
                        <div class="offset-3 col-md-6">
                                {{ Form::open(['route'=> 'optica.store']) }}
                                <legend>Registrar optica</legend>
                                <section class="form-group">
                                    <label>Nombre</label>
                                    <input class="form-control" type="text" name="nombre" required autofocus>
                                </section>
                                <section class="form-group">
                                    <label>Direccion</label>
                                    <input class="form-control" type="text" name="direccion" required>
                                </section>
                                <section class="form-group">
                                    <label>Telefono</label>
                                    <input class="form-control" type="text" name="telefono" required>
                                </section>
                                <section class="form-group">
                                    <label>Tipo de Optica</label>
                                    <select class="form-control" name="tipo_optica" required>
                                        <option value="central">Central</option>
                                        <option value="sucursal">Sucursal</option>
                                    </select>
                                </section>
                                <section class="form-group">
                                    <button type="submit" class="btn btn-primary">GUARDAR</button>
                                </section>
                                {{ Form::close() }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


@endsection