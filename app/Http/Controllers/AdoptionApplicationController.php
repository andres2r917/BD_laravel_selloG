<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adoption_application;
class AdoptionApplicationController extends Controller
{
  public function consulta10(){
    $adoptionApplications = Adoption_application::where('Estado_solicitud', 'pendiente')->get();
    return $adoptionApplications;
  }

  public function consulta11(){
    $adoptionApplications = Adoption_application::whereDate('Fecha_envio', '2026-05-20')->get();
    return $adoptionApplications;
  }
  public function prueba_application(){
    $application = Adoption_application::find(1);
    return [
        'application' => $application,
        'userCivil' => $application->userCivil,
        'pet' => $application->pet,
        'foundation' => $application->foundation,
    ];
}
}