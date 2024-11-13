@extends('admin.layouts.app')


@section('content')
    
            


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">

                <div class="bg-light rounded-top p-4">
                    <div class="">
                        <p><span class=" text-muted">Dashboard/Education/</span><a class=" text-bold">Courses List</a></p>
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
                                <h4 class=" card-title">Category List</h4>
                                <a class=" btn btn-primary" href="{{ route('course.create') }}"><i class="fa fa-plus"></i> Add</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example"  class=" table table-bordered table-striped display"  style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Category</th>
                                                <th>image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $count = 1;
                                            @endphp
                                            @if (count($courses) > 0) 
                                                @foreach ($courses as $course )
                                               
                                                <tr>
                                                    <td>{{ $count }}</td>
                                                    <td>{{ $course->title }}</td>
                                                    <td>{{ $course->description }}</td>
                                                    <td>{{ $course->category->name }}</td>
                                                    <td><img width="100" src="{{ asset('uploads/course/'. $course->image) }}" alt=""></td>
                                                    <td>
                                                        <a class=" btn btn-warning btn-sm" href="{{ route('course.show', $course->id) }}">View</a>
                                                        <a class=" btn btn-primary btn-sm" href="{{ route('course.edit', $course->id) }}">Edit</a>
                                                        <form class=" d-inline" action="{{ route('course.destroy', $course->id) }}" method="post">
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