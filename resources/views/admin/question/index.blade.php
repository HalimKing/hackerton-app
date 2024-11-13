@extends('admin.layouts.app')


@section('content')
    
            


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">

                <div class="bg-light rounded-top p-4">
                    <div class="">
                        <p><span class=" text-muted">Education/Questions/</span><a class=" text-bold">Questions List</a></p>
                    </div>
                </div>
            </div>
            <div class="container-fluid pt-4 px-4">

                @include('admin.inc.message')
            </div>
            <!-- Sale & Revenue End -->
            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">

                <div class="bg-light rounded-top p-4">
                    <div class="">
                        <div class="card">
                            <div class="card-header" style="display: flex; justify-content: space-between">
                                <h4 class=" card-title">Questions</h4>
                                <a class=" btn btn-primary" href="{{ route('question.create') }}"><i class="fa fa-plus"></i> Add</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example"  class=" table table-bordered table-striped display"  style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Course</th>
                                                <th>Module</th>
                                                <th>Quiz Name</th>
                                                <th>Question</th>
                                                <th>Options</th>
                                                <th>Answer</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $count = 1;
                                            @endphp
                                            @if (count($questions) > 0) 
                                                @foreach ($questions as $question )
                                               
                                                <tr>
                                                    <td>{{ $count }}</td>
                                                    <td>{{ $question->course->title }}</td>
                                                    <td>{{ $question->module->name }}</td>
                                                    <td>{{ $question->quiz->title }}</td>
                                                    <td>{{ $question->question_text }}</td>
                                                    <td>
                                                        <ul>
                                                            @foreach ($question->option as $option)
                                                                <li>{{ $option->option_text }}</li>
                                                            @endforeach
                                                        </ul>
                                                      
                                                    </td>
                                                    <td>
                                                        <ul>
                                                            
                                                        </ul>
                                                        @foreach ($question->option as $option)
                                                            @if ($option->is_correct == 1)
                                                            <li> {{ $option->option_text }}</li>
                                                               
                                                            @endif
                                                            
                                                        @endforeach
                                                    </td>
                                                    <td>
                                                        <a class=" btn btn-warning btn-sm" href="{{ route('question.show', $question->id) }}">View</a>
                                                        <a class=" btn btn-primary btn-sm" href="{{ route('question.edit', $question->id) }}">Edit</a>
                                                        <form class=" d-inline" action="{{ route('question.destroy', $question->id) }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class=" btn btn-danger btn-sm">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                    @php
                                                        $count++;
                                                    @endphp
                                            @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->


            @endsection