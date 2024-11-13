@extends('admin.layouts.app')


@section('content')
    
            


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">

                <div class="bg-light rounded-top p-4">
                    <div class="">
                        <p><span class=" text-muted">Education/Quiz/</span><a class=" text-bold">Quiz List</a></p>
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
                                <h4 class=" card-title">Quiz List</h4>
                                <a class=" btn btn-primary" href="{{ route('quiz.create') }}"><i class="fa fa-plus"></i> Add</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example"  class=" table table-bordered table-striped display"  style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $count = 1;
                                            @endphp
                                            @if (count($quizzes) > 0)
                                                @foreach ($quizzes as $quiz)
                                                    
                                                
                                                <tr>
                                                    <td>{{ $count }}</td>
                                                    <td>{{ $quiz->title }}</td>
                                                    <td>{{ $quiz->description }}</td>
                                                    <td class="d-flex gap-2">
                                                        <a class=" btn btn-primary btn-sm" href="{{ route('quiz.edit', $quiz->id) }}">Edit</a>
                                                        <form action="{{ route('quiz.destroy', $quiz->id) }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class=" btn btn-danger btn-sm" type="submit">Delete</button>
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