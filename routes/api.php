<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\JobController;


Route::get('/', function () {
    return response()->json(['status' => 'Welcome to Quick Hire']);
});

Route::prefix('jobs')->group(function () {
    Route::get('/', [JobController::class, 'index']);       // List all jobs
    Route::get('{id}', [JobController::class, 'show']);    // Get single job details
    Route::post('/', [JobController::class, 'store']);     // Create job (Admin)
    Route::delete('{id}', [JobController::class, 'destroy']); // Delete job (Admin)
});

Route::post('applications', [ApplicationController::class, 'store']); // Submit application