<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\View\View;

class CourseController extends Controller
{
    public function index(): View
    {
        $courses = Course::get();

        return view('pages.courses.index', compact('courses'));
    }

    public function show(string $id): View
    {
        $course = Course::find($id);

        return view('pages.courses.show', compact('course'));
    }
}
