<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Denunciation;

class DenunciationController extends Controller
{
    public function consulta9(){
        $denunciations = Denunciation::where('Estado_denuncia', 'pendiente')->get();
        return $denunciations;
    }
    
    public function prueba_denunciation(){
        $denunciation = Denunciation::find(1);
        return [
            'denunciation' => $denunciation,
            'userCivil' => $denunciation->userCivil,
        ];
    }
}
