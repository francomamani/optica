<?php

namespace App\Http\Controllers\Auth;

use App\Administrador;
use App\Oftalmologo;
use App\Recepcionista;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
//    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombres' => 'required|string|max:191',
            'apellido_paterno' => 'required|string|max:191',
            'apellido_materno' => 'required|string|max:191',
            'cuenta' => 'required|string|max:50|unique:users',
            'email' => 'required|string|email|max:191|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $usuario = User::create([
            'nombres' => $data['nombres'],
            'apellido_paterno' => $data['apellido_paterno'],
            'apellido_materno' => $data['apellido_materno'],
            'cuenta' => $data['cuenta'],
            'email' => $data['email'],
            'tipo_usuario' => $data['rol'],
            'password' => Hash::make($data['password']),
        ]);

        $rol = $data['rol'];
        switch ($rol) {
            case 'recepcionista' :
                Recepcionista::create([
                    'user_id' => $usuario->id
                ]);
                break;
            case 'administrador' :
                Administrador::create([
                    'user_id' => $usuario->id
                ]);
                break;
        }
        return $usuario;

    }
}
