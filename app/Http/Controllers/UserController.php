<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function consulta3(){
        $users = User::all();
        return $users;
    }
   public function consulta4(){
    $users = User::where('Telefono', 'like', '300%')->get();
    return $users;
}
}
