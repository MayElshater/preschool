<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PreschoolController;
use App\Http\Controllers\ChildController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;

// Admin routes requiring verification
Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    //Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('login', [PreschoolController::class, 'login'])->name('login');
    Route::post('register', [PreschoolController::class, 'register'])->name('register');
    Route::get('tables', [DashboardController::class, 'tables'])->name('tables');
    Route::get('forgot-password', [PreschoolController::class, 'forgotPassword'])->name('forgotPassword');

    // Children table routes
    Route::get('children', [ChildController::class, 'index'])->name('admin.childrenTable');
    Route::get('children/{id}/edit', [ChildController::class, 'edit'])->name('admin.editChildren');
    Route::put('children/{id}', [ChildController::class, 'update'])->name('admin.updateChildren');
    Route::get('child/{id}', [ChildController::class, 'show'])->name('admin.showChild');

    // Teachers table routes
    Route::get('teachers', [TeacherController::class, 'index'])->name('admin.teachersTable');
    Route::get('teachers/{id}/edit', [TeacherController::class, 'edit'])->name('admin.editTeachers');
    Route::put('teachers/{id}', [TeacherController::class, 'update'])->name('admin.updateTeachers');
    Route::get('teacher/{id}', [TeacherController::class, 'show'])->name('showTeacher');
    
   Route::post('/logout', function () { Auth::logout(); return redirect('/'); })->name('logout');

    // Classes table routes
    Route::get('classes', [ClassController::class, 'index'])->name('admin.classesTable');
});

// Home route after successful login and verification
Route::get('/admin.index', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('admin.index');

// Default Laravel authentication routes with verification
Auth::routes(['verify' => true]);