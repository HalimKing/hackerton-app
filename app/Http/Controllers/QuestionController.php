<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Module;
use App\Models\Option;
use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $questions = Question::with(['quiz','quiz.module','course'])->get();
        return view('admin.question.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $courses = Course::all();
        $modules = Module::all();
        $quizzes = Quiz::all();
        return view('admin.question.create', compact('courses','modules','quizzes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'course_id' => 'required|exists:courses,id',
            'module_id' => 'required|exists:modules,id',
            'quiz_id' => 'required|exists:quizzes,id',
            'question' => 'required|string|max:255',
            'option' => 'required|array|min:2', // At least two options required
            'option.*' => 'required|string|max:255', // Each option must be a string
            'is_correct' => 'required|array',
        ]);
    
        // Store the question
        $question = new Question;
        $question->course_id = $request->course_id;
        $question->module_id = $request->module_id;
        $question->quiz_id = $request->quiz_id;
        $question->question_text = $request->question;
        $question->save();
    
        // Store the options
        // Output the counts for debugging
        $checkedIndices = $request->is_correct ?? [];
        $countIndices = count($checkedIndices);
        // dd($checkedIndices);
        // Display the checked indices for debugging
        




        // dd($checkedIndices);
        // dd($question->id);
        // Loop through the options and store each one

        
        foreach ($request->option as $index => $optionText) {
            // Check if this option's index is in the is_correct array
            $isCorrect = in_array($index+1, $request->is_correct ?? []);
            // echo 'index => ' . $index . '<br>';
           
            // echo 'is_correct =>' . $optionText . '<br>';
            // echo 'is_correct =>' . $isCorrect . '<br>';
            // echo '<hr>';
            $option = new Option;
            $option->question_id = $question->id;
            $option->option_text = $optionText;
            $option->is_correct = $isCorrect;
            $option->save();
            
        
        }
      

        return redirect()->route('question.index')->with('success','Question added successfully');
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
        // $question = Question::findOrFail($id);
        $question = Question::with(['quiz','quiz.module','course'])->find($id);
        $options = Option::where('question_id',$question->id)->get();
        $courses = Course::all();
        $modules = Module::all();
        $quizzes = Quiz::all();
        return view('admin.question.edit', compact('question','options','courses','modules','quizzes'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'course_id' => 'required|exists:courses,id',
            'module_id' => 'required|exists:modules,id',
            'quiz_id' => 'required|exists:quizzes,id',
            'question' => 'required|string|max:255',
            'option' => 'required|array|min:2', // At least two options required
            'option.*' => 'required|string|max:255', // Each option must be a string
            'is_correct' => 'required|array',
            
        ]);
    
        // Store the question
        $question = Question::find($id);
        $question->course_id = $request->course_id;
        $question->module_id = $request->module_id;
        $question->quiz_id = $request->quiz_id;
        $question->question_text = $request->question;
        // $question->save();

                // dd($request->option_id[1]);



        foreach ($request->option as $key => $optionData) {
            if (strpos($key, 'new-') === 0) {
                // Handle new option
                // Option::create([
                //     'question_id' => $question->id,
                //     'option_text' => $optionData['text'],
                //     'is_correct' => isset($optionData['is_correct']) && $optionData['is_correct'] == '1',
                // ]);
                // echo $key;
                // dd($request->option_id);
            } else {
                $option_id = $request->option_id[$key];
                // Update existing option
                // $option = Option::find($key);
                echo "------";
                echo $optionData;
                $option = Option::find($key);
                if ($option) {
                    echo 'Option_text => ' . $option->option_text . '<br>';
                    echo 'option_id => ' . $option_id . '<br>';

                    $option->option_text = $optionData;
                    $option->is_correct = isset($optionData['is_correct']) && $optionData['is_correct'] == '1';
                    // $option->save();
                    // $option->update([
                    //     'option_text' => $optionData['text'],
                    //     'is_correct' => isset($optionData['is_correct']) && $optionData['is_correct'] == '1',
                    // ]);
                }
            }
        }



    
        // Store the options
        // foreach ($request->option as $index => $optionText) {
        //     // Check if this option's index is in the is_correct array
        //     $isCorrect = in_array($index+1, $request->is_correct ?? []);
        //     // echo 'index => ' . $index . '<br>';
        //     // echo 'is_correct =>' . $optionText . '<br>';
        //     // echo 'is_correct =>' . $isCorrect . '<br>';
        //     // echo '<hr>';
        //     $option = Option::where('question_id', $question->id)->where('option_text', $optionText)->first();
        //     if (!$option) {
        //         $option = new Option;
        //         $option->question_id = $question->id;
        //     }
        //     $option->option_text = $optionText;
        //     $option->is_correct = $isCorrect;
        //     $option->save();
        // }
        // return redirect()->route('question.index')->with('success','Question updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $question = Question::find($id);
        $question->delete();
        Option::where('question_id', $id)->delete();
        return redirect()->route('question.index')->with('success','Question deleted successfully');
    }
}
