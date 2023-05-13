<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TempatWisataController;

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
//tempat wisata
Route::get('/tempat-wisata', [TempatWisataController::class, 'viewTempatWisata']) -> name('viewTempatWisata');


// REGISTER
Route::get('/register', [RegisterController::class, 'register']) -> name('register');
Route::post('/actionRegister', [RegisterController::class, 'actionRegister']) -> name('actionRegister');
Route::get('register/verify/{verify_key}', [RegisterController::class, 'verify'])->name('verify');

// login 
Route::get('/login', [LoginController::class, 'login']) -> name('login');
Route::post('/actionLogin', [LoginController::class, 'actionLogin']) -> name('actionLogin');

// admin 
Route::get('/admin/user', [AdminController::class,'userView']) -> name('userView');
Route::get('/admin/userUpdate/{id}', [AdminController::class,'userUpdate']) -> name('update');
