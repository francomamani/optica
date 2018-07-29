<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombres',
        'apellido_paterno',
        'apellido_materno',
        'cuenta',
        'email',
        'password',
        'tipo_usuario',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function oftalmologo() {
        return $this->hasOne('App\Oftalmologo');
/*        return $this->hasOne(Oftalmologo::class);*/
    }

    public function administrador () {
        return $this->hasOne('App\Administrador');
    }

    public function recepcionista () {
        return $this->hasOne('App\Recepcionista');
    }

}
