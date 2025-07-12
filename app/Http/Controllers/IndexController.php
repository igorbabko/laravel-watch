<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Tag;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Request $request)
    {
        $courses = Course::latest()->take(4)->get();
        $tags = Tag::get();

        return view('pages.index', compact('courses', 'tags'));
    }
}
