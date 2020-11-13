<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    // Usuario => usuario(s)
    protected $fillable = [
        'nombrePila',
        'correo',
        'passwd',
        'edad',
        'ocupacion',
    ];

    public function cursos() {
        return $this->belongsTo(Curso::class);
    }

    public function creador() {
        return $this->belongsTo(Creador::class);
    }

    public function pago() {
        return $this->belongsTo(Pago::class);
    }
}
