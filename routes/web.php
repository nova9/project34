<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/teach', function () {
    return view('teach');
});

Route::get('/signup', [\App\Http\Controllers\AuthController::class, 'signup']);
Route::post('/signup', [\App\Http\Controllers\AuthController::class, 'signup_post']);
Route::get('/login', [\App\Http\Controllers\AuthController::class, 'login']);
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login_post'])->name('login');
Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout']);

Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::prefix('/driving_school')->group(function () {
    Route::get('/dashboard', \App\Livewire\DrivingSchool\Dashboard::class);
    Route::get('/instructors', \App\Livewire\DrivingSchool\Instructors::class);
    Route::get('/packages', \App\Livewire\DrivingSchool\Packages::class);
    Route::get('/students', \App\Livewire\DrivingSchool\Students::class);
    Route::get('/lessons', \App\Livewire\DrivingSchool\Lessons::class);
});
Route::get('/profile', \App\Livewire\Profile::class);

