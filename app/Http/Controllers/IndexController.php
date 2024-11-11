<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Request $request)
    {
        $courses = Course::latest()->take(4)->get();

        return view('pages.index', compact('courses'));
    }
}
