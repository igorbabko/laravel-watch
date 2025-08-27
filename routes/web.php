<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\DeleteAccount;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LessonController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::view('/profile', 'pages.profile')->name('profile');

    Route::view('/password', 'pages.password')
        ->name('password')
        ->middleware('verified');

    Route::view('/delete-account', 'pages.delete-account')
        ->name('delete-account.show')
        ->middleware(['verified', 'password.confirm']);

    Route::delete('/delete-account', DeleteAccount::class)
        ->name('delete-account.destroy')
        ->middleware('verified');
});

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
