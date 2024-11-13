@extends('admin.layouts.app')


@section('content')
    
            


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">

                <div class="bg-light rounded-top p-4">
                    <div class="">
                        <p><span class=" text-muted">Dashboard/Education/</span><a class=" text-bold">Course Details</a></p>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->
            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">

                <div class="bg-light rounded-top p-4">
                    <div class="">
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <!-- <thead> -->
                                        <tr>
                                            <th style="width: 20%;">Title</th>
                                            <td>{{ $course->title }}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 20%;">Category</th>
                                            <td>{{  optional($course->category)->name }}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 20%;">Description</th>
                                            <td>{{ $course->description }}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 20%;">Image</th>
                                            <td>
                                                <img width="150" src="{{ asset('uploads/course/'. $course->image) }}" alt="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th style="width: 20%;">File</th>
                                            <td>
                                                <a href="{{ asset('uploads/course/'. $course->file) }}">View file</a>
                                            </td>
                                        </tr>
                                    <!-- </thead> -->
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->


            @endsection