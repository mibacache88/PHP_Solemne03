<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['id_cliente', 'rut_cliente', 'nombre_cli', 'direccion', 'telefono', 'mail'];
}
