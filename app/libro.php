<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class libro extends Model
{
    //CREO mi vector para traer los datos de la BD
    protected $fillable = ['nombre',
     'resumen',
     'npagina',
     'edicion',
     'autor',
     'precio'
    ];
}
