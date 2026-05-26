<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
use HasFactory;

    protected $fillable = [
        'Nombre',
        'Especie',
        'Raza',
        'Edad_estimada',
        'Tamaño',
        'Estado_salud',
        'Descripcion_personalidad',
        'Foto_url',
        'Estado_adopcion',
        'Id_fundacion',
    ];

    public function foundation() {
        return $this->belongsTo('App\Models\Foundation');
    }
    public function adoptionApplications() {
        return $this->hasMany('App\Models\AdoptionApplication');
    }
}
