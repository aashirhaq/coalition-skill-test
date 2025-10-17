<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('tasks', TaskController::class)->except('show');
Route::post('tasks/priority', [TaskController::class, 'updatePriority'])->name('tasks.update.priority');
