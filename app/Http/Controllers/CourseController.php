<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        return view('courses.index', ['courses' => Course::get()]);

        //        return Course::withRelationships(request('with'))
        //            ->search(request('query'))
        //            ->orderBy(request('sort', 'name'), request('order', 'asc'))
        //            ->simplePaginate(request('limit'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseRequest $request)
    {
        //
    }

    public function show(Course $course)
    {
        return view('courses.show', $course);

        //        return $course->loadRelationships(request('with'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
