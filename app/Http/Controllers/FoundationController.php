<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foundation;

class FoundationController extends Controller
{
    //
    public function consulta7(){
        $foundations = Foundation::find(1);
        return $foundations;
    }
    public function consulta8(){
        $foundations = Foundation::where('Nombre_organizacion', 'like', 'Patitas%')->get();
        return $foundations;
    }
    public function prueba_foundation(){
    $foundation = Foundation::find(1);
    return [
        'foundation' => $foundation,
        'pets' => $foundation->pets,
        'adoptionApplications' => $foundation->adoptionApplications,
    ];
}
}
