<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valor extends Model
{
    use HasFactory;
    protected $fillable=[
        'PM25',
        'Temperatura',
        'Humedad',
        'IntensidadSonido',
        'ParticulasGas'
    ];
    protected $hidden = ['created_at','updated_at'];
}
