<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\NoteController;
use App\Http\Controllers\Api\CompanyController;
use App\Http\Controllers\Api\AttendanceController;
use App\Http\Controllers\Api\PermissionController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
Route::get('/company', [CompanyController::class, 'show'])->middleware('auth:sanctum');
Route::post('/checkin', [AttendanceController::class, 'checkin'])->middleware('auth:sanctum');
Route::post('/checkout', [AttendanceController::class, 'checkout'])->middleware('auth:sanctum');
Route::get('/is-checkin', [AttendanceController::class, 'isCheckedin'])->middleware('auth:sanctum');
Route::post('/update-profile', [AuthController::class, 'updateProfile'])->middleware('auth:sanctum');
Route::apiResource('/api-permissions', PermissionController::class)->middleware('auth:sanctum');
Route::apiResource('/api-notes', NoteController::class)->middleware('auth:sanctum');
Route::post('/update-fcm-token', [AuthController::class, 'updateFcmToken'])->middleware('auth:sanctum');
Route::get('/api-attendances', [AttendanceController::class, 'index'])->middleware('auth:sanctum');