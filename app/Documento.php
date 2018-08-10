<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Documento extends Model
{
    use SoftDeletes;
    protected $primaryKey = 'documento_id';
    protected $table = 'documentos';
    protected $fillable = ['ruta', 'titulo'];
    protected $dates = ['deleted_at'];
}
