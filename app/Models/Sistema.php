<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sistema extends Model
{
    use HasFactory;
    protected $fillable=[
        'Nombre',
        'latitud',
        'longitud'
    ];
    protected $hidden = ['TokenSeguridad','created_at','updated_at'];
     
}
