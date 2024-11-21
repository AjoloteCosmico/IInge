<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\IsoReqController;
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


Route::get('', [HomeController::class, 'index']);

Route::get('/isorequerimientos', [IsoReqController::class, 'index']);
Route::get('/iluminancia/index', [IsoReqController::class, 'iluminancia']);
Route::get('/iluminancia/parameters', [IsoReqController::class, 'iluminancia_mes']);
