<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foundation extends Model
{
    use HasFactory;

    protected $fillable = [
        'Estado_verificacion',
        'Motivo_rechazo',
        'Logo',
        'Nombre_organizacion',
        'Nit',
        'Nombre_representante',
        'Telefono',
        'Direccion',
        'Redes',
        'Email',
        'Contraseña',
        'Descripcion',
        'Id_usuario',
    ];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
    public function pets() {
        return $this->hasMany('App\Models\Pet');
    }
    public function adoptionApplications() {
        return $this->hasMany('App\Models\AdoptionApplication');
    }
}