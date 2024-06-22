<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PreschoolController; // Adjust namespace as per your controller location
use App\Http\Controllers\ChildController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\DashboardController;

// Define routes under /admin prefix and admin namespace
 

Route::prefix('admin')->group(function () {
    Route::get('dashBoard',[DashboardController::class, 'dashBoard'])->name('dashBoard');
    Route::get('login',[DashboardController::class, 'login'])->name('login');
    Route::get('register',[DashboardController::class, 'register'])->name('register');
    Route::get('tables',[DashboardController::class, 'tables'])->name('tables');
    Route::get('forgotPassword',[DashboardController::class, 'forgotPassword'])->name('forgotPassword');
    /*
    Route::get('error',[DashboardController::class, 'error'])->name('error');
    Route::get('blank',[DashboardController::class, 'blank'])->name('blank');
    Route::get('buttons',[DashboardController::class, 'buttons'])->name('buttons');
    Route::get('cards',[DashboardController::class, 'cards'])->name('cards');
    Route::get('charts',[DashboardController::class, 'charts'])->name('charts');
    Route::get('animation',[DashboardController::class, 'animation'])->name('animation');
    Route::get('border',[DashboardController::class, 'border'])->name('border');
    Route::get('color',[DashboardController::class, 'color'])->name('color');
    Route::get('other',[DashboardController::class, 'other'])->name('other');
    */

    Route::get('childrenTable', [ChildController::class, 'index'])->name('admin.childrenTable');
    Route::get('childrenTable/{id}/edit', [ChildController::class, 'edit'])->name('admin.editChildren');
    Route::put('childrenTable/{id}', [ChildController::class, 'update'])->name('admin.updateChildren');

    // Teachers table routes
    Route::get('teachersTable', [TeacherController::class, 'index'])->name('admin.teachersTable');
    Route::get('teachersTable/{id}/edit', [TeacherController::class, 'edit'])->name('admin.editTeachers');
    Route::put('teachersTable/{id}', [TeacherController::class, 'update'])->name('admin.updateTeachers');

    // Classes table routes
    Route::get('classesTable', [ClassController::class, 'index'])->name('admin.classesTable');
    })->middleware('verified');

    Auth::routes(['verify'=>true]);
    Route::get('/admin.index', [App\Http\Controllers\HomeController::class, 'index'])->middleware('verified')->name('admin.index');

    // Children table routes
   



