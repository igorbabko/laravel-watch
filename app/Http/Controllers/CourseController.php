<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class CourseController extends Controller
{
    public function index(): View
    {
        $courses = DB::table('courses')->get();

        return view('courses', compact('courses'));
    }

    public function show(string $id): View
    {
        $course = DB::table('courses')->find($id);

        return view('course', compact('course'));
    }
}
