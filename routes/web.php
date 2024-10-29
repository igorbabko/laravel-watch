<?php

use Illuminate\Support\Facades\Route;

$courses = [
    [
        'id' => 0,
        'title' => 'Course 1',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet atque cumque ea fuga numquam, porro quam quas reprehenderit sint temporibus.',
        'lessons_count' => 21,
        'length' => '2h 30min',
    ],
    [
        'id' => 1,
        'title' => 'Course 2',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet atque cumque ea fuga numquam, porro quam quas reprehenderit sint temporibus.',
        'lessons_count' => 16,
        'length' => '1h 40min',
    ],
    [
        'id' => 2,
        'title' => 'Course 3',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet atque cumque ea fuga numquam, porro quam quas reprehenderit sint temporibus.',
        'lessons_count' => 8,
        'length' => '45min',
    ],
    [
        'id' => 3,
        'title' => 'Course 4',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet atque cumque ea fuga numquam, porro quam quas reprehenderit sint temporibus.',
        'lessons_count' => 14,
        'length' => '1h 20min',
    ],
];

Route::get('/', fn () => view('index', ['courses' => $courses]))->name('index');

Route::get('/courses', fn () => view('courses', ['courses' => $courses]))->name('courses');

Route::get('/course/{id}', fn ($id) => view('course', ['course' => $courses[$id]]))->name('course');

Route::view('/contact', 'contact')->name('contact');
Route::view('/login', 'login')->name('login');
Route::view('/register', 'register')->name('register');
Route::view('/terms', 'terms')->name('terms');
Route::view('/privacy', 'privacy')->name('privacy');
