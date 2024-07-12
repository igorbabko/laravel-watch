<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index');
Route::view('/courses', 'courses.index');
Route::view('/courses/{course}', 'courses.show');
Route::view('/lessons/{lesson}', 'lessons.show');
Route::view('/contact', 'contact');
