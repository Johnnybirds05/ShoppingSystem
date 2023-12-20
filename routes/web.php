<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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
//LOGIN
Route::get('/',[App\Http\Controllers\LoginController::class, 'index']);

//REGISTER
Route::get('/register',[App\Http\Controllers\RegisterController::class, 'index']);
Route::post('/login',[App\Http\Controllers\LoginController::class, 'login']);

//ADMIN
Route::get('/admin-dashboard',[App\Http\Controllers\AdminController::class, 'index']);


//SELLER
Route::get('/seller-dashboard',[App\Http\Controllers\SellerController::class, 'index']);

Route::get('/buyer-dashboard',[App\Http\Controllers\BuyerController::class, 'index']);
