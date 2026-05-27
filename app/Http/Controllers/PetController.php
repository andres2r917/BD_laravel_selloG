<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pet;

class PetController extends Controller
{
    public function consulta5(){
        $pets = Pet::where('Estado_adopcion','disponible')->get();
        return $pets;
    }
    public function consulta6(){
        $pets = Pet::where('Especie','Perro')->first();
        return $pets;
    }
    public function prueba_pet(){
    $pets = Pet::with('foundation')->get();
    return $pets;
    }

}
