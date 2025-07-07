<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CourseController extends Controller
{
    public function index(Request $request): View
    {
        $courses = Course::latest()
            ->withSum('lessons as length', 'length')
            ->search($request->search)
            ->tagged($request->tags)
            ->paginate()
            ->withQueryString();

        $tags = Tag::get();

        return view('pages.courses.index', compact('courses', 'tags'));
    }

    public function show(Course $course): View
    {
        return view('pages.courses.show', compact('course'));
    }
}
