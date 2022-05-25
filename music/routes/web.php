<?php

use App\Http\Controllers\admin\loginController;
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

// Example Routes
Route::get('/', [loginController::class, 'index']);
Route::get('/dashboard', [loginController::class, 'dashboard']);
Route::get('/broadCasting', [\App\Http\Controllers\broadCasting::class, 'index'])->name('broadCasting');
Route::post('/broadCasting', [\App\Http\Controllers\broadCasting::class, 'stepone'])->name('broadCasting.post');




