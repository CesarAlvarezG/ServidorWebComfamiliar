<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SitioController;

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

Route::get('/CalidadAire',[SitioController::class, 'index']);

Route::get('/CalidadAire/{idSistema}/Analisis',[SitioController::class, 'analisis']);
