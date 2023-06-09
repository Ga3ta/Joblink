<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puesto extends Model
{
    protected $fillable = [
        'descripcion', 'empresa', 'salario', 'fecha_ini', 'fecha_fin', 'activo'
    ];
}
