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
}
