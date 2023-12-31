<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('websites.welcome');
// });
Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'home'])->name('home');
Route::get('/login',[AuthController::class,'loginView'])->name('loginView');
Route::get('/register',[AuthController::class,'registerView'])->name('registerView');


