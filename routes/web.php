<?php

use Illuminate\Support\Facades\Route;
require __DIR__.'/admin.php';
use App\Http\Controllers\PreschoolController;
use App\Http\Controllers\ChildController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactUsController;


Route::get('contactus', [ContactUSController::class, 'contactUS'])->name('contactus');
Route::post('contact-us', [ContactUSController::class, 'contactUSPost'])->name('contactus.store');

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', [PreschoolController::class, 'home1'])->name('home1');
Route::get('about', [PreschoolController::class, 'about'])->name('about');
Route::get('team', [PreschoolController::class, 'team'])->name('team');
Route::get('error', [PreschoolController::class, 'error'])->name('error');
Route::get('appointment', [PreschoolController::class, 'appointment'])->name('appointment');
Route::get('calltoaction', [PreschoolController::class, 'calltoaction'])->name('calltoaction');
Route::get('classes', [PreschoolController::class, 'classes'])->name('classes');
Route::get('contact', [PreschoolController::class, 'contact'])->name('contact');
Route::get('facility', [PreschoolController::class, 'facility'])->name('facility');
Route::get('testimonial', [PreschoolController::class, 'testimonial'])->name('testimonial');
/*
//Route::get('admin/childrenTable', [PreschoolController::class, 'children'])->name('admin.childrenTable');
//Route::get('admin/teachersTable', [PreschoolController::class, 'teachers'])->name('admin.teachersTable');
//Route::get('admin/classesTable', [PreschoolController::class, 'class'])->name('admin.classesTable');

Route::get('admin/dashBoard',[PreschoolController::class, 'dashBoard'])->name('admin.dashBoard');
Route::post('admin/register',[PreschoolController::class, 'register'])->middleware('verified')->name('admin.register');
Route::post('admin/login',[PreschoolController::class, 'login'])->middleware('verified')->name('admin.login');

//Route::get('admin/tables',[DashboardController::class, 'tables'])->name('tables');
Route::get('admin/forgotPassword',[PreschoolController::class, 'forgotPassword'])->name('admin.forgotPassword');


Route::get('admin/childrenTable', [ChildController::class, 'index'])->middleware('verified')->name('admin.childrenTable');
Route::get('admin/childrenTable/{id}/editChildren', [ChildController::class, 'edit'])->name('admin.editChildren');
Route::put('admin/childrenTable/{id}', [ChildController::class, 'update'])->name('admin.updateChildren');


Route::get('admin/teachersTable', [TeacherController::class, 'index'])->name('admin.teachersTable');
Route::get('admin/childrenTable/{id}/editTeachers', [TeacherController::class, 'edit'])->name('admin.editTeachers');
Route::put('admin/childrenTable/{id}', [TeacherController::class, 'update'])->name('admin.updateTeachers');



Route::get('admin/classesTable', [ClassController::class, 'index'])->name('admin.classesTable');
*/
/*
Auth::routes(['verify'=>true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('verified')->name('home');
*/

/*
Route::prefix('admin')->group(function () {
    Route::get('dashBoard', [PreschoolController::class, 'dashBoard'])->name('admin.dashBoard');
    Route::get('login', [PreschoolController::class, 'login'])->name('admin.login');
    Route::get('register', [PreschoolController::class, 'register'])->name('admin.register');
    Route::get('tables', [PreschoolController::class, 'tables'])->name('admin.tables');
    Route::get('forgotPassword', [PreschoolController::class, 'forgotPassword'])->name('admin.forgotPassword');
    Route::get('eroPage', [PreschoolController::class, 'eroPage'])->name('admin.eroPage');
    Route::get('blank', [PreschoolController::class, 'blank'])->name('admin.blank');
    Route::get('buttons', [PreschoolController::class, 'buttons'])->name('admin.buttons');
    Route::get('cards', [PreschoolController::class, 'cards'])->name('admin.cards');
    Route::get('charts', [PreschoolController::class, 'charts'])->name('admin.charts');
});*/




/*
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/