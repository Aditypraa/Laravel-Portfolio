<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;

Route::get('/auth', [AuthController::class, 'index'])->name('login')->middleware('guest');
// Redirect To AKUN GOOGLE
Route::get('/auth/redirect', [AuthController::class, 'redirect'])->middleware('guest');

/*
Callback Menuju ke halaman Utama/Hlaman Admin
route atau uri atau Url ini sesuai dengan setingan yang ada di google cloud
*/
Route::get('/auth/callback', [AuthController::class, 'callback'])->middleware('guest');
Route::get('/auth/logout', [AuthController::class, 'logout']);


// Mengarahkan ke halaman Dashboard
Route::redirect('home', 'dashboard');
Route::get('/dashboard', function () {
    return view('layouts.app');
})->middleware('auth');

// Dashboard Controller
Route::prefix('dashboard')->middleware('auth')->group(
    function () {
        Route::get('/', function () {
            return view('layouts.app');
        });
        Route::get('/', [DashboardController::class, 'index']);
        Route::resource('halaman', DashboardController::class);

        //EXPERIENCE
        Route::resource('experience', ExperienceController::class);
        //Education
        Route::resource('education', EducationController::class);
    }
);
