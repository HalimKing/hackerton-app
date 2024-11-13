<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseStoreRequest;
use App\Http\Requests\CourseUpdateRequest;
use App\Models\Course;
use App\Models\EducationCategory;
use App\Models\Module;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use function Pest\Laravel\json;

class CourseCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $courses = Course::with('category')->get();
        return  view('admin.course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = EducationCategory::all();
        $modules = Module::all();
        return view('admin.course.create', compact('categories','modules'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CourseStoreRequest $request)
    {
        //
        $file = $request->file('image');
        $extention = $file->getClientOriginalExtension();
        $filenameImage = time() . '.' . $extention;
        $file->move('uploads/course', $filenameImage);



        $fileName = time() . '.html';
        $file = fopen(public_path('uploads/html/' . $fileName), "w");
        fwrite($file, $request->input('content'));
        fclose($file);





        $category = new Course;
        $category->title = $request->title;
        $category->description = $request->description;
        $category->category_id = $request->category_id;
        $category->image = $filenameImage;
        $category->file = $fileName;
        $category->save();
        return redirect()->route('course.index')->with('success', 'Category created successfully');

        // print_r($request->all());

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $course = Course::with('category')->findOrFail($id);
        
        return view('admin.course.show',compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $course = Course::with('category')->findOrFail($id);
        
                $filePath = public_path('uploads/html/' . $course->file); // Adjust the filename if necessary
        
                // Check if the file exists and read its content
                $content = file_exists($filePath) ? file_get_contents($filePath) : '';
                
        $categories = EducationCategory::all();
        return view('admin.course.edit',compact('course','categories','content'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CourseUpdateRequest $request, string $id)
    {
        $course = Course::find($id);
    
        // Check and update the 'image' field if a new file is uploaded
        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');
            $imageExtension = $imageFile->getClientOriginalExtension();
            $imageFilename = time() . '_image.' . $imageExtension;
            $imageFile->move('uploads/course', $imageFilename);
            $course->image = $imageFilename;
        }
    
        // Check and update the 'file' field if a new file is uploaded
        // if ($request->hasFile('file')) {
        //     $courseFile = $request->file('file');
        //     $fileExtension = $courseFile->getClientOriginalExtension();
        //     $fileFilename = time() . '_file.' . $fileExtension;
        //     $courseFile->move('uploads/course', $fileFilename);
        //     $course->file = $fileFilename;
        // }
    

        $fileName = $course->file;
        $file = fopen(public_path('uploads/html/' . $fileName), "w");
        fwrite($file, $request->input('content'));
        fclose($file);
        
    
        // Update other fields
        $course->title = $request->title;
        $course->description = $request->description;
        $course->category_id = $request->category_id;
    
        // Save the updated course data
        $course->save();
    
        return redirect()->route('course.index')->with('success', 'Successfully updated!');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $course = Course::find($id);
        $course->delete();
        return redirect()->route('course.index')->with('success', 'Successful deleted!');
    }
}
