<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{

    protected $table = 'cliente';

    protected $primaryKey = 'id';
    public $incrementing = true;

    public $timestamps = true;

     protected $fillable = [
        'nombre_completo',
        'telefono',
        'correo',
        'direccion',
        'fecha_registro'
    ];

}
