<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Denunciation extends Model
{
   use HasFactory;

    protected $fillable = [
        'Tipo_denuncia',
        'Descripcion_hecho',
        'Ubicacion',
        'Latitud',
        'Longitud',
        'Evidencia_url',
        'Anonima',
        'Estado_denuncia',
        'Fecha_denuncia',
        'Id_usuario',
    ];

    public function user() {
        return $this->belongsTo('App\Models\User', 'Id_usuario');
    }
}
