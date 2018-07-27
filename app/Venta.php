<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Venta extends Model
{
    use SoftDeletes;
    protected $table = "ventas";
    protected $fillable = [
        'fecha_hora_venta',
        'total',
        'a_cuenta',
        'numero_venta',
    ];
    protected $dates = ['deleted_at'];

    public function productos () {
        return $this->hasMany('App\Producto');
    }

    public static function boot()
    {
        parent::boot();
        static::deleting(function ($parent) {
            $parent->productos()->delete();
        });
    }

}
