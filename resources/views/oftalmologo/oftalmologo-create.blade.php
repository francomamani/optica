@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="offset-3 col-md-6">
                                {{ Form::open(['route'=> 'oftalmologo.store']) }}
                                <legend>Registrar oftalmologo</legend>
                                <section class="form-group">
                                    <label for="nombres">Nombres</label>
                                    <input id="nombres" type="text"
                                           class="form-control{{ $errors->has('nombres') ? ' is-invalid' : '' }}"
                                           name="nombres" value="{{ old('nombres') }}" required autofocus>
                                </section>
                                <section class="form-group">
                                    <label for="apellido_paterno">Apellido Paterno</label>
                                    <input id="apellido_paterno" type="text"
                                           class="form-control{{ $errors->has('apellido_paterno') ? ' is-invalid' : '' }}"
                                           name="apellido_paterno" value="{{ old('apellido_paterno') }}" required>
                                </section>
                                <section class="form-group">
                                    <label for="apellido_materno">Apellido Materno</label>
                                    <input id="apellido_materno" type="text"
                                           class="form-control{{ $errors->has('apellido_materno') ? ' is-invalid' : '' }}"
                                           name="apellido_materno" value="{{ old('apellido_materno') }}" required>
                                </section>
                                <section class="form-group">
                                    <label for="cuenta">Cuenta</label>
                                    <input id="cuenta" type="text"
                                           class="form-control{{ $errors->has('cuenta') ? ' is-invalid' : '' }}"
                                           name="cuenta" value="{{ old('cuenta') }}" required>
                                </section>
                                <section class="form-group">
                                    <label for="email">Correo Electronico</label>
                                    <input id="email" type="email"
                                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           name="email" value="{{ old('email') }}" required>
                                </section>
                                <section class="form-group">
                                    <label for="password">Password</label>
                                    <input id="password" type="password"
                                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                           name="password" value="{{ old('password') }}" required>
                                </section>
                                <section class="form-group">
                                    <label for="password_confirmation">Confirmacion de Password</label>
                                    <input id="password_confirmation" type="password"
                                           class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}"
                                           name="password_confirmation" value="{{ old('password_confirmation') }}" required>
                                </section>
                                <section class="form-group">
                                    <label>NIT</label>
                                    <input class="form-control" type="text" name="nit" required autofocus>
                                </section>
                                <section class="form-group">
                                    <label>Celular</label>
                                    <input class="form-control" type="text" name="celular" required>
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