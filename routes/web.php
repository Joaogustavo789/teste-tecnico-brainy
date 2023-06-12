<?php

// use App\Http\Controllers\CidadeController;
// use App\Http\Controllers\EstadoController;
// use App\Http\Controllers\HobbieController;
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

Route::get('/', [UsuarioController::class, 'postUsuario'])->name('home');

Route::post('/usuario/cadastrado', [UsuarioController::class, 'createUsuario'])->name('novoUsuario');

Route::get('/usuarios', [UsuarioController::class, 'getUsuarios'])->name('usuarios');

Route::get('/usuarios/editar/{id}', [UsuarioController::class, 'putUsuario'])->name('editar');

Route::put('/usuario/atualizado/{id}', [UsuarioController::class, 'updateUsuario'])->name('usuarioAtualizado');

Route::get('/usuarios/excluir/{id}', [UsuarioController::class, 'deleteUsuario'])->name('excluir');

// Route::prefix('estados')->group(function () {
//     Route::get('/', [EstadoController::class, 'getEstados'])->name('estados');
// });

// Route::prefix('cidades')->group(function () {
//     Route::get('/', [CidadeController::class, 'getCidades']);
// });

// Route::prefix('hobbies')->group(function () {
//     Route::get('/', [HobbieController::class, 'getHobbies']);
// });
