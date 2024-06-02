<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authcontroller;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\castcontroller;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/register', [authController::class, 'register']);

Route::post('/send', [authController::class, 'send']);

Route::get('/table', function () {
    return view('pages.table');
}); 

Route::get('/data-table', function () {
    return view('pages.data-table'); 
}); 

Route::resource('cast', CastController::class);
