<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/teach', function () {
    return view('teach');
});

Route::get('/signup', [AuthController::class, 'signup']);
Route::post('/signup', [AuthController::class, 'signup_post']);
Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'login_post'])->name('login');
Route::post('/logout', [AuthController::class, 'logout']);

Route::middleware('role:driving_school')->group(function () {
    Route::get('/driving_school/dashboard', \App\Livewire\Dashboard::class);
    Route::get('/driving_school/instructors', \App\Livewire\Instructors::class);
    Route::get('/driving_school/packages', \App\Livewire\Packages::class);
    Route::get('/driving_school/profile', \App\Livewire\DrivingSchool\Profile::class);
});

