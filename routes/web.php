<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\DeleteAccountController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LessonController;
use Illuminate\Support\Facades\Route;

Route::view('/profile', 'pages.profile')->name('profile')->middleware(['auth', 'password.confirm']);
Route::view('/password/update', 'pages.auth.update-password')->name('password.update')->middleware(['auth', 'verified']);

Route::get('/account/delete', [DeleteAccountController::class, 'show'])->name('account.delete')->middleware(['auth', 'verified']);
Route::delete('/account', [DeleteAccountController::class, 'destroy'])->name('account.destroy')->middleware(['auth', 'verified']);

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
