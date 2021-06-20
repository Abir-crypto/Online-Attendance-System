<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\LoginController::class, 'index'])->name('login.page');
Route::get('/login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::get('/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

Route::get('/registration', [\App\Http\Controllers\RegistrationController::class, 'index'])->name('registration.page');
Route::post('/register', [\App\Http\Controllers\RegistrationController::class, 'register'])->name('register');
Route::put('/change/pass', [\App\Http\Controllers\RegistrationController::class, 'changePass'])->name('change.pass');
Route::get('/change/pass/page', [\App\Http\Controllers\RegistrationController::class, 'gotoChangePass'])->name('change.pass.page');

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/course/page', [\App\Http\Controllers\CourseController::class, 'index'])->name('course.page');
Route::post('/add/course', [\App\Http\Controllers\CourseController::class, 'addCourse'])->name('add.course');
Route::get('/course/{course}/student', [\App\Http\Controllers\CourseController::class, 'showCourseStudent'])->name('course.student');


Route::get('/attendance/{course}/page', [\App\Http\Controllers\AttendanceController::class, 'index'])->name('attendance.page');
Route::get('/attendance/{course}/submit', [\App\Http\Controllers\AttendanceController::class, 'submitAttendance'])->name('attendance.submit');
