<?php

namespace App;

use function foo\func;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Optica extends Model
{
    use SoftDeletes;
    protected $table = 'opticas';
    protected $fillable = ['nombre', 'direccion', 'telefono', 'tipo_optica'];
    protected $dates = ['deleted_at'];

    public function oftalmologo_opticas () {
        return $this->hasMany('App\OftalmologoOptica');
    }

    public function productos () {
        return $this->hasMany('App\Producto');
    }

    public static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub
        static::deleting(function ($parent) {
            $parent->oftalmologo_opticas()->delete();
        });
    }

}