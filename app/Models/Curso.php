<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'fechaPublicacion',
        'costo',
        'n_estudiantes',
        'descripcion',
        'idioma',
        'aprendizajes',
        'requisitos'
    ];
}
