<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsercivilController;
use App\Http\Controllers\FoundationController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\DenunciationController;
use App\Http\Controllers\AdoptionApplicationController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AdministratorController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');

});

// Rutas
Route::get('consulta1', [RoleController::class, 'consulta1']);
Route::get('consulta2', [UsercivilController::class,'consulta2']);
Route::get('consulta3', [UserController::class,'consulta3']);
Route::get('consulta4', [UserController::class,'consulta4']);
Route::get('consulta5', [PetController::class,'consulta5']);
Route::get('consulta6', [PetController::class,'consulta6']);
Route::get('consulta7', [FoundationController::class,'consulta7']);
Route::get('consulta8', [FoundationController::class,'consulta8']);
Route::get('consulta9', [DenunciationController::class,'consulta9']);
Route::get('consulta10', [AdoptionApplicationController::class,'consulta10']);
Route::get('consulta11', [AdoptionApplicationController::class,'consulta11']);
Route::get('consulta12', [AdministratorController::class,'consulta12']);



