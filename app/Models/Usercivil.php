<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usercivil extends Model
{
    use HasFactory;

    protected $table = 'usercivils';

    protected $fillable = [
        'Documento_identidad',
        'Fecha_nacimiento',
        'Direccion',
        'Tipo_vivienda',
        'Ocupacion',
        'Salario',
        'Telefono',
        'Tiene_hijos',
        'Id_usuario',
    ];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
    public function adoptionApplications() {
        return $this->hasMany('App\Models\AdoptionApplication');
    }
}
