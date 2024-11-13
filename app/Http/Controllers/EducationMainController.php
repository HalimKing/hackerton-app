<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\EducationCategory;
use Illuminate\Http\Request;

class EducationMainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // //
        // $courses = Course::with('category')->get();
        // $categories = EducationCategory::all();
        // return view('main.education', compact('courses', 'categories'));
        // Fetch categories for filter
        $categories = EducationCategory::all();

        // Fetch courses with pagination (e.g., 6 items per page)
        $courses = Course::paginate(3);

        // Check if request is AJAX for pagination
        if ($request->ajax()) {
            return view('partials.course', compact('courses'))->render();
        }

        return view('main.education', compact('categories', 'courses'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $course = Course::with('category')->find($id);
        return view('main.course-details', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
