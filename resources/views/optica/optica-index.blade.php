@extends('layouts.app')

@section('content')
<div class="container">
    <div class="content">
        <a href="{{ URL::to('optica') }}">Registrar nueva optica</a>
        <div class="row">
            <div class="col-md-8">
                {{ Form::open(['url'=>'opticas-buscar']) }}
                {{ Form::text('busqueda', '', ['class' => 'form-control']) }}
            </div>
            <div class="col-md-4">
                {{ Form::submit('Buscar', ['class' => 'btn btn-primary']) }}
                {{ Form::close() }}
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Direccion</th>
                        <th>Telefono</th>
                        <th>Tipo de Optica</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($listado as $optica)
                        <tr>
                            <td>{{ $optica->nombre }}</td>
                            <td>{{ $optica->direccion }}</td>
                            <td>{{ $optica->telefono }}</td>
                            <td>{{ $optica->tipo_optica }}</td>
                            <td>
                                <div class="row">
                                    <div class="col-md-6 text-center">
                                        <a class="btn btn-info" href="{{ URL::to('optica/' . $optica->id) }}"> Ver</a>
                                        <a class="btn btn-warning" href="{{ URL::to('optica-edit/' . $optica->id ) }}">Editar</a>
                                    </div>
                                    <div class="col-md-6 text-left">
                                        {{ Form::open(['url' => 'optica/' . $optica->id, 'method' => 'DELETE']) }}
                                        {{ Form::submit('Eliminar', ['class' => 'btn btn-danger'])}}
                                        {{ Form::close() }}
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection