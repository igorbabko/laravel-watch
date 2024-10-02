<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('index');
Route::get('/courses', fn () => 'Courses')->name('courses');
Route::get('/contact', fn () => 'Contact')->name('contact');
Route::get('/login', fn () => 'Login')->name('login');
Route::get('/register', fn () => 'Register')->name('register');
