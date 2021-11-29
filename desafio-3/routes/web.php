<?php

use App\Http\Controllers\UsuariosController;
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

Route::get('/', [UsuariosController::class, 'index']);
Route::get('usuarios/novo', [UsuariosController::class, 'novo']);
Route::post('usuarios/novo', [UsuariosController::class, 'add']);
Route::get('usuarios/{id}/edit', [UsuariosController::class, 'edit']);
Route::post('usuarios/update/{id}', [UsuariosController::class, 'update']);
Route::delete('usuarios/delete/{id}', [UsuariosController::class, 'delete']);
