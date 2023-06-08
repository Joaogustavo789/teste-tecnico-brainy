<?php

use App\Http\Controllers\CidadeController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\HobbieController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return 'Oi';
    // return view('welcome');
});

Route::prefix('estados')->group(function () {
    Route::get('/', [EstadoController::class, 'getEstados']);
});

Route::prefix('cidades')->group(function () {
    Route::get('/', [CidadeController::class, 'getCidades']);
});

Route::prefix('usuarios')->group(function () {
    Route::get('/', [UsuarioController::class, 'getUsuarios']);
});

Route::prefix('hobbies')->group(function () {
    Route::get('/', [HobbieController::class, 'getHobbies']);
});
