<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use SoftDeletes;
    protected $table = 'productos';
    protected $fillable = [
        'optica_id',
        'venta_id',
        'descripcion',
        'precio',
        'marca',
        'modelo',
        'cantidad',
    ];
    protected $dates = ['deleted_at'];
    public function optica () {
        return $this->belongsTo('App\Optica');
    }

    public function ventas () {
        return $this->belongsToMany('App\Venta');
    }

}
