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
Route::post('/admin/tempat-wisata/actionUpdate/{id}', [AdminController::class,'userUpdateAction']) -> name('userUpdateAction');
Route::get('/admin/tempat-wisata/actionDelete/{id}', [AdminController::class,'userDeleteAction']) -> name('userDeleteAction');
Route::post('/admin/tempat-wisata/actionBuat', [AdminController::class,'userCreateAction']) -> name('userCreateAction');
Route::get('/admin/tempat-wisata', [AdminController::class,'userView']) -> name('userView');
Route::get('/admin/tempat-wisata/buat', [AdminController::class,'userCreate']) -> name('userCreate');
Route::get('/admin/tempat-wisata/{id}', [AdminController::class,'userUpdate']) -> name('update');


//admin kegiatan
Route::post('/admin/kegiatan/actionUpdate/{id}', [AdminController::class,'userUpdateActionKegiatan']) -> name('userUpdateActionKegiatan');
Route::get('/admin/kegiatan/actionDelete/{id}', [AdminController::class,'userDeleteActionKegiatan']) -> name('userDeleteActionKegiatan');
Route::post('/admin/kegiatan/actionBuat', [AdminController::class,'userCreateActionKegiatan']) -> name('userCreateActionKegiatan');
Route::get('/admin/kegiatan', [AdminController::class,'userViewKegiatan']) -> name('userViewKegiatan');
Route::get('/admin/kegiatan/buat', [AdminController::class,'userCreateKegiatan']) -> name('userCreateKegiatan');
Route::get('/admin/kegiatan/{id}', [AdminController::class,'userUpdateKegiatan']) -> name('updateKegiatan');
