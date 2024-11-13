<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $quizzes = Quiz::all();
        return view('admin.quiz.index',compact('quizzes'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.quiz.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required|max:255|unique:quizzes,title',
            'description' => 'nullable',
        ]);

        $quiz = new Quiz;
        $quiz->title = $request->title;
        $quiz->description = $request->description;
        $quiz->save();
        return redirect()->route('quiz.index')->with('success', 'Quiz created successfully!');
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
        //
        $quiz = Quiz::find($id);
        return view('admin.quiz.edit', compact('quiz'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'title' => 'required|max:255|unique:quizzes,title,' . $id,
            'description' => 'nullable',
        ]);

        $quiz = Quiz::find($id);
        $quiz->title = $request->title;
        $quiz->description = $request->description;
        $quiz->save();
        return redirect()->route('quiz.index')->with('success', 'Quiz updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $quiz = Quiz::find($id);
        $quiz->delete();
        return redirect()->route('quiz.index')->with('success', 'Quiz deleted successfully!');

    }
}
