<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'auth'])->name('auth.login');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('auth.register');
});

Route::get('/', function () {
    return view('frontend.home');
})->name('home');

Route::group(['middleware' => ['auth']], function () {
    // Admin Routes
    Route::get('/dashboard', function () {
        return view('admin.dashboard.index');
    })->name('dashboard');

    Route::get('/blank', function () {
        return view('blank');
    })->name('blank');

    Route::controller(SettingController::class)->prefix('/setting')->group(function () {
        Route::get('/', 'index')->name('setting.index');
        Route::post('/', 'store')->name('setting.store');
    });

    Route::controller(ProfileController::class)->prefix('/profile')->group(function () {
        Route::get('/', 'index')->name('profile.index');
        Route::get('/edit', 'edit')->name('profile.edit');
        Route::post('/', 'store')->name('profile.store');
    });

    // Logout Route
    Route::post('/logout', function () {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');
    })->name('logout');
});
