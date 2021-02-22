<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $fillable=[
        'nombre','apellido','tipo','documento','direccion','celular','password','correo','nickname'
    ];
}
