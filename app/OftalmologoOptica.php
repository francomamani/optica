<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OftalmologoOptica extends Model
{
    use SoftDeletes;
    protected $table = "oftalmologo_opticas";
    protected $fillable = [
        'oftalmologo_id',
        'optica_id',
    ];
    protected $dates = ['deleted_id'];

    public function optica () {
        return $this->belongsTo('App\Optica');
    }

    public function oftalmologo () {
        return $this->belongsTo('App\Oftalmologo');
    }

}
