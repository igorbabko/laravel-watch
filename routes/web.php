<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessonController;
use App\Models\Course;
use App\Models\Tag;
use Illuminate\Support\Facades\Route;

Route::view('/register', 'pages.auth.register')->name('register');
Route::view('/login', 'pages.auth.login')->name('login');

Route::view('/forgot-password', 'pages.auth.forgot-password')->name('password.request');
Route::view('/reset-password', 'pages.auth.reset-password')->name('password.reset');
Route::view('/verify-email', 'pages.auth.verify-email')->name('verification.notice');
Route::view('/confirm-password', 'pages.auth.confirm-password')->name('password.confirm');

Route::get('/', function () {
    $popularCourses = Course::skip(4)->take(4)->get();
    $latestCourses = Course::take(4)->get();
    $tags = Tag::get();

    return view('index', [
        'popularCourses' => $popularCourses,
        'latestCourses' => $latestCourses,
        'tags' => $tags,
    ]);
})->name('index');
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('/lessons/{lesson:slug}', [LessonController::class, 'show'])->name('lessons.show');
Route::get('/courses/{course:slug}', [CourseController::class, 'show'])->name('courses.show');
Route::view('/contact', 'contact')->name('contact');
Route::view('/privacy', 'index')->name('privacy');
Route::view('/terms', 'index')->name('terms');
