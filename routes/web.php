<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $courses = DB::table('courses')->get();

    return view('index', compact('courses'));
})->name('index');

Route::get('/courses', [CourseController::class, 'index'])->name('courses');
Route::get('/course/{id}', [CourseController::class, 'show'])->name('course');

Route::view('/contact', 'contact')->name('contact');
Route::view('/login', 'login')->name('login');
Route::view('/register', 'register')->name('register');
Route::view('/terms', 'terms')->name('terms');
Route::view('/privacy', 'privacy')->name('privacy');
