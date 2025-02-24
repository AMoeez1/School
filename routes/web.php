<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/service', function () {
    return view('service');
})->name('service');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/admin', function () {
    return view('admin.home');
})->name('admin');

Route::get('/register', [AuthController::class, 'register_form'])->name('register_form');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/login', [AuthController::class, 'login_form'])->name('login_form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/portal', [StudentsController::class, 'portal'])->name('portal');
Route::get('/manage-users', [AdminController::class,'manage_users'])->name('manage_users');
Route::group(['prefix' => 'admin'], function () {
    Route::get('/add-teacher', [AdminController::class, 'add_teacher_form'])->name('add_teacher_form');
    Route::post('/add-teacher', [AdminController::class, 'add_teacher'])->name('add_teacher');
    Route::get('/attendances', [AdminController::class, 'attendances'])->name('attendances');
    Route::post('/attendances', [AdminController::class, 'updateAttendance'])->name('updateAttendance');
});