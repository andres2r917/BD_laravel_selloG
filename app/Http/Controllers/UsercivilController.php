<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usercivil;

class UsercivilController extends Controller
{
   public function consulta2(){
        $usercivils = Usercivil::find(1);
        return $usercivils;
    }

    public function prueba_usercivil(){
    $foundation = Foundation::find(1);
    return [
        "foundation" => $foundation,
        "pets" => $foundation->pets,
    ];
}
}
