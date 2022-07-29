<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TextoController;
use App\Http\Controllers\SinginController;
use App\Http\Controllers\UserModelController;
use App\Http\Controllers\ContactController;

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
    return view('layout');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::view('/about', 'about');
Route::view('/models', 'models');
Route::view('/header', 'header');
Route::view('/contact', 'contact');
Route::view('/newfaces', 'newfaces');
Route::view('/singin', 'singin');
// rota de textos
// Route::view('/textos', 'textos');


Route::get('/textos', [TextoController::class, 'index'])->middleware('auth');

Route::get('/textos/create', [TextoController::class, 'create']);
Route::post('/textos/add', [TextoController::class, 'store']);
Route::get('/textos/{id}/edit', [TextoController::class, 'edit']);
Route::post('/textos/update/{id}', [TextoController::class, 'update']);
Route::delete('/textos/delete/{id}', [TextoController::class, 'destroy']);

Route::get('/about', [TextoController::class, 'about']);

Route::get('/singinAdmin', [SinginController::class, 'index']);
Route::get('/singin/create', [SinginController::class, 'create']);
Route::post('singin/add', [SinginController::class, 'store']);
Route::get('/singinAdmin/{id}/edit', [SinginController::class, 'edit']);
Route::post('/singinAdmin/update/{id}', [SinginController::class, 'update']);
Route::delete('/singinAdmin/delete/{id}', [SinginController::class, 'destroy']);

Route::get('/newModel', [UserModelController::class, 'index']);
Route::get('/newModel/create', [UserModelController::class, 'create']);
Route::post('/newModel/add', [UserModelController::class, 'store']);

// Mensagens Recebidas

Route::get('/contacts', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store']);

//Modelos
