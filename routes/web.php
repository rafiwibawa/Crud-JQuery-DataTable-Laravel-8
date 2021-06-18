<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Auth\LoginController;
use \App\Http\Controllers\Auth\ForgotPasswordController;
use \App\Http\Controllers\UserController;

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
Route::get('/login',  [LoginController::class, 'index'])->name('login');
Route::post('/login',  [LoginController::class, 'login']);

Route::get('/forgot-password',  [ForgotPasswordController::class, 'index']);
Route::post('/forgot-password',  [ForgotPasswordController::class, 'send_email']);

Route::middleware(['auth'])->group(function () {
    
    Route::get('/', function () {
        return view('dashboard.index');
    })->name('home'); 
   
    Route::post('/user/dt',  [UserController::class, 'dt']);
    Route::resource('/user',  UserController::class);

    Route::get('/logout',  [LoginController::class, 'logout'])->name('logout');
});