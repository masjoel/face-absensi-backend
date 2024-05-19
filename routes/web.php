<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\PermissionController;

Route::get('/', function () {
    return view('pages.auth.login');
});
Route::get('register', function () {
    return view('pages.auth.register');
})->name('register');

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', function () {
        return view('pages.dashboard');
    })->name('dashboard');
    Route::resource('users', UserController::class);
    Route::resource('companies', CompanyController::class);
    Route::resource('attendances', AttendanceController::class);
    Route::resource('permissions', PermissionController::class);
});
