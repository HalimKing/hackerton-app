<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEducationCategoryRequest;
use App\Http\Requests\UpdateEducationCategoryRequest;
use App\Models\EducationCategory;
use Illuminate\Http\Request;

class EducationCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = EducationCategory::all();
        return view('admin.educationCategory.index', compact('categories'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.educationCategory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEducationCategoryRequest $request)
    {
        print_r($request->all());
        $category = new EducationCategory;
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
        return redirect()->route('education-category.index')->with('success', 'Category created successfully');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = EducationCategory::find($id);
        return view('admin.educationCategory.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEducationCategoryRequest $request, string $id)
    {
        $category = EducationCategory::find($id);
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
        return redirect()->route('education-category.index')->with('success', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = EducationCategory::find($id);
        $category->delete();
        return redirect()->route('education-category.index')->with('success', 'Category deleted successfully');
    }
}
