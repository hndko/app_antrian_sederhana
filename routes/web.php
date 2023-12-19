<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('home', [HomeController::class, 'index']);
Route::get('antri_cs/{id}/{id1}/{id2}', [HomeController::class, 'antri_cs']);
Route::get('antri_teller1/{id}/{id1}/{id2}', [HomeController::class, 'antri_teller1']);
Route::get('antri_teller2/{id}/{id1}/{id2}', [HomeController::class, 'antri_teller2']);
