@extends('admin.layouts.app')


@section('content')
    
            


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">

                <div class="bg-light rounded-top p-4">
                    <div class="">
                        <p><span class=" text-muted">Dashboard/Users/</span><a class=" text-bold">Users List</a></p>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->
            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">

                <div class="bg-light rounded-top p-4">
                    <div class="">
                        <div class="card">
                            <div class="card-header" style="display: flex; justify-content: space-between">
                                <h4 class=" card-title">Users List</h4>
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
                                            <tr>
                                                <td>1</td>
                                                <td>Statictics</td>
                                                <td>Description</td>
                                                <td>Maths</td>
                                                <td>Maths</td>
                                                <td><span class="badge rounded-pill bg-success">Available</span></td>
                                                <td>
                                                    <a class=" btn btn-warning" href="">View</a>
                                                    <a class=" btn btn-primary" href="">Edit</a>
                                                    <a class=" btn btn-danger" href="">Delete</a>
                                                </td>
                                            </tr>
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