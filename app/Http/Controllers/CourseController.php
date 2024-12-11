<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CourseController extends Controller
{
    public function index(Request $request): View
    {
        dump($request->all());

        $courses = Course::latest()
            ->withSum('lessons as length', 'length')
            ->when($request->search, fn (Builder $query) => $query
                ->where(fn (Builder $query) => $query
                    ->whereLike('title', "%{$request->search}%")
                    ->orWhereLike('description', "%{$request->search}%")
                )
            )
            ->when($request->tags, function (Builder $query) use ($request) {
                collect($request->tags)
                    ->each(fn ($tagId) => $query
                        ->whereHas('tags', fn (Builder $query) => $query
                            ->where('tags.id', $tagId)
                        )
                    );

                return $query;
            })
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
