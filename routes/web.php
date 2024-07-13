<?php

use Illuminate\Support\Facades\Route;

Route::view('/register', 'register')->name('register');
Route::view('/login', 'login')->name('login');

Route::view('/forgot-password', 'forgot-password')->name('password.request');

Route::view('/', 'index')->name('index');
Route::view('/courses', 'courses.index')->name('courses.index');
Route::view('/courses/{course}', 'courses.show')->name('courses.show');
Route::view('/lessons/{lesson}', 'lessons.show')->name('lessons.show');
Route::view('/contact', 'contact')->name('contact');
