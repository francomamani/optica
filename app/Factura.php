<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Factura extends Model
{
    use SoftDeletes;
    protected $table = 'facturas';
    protected $fillable = [
        'num_factura',
        'codigo_control',
        'fecha_expiracion',
        'fecha_emision',
        'nit_empresa',
        'monto_total',
        'tipo_ingreso',
    ];
    protected $dates = ['deleted_at'];
}
