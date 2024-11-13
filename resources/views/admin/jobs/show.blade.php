@extends('admin.layouts.app')


@section('content')
    
            


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">

                <div class="bg-light rounded-top p-4">
                    <div class="">
                        <p><span class=" text-muted">Dashboard/Education/</span><a class=" text-bold">job Details</a></p>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->
            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">

                <div class="bg-light rounded-top p-4">
                    <div class="">
                        <div class="row">
                            <h4>Job Info</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <!-- <thead> -->
                                        <tr>
                                            <th style="width: 20%;">Title</th>
                                            <td>{{ $job->title }}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 20%;">Location</th>
                                            <td>{{ $job->location }}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 20%;">Description</th>
                                            <td>{{ $job->description }}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 20%;">Salary</th>
                                            <td>
                                                {{ $job->salary }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th style="width: 20%;">Link</th>
                                            <td>
                                                <a href="{{ $job->url }}">{{ $job->url }}</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th style="width: 20%;">Available</th>
                                            <td>
                                            @if($job->available) Available @else Unavailable @endif
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