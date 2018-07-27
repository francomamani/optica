<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recepcionista extends Model
{
    use SoftDeletes;
    protected $table = 'recepcionistas';
    protected $fillable = ['user_id'];
    protected $dates = ['deleted_at'];

    public function user () {
        return $this->belongsTo('App\User');
    }
}
