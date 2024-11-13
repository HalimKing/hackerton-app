@extends('admin.layouts.app')


@section('content')
    
            


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">

                <div class="bg-light rounded-top p-4">
                    <div class="">
                        <p><span class=" text-muted">Dashboard/Employment/</span><a class=" text-bold">Jobs List</a></p>
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
                                <h4 class=" card-title">Jobs List</h4>
                                <a class=" btn btn-primary" href="{{ route('jobs.create') }}"><i class="fa fa-plus"></i> Add</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example"  class=" table table-bordered table-striped display"  style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Location</th>
                                                <th>Salary Range</th>
                                                <th>Satus</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $count = 1;
                                            @endphp
                                            @if (count($jobs) > 0)
                                                @foreach ($jobs as $job )
                                                    
                                            
                                                <tr>
                                                    <td>{{ $count }}</td>
                                                    <td>{{ $job->title }}</td>
                                                    <td>{{ $job->description }}</td>
                                                    <td>{{ $job->location }}</td>
                                                    <td>{{ $job->salary }}</td>
                                                    <td>
                                                        @if ($job->available)
                                                        <span class="badge rounded-pill bg-success">Available</span>
                                                        @else
                                                        <span class="badge rounded-pill bg-danger">Unavailable</span>
                                                        @endif
                                                       </td>
                                                    <td>
                                                        <a class=" btn btn-warning btn-sm" href="{{ route('jobs.show', $job->id) }}">View</a>
                                                        <a class=" btn btn-primary btn-sm" href="{{ route('jobs.edit', $job->id) }}">Edit</a>
                                                        <form class="d-inline" action="{{ route('jobs.destroy', $job->id) }}" method="post">
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