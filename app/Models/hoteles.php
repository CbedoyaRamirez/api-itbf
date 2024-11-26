<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class hoteles extends Model
{
    use HasFactory;

    use HasFactory;

    protected $table = "hoteles";

    protected $fillable = [ 
        "id",
        "nombre",
        "idRol",
        "numPersonas",
        "idAcomodacion"    
    ];

}
