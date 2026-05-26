<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsercivílController;
use App\Http\Controllers\FoundationController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\DenunciationController;
use App\Http\Controllers\AdoptionApplicationController;
use App\Http\Controllers\RoleController;
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

// Roles
Route::get('consulta1', [RoleController::class, 'consulta1']);