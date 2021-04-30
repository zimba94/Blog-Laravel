<?php
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\EntradaController;
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
    return view('welcome');
});


Route::resource('usuario', UsuarioController::class);
Route::resource('entrada', EntradaController::class);

Route::post('usuario/save', [UsuarioController::class, 'save']);