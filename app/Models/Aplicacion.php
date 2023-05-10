<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aplicacion extends Model
{
    protected $fillable = [
        'nombre', 'phone', 'mail', 'idp'
    ];
}
