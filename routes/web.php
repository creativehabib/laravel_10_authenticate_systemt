<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
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

Route::get('/',HomeController::class)->name('home');

Route::group(['middleware' => 'auth'], function (){
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
});

Route::group(['middleware' => 'guest'], function (){
    Route::get('/login', [AuthController::class, 'loginView'])->name('login');
    Route::get('/register', [AuthController::class, 'index'])->name('register');
});


Route::post('/login', [AuthController::class, 'login']);


Route::post('/register', [AuthController::class, 'store']);

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
