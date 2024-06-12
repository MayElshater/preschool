<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PreschoolController;

Route::get('/', function () {
    return view('test');
});
Route::get('home', [PreschoolController::class, 'home'])->name('home');
Route::get('about', [PreschoolController::class, 'about'])->name('about');
Route::get('team', [PreschoolController::class, 'team'])->name('team');
Route::get('error', [PreschoolController::class, 'error'])->name('error');
Route::get('appointment', [PreschoolController::class, 'appointment'])->name('appointment');
Route::get('calltoaction', [PreschoolController::class, 'calltoaction'])->name('calltoaction');
Route::get('classes', [PreschoolController::class, 'classes'])->name('classes');
Route::get('contact', [PreschoolController::class, 'contact'])->name('contact');
Route::get('facility', [PreschoolController::class, 'facility'])->name('facility');
Route::get('testimonial', [PreschoolController::class, 'testimonial'])->name('testimonial');


