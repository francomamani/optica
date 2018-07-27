<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Diagnostico extends Model
{
    use SoftDeletes;
    protected $table = 'diagnosticos';
    protected $fillable = [
        'oftalmologo_id',
        'cliente_id',
        'concepto',
        'medida_ojo_izquierdo',
        'medida_ojo_derecho',
        'tipo_enfermedad',
        'circunferencia_ojo_izquierdo',
        'circunferencia_ojo_derecho',
        'adicion',
        'esfera',
        'cilindro',
        'dioptria',
    ];
    protected $date = ['deleted_at'];

    public function cliente () {
        return $this->belongsTo('App\Cliente');
    }

    public function oftalmologo () {
        return $this->belongsTo('App\Oftalmologo');
    }


}
