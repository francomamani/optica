@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <h1>Mostrar optica</h1>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Tipo de optica</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td scope="row">{{ $optica->nombre }}</td>
                            <td>{{ $optica->direccion }}</td>
                            <td>{{ $optica->tipo_optica}}</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="text-center">
                        <a href="{{ URL::to('opticas') }}"> Volver al listado</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection