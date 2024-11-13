@extends('admin.layouts.app')


@section('content')
    
            


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">

                <div class="bg-light rounded-top p-4">
                    <div class="">
                        <p><span class=" text-muted">Education/Question/</span><a class=" text-bold">Edit  Question</a></p>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->
            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">

                <div class="bg-light rounded-top p-4">
                    <div class="">
                        <div class="row">
                            <form action="{{ route('question.update', $question->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="row">

                                
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <select name="course_id" class="form-select" id="">
                                                <option value="">Select course</option>
                                                @if (count($courses) > 0)
                                                    @foreach ($courses as $course)
                                                        <option @if ($course->id == old('course_id') || $question->course_id == $course->id)
                                                            selected
                                                            
                                                        @endif value="{{ $course->id }}">{{ $course->title }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            <label for="floatingInput">Course</label>
                                        </div>
                                        @error('course_id')
                                            <p class=" text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <select name="module_id" class="form-select" id="">
                                                <option value="">Select Module</option>
                                                @if (count($modules) > 0)
                                                    @foreach ($modules as $module)
                                                        <option @if ($module->id == old('module_id') || $question->module_id == $module->id)
                                                            selected
                                                            
                                                        @endif value="{{ $module->id }}">{{ $module->name }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            <label for="floatingInput">Module</label>
                                        </div>
                                        @error('module_id')
                                            <p class=" text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <select name="quiz_id" class="form-select" id="">
                                                <option value="">Select Quiz</option>
                                                @if (count($quizzes) > 0)
                                                    @foreach ($quizzes as $quiz)
                                                        <option @if ($quiz->id == old('quiz_id') || $question->quiz_id == $quiz->id)
                                                            selected
                                                            
                                                        @endif value="{{ $quiz->id }}">{{ $quiz->title }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            <label for="floatingInput">Quiz</label>
                                        </div>
                                        @error('quiz_id')
                                            <p class=" text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <textarea name="question" class="form-control h-50" placeholder="Question" col="5" rows="5">{{ old('question', $question->question_text) }}</textarea>
                                            <label for="floatingInput">Question</label>
                                        </div>
                                        @error('question')
                                            <p class=" text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="option-container">
                                    @if (old('option'))
                                    @foreach(old('option', []) as $index => $optionValue)
                                        <div class="row option" data-id="{{ $index }}">
                                            <div class="col-lg-6">
                                                <div class="form-floating mb-3 d-flex align-items-center">
                                                    <input type="text" class="form-control d-inline" placeholder="Option" name="option[]" value="{{ $optionValue }}">
                                                    <span class="remove-option"><ion-icon class="close-outline" name="close-outline"></ion-icon></span>
                                                    <label for="floatingInput">Option</label>
                                                </div>
                                                <div class="form-check">
                                                    
                                                    <input class="form-check-input" name="is_correct[]" type="checkbox" value="{{ $index }}"
                                                        id="flexCheckDefault{{ $index }}"
                                                        {{ in_array($index, old('is_correct', [])) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="flexCheckDefault{{ $index }}">
                                                        Answer
                                                    </label>
                                                </div>
                                                <!-- {{-- Display error for each option --}} -->
                                                    @error("option.{$index}")
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                            </div>
                                        </div>
                                        
                                        @endforeach
                                       

                                     
                                    @else
                                    @if (count($options) > 0)
                                    @foreach ($options as $index => $option)
                                    <div class="row option" data-id="0">
                                    <div class="col-lg-6">
                                                    <div class="form-floating mb-3 d-flex align-items-center">
                                                        <input type="hidden" name="option_id[]" value="{{ $option->id }}">
                                                        <input type="text" class="form-control d-inline" placeholder="Option" name="option[]" value="{{ $option->option_text }}">
                                                        <span class="remove-option"><ion-icon class="close-outline" name="close-outline"></ion-icon></span>
                                                        <label for="floatingInput">Option</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" name="is_correct[]" type="checkbox" value="{{ $index+1 }}"
                                                            id="flexCheckDefault{{ $index }}" {{ $option->is_correct ? 'checked' : '' }}
                                                            >
                                                        <label class="form-check-label" for="flexCheckDefault{{ $index }}">
                                                            Answer
                                                        </label>
                                                    </div>
                                                    <!-- {{-- Display error for each option --}} -->
                                                        @error("option.{$index}")
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                </div>
                                            </div>
                                            @endforeach
                                            
                                        @endif
                                        

                                    @endif
                                    
                                </div>
                                
                                <div class="py-3">
                                    <a href="javascipt:void(0)" id="add-option" class="btn btn-info"><i class=" fa fa-plus"></i> Add Option</a>
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->


            @endsection 