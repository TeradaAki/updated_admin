<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\DashboardController;

// First route where the user would first view which is the login page
Route::get('/',[CustomAuthController::class, 'login'])->middleware('alreadyLoggedIn');

// Second route where the user would go once clicked on the link
Route::get('/registration',[CustomAuthController::class, 'registration'])->middleware('alreadyLoggedIn');

Route::post('/register-user',[CustomAuthController::class, 'registerUser'])->name('register-user');
Route::post('/login-user',[CustomAuthController::class, 'loginUser'])->name('login-user');
Route::get('/dashboard',[CustomAuthController::class, 'dashboard'])->middleware('isLoggedIn');
Route::get('/logout', [CustomAuthController::class, 'logout']);

// DASHBOARD 
Route::get('/dashboard', [DashboardController::class, 'dashboard']);

// CUSTOMER 
Route::get('/customer', [DashboardController::class, 'customer']);

// Route::get('/', function () {
//     return view('login');
// });
