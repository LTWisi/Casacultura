<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creador extends Model
{
    use HasFactory;

    protected $table = "creadores";

    public function cursos() {
        return $this->belongsTo(Curso::class);
    }

    public function usuario() {
        return $this->hasOne(Usuario::class);
    }

    public function institucion() {
        return $this->hasMany(Institucion::class);
    }

}
