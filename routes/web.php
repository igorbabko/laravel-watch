<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LessonController;
use Illuminate\Support\Facades\Route;

Route::view('/profile', 'pages.profile')->name('profile')->middleware(['auth', 'password.confirm']);
Route::view('/password', 'pages.password')->name('password')->middleware(['auth', 'verified']);

Route::view('/delete-account', 'pages.delete-account')->name('delete-account.show')->middleware(['verified', 'password.confirm']);

Route::get('/', IndexController::class)->name('index');

Route::controller(CourseController::class)
    ->prefix('courses')
    ->name('courses.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/{course}', 'show')->name('show');
    });

Route::get('/lessons/{lesson}', [LessonController::class, 'show'])->name('lessons.show');

Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/terms', 'pages.terms')->name('terms');
Route::view('/privacy', 'pages.privacy')->name('privacy');
