@extends('admin.layouts.app')


@section('content')
    
            


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">

                <div class="bg-light rounded-top p-4">
                    <div class="">
                        <p><span class=" text-muted">Dashboard/Education/</span><a class=" text-bold">Course Category List</a></p>
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
                                <a class=" btn btn-primary" href="{{ route('education-category.create') }}"><i class="fa fa-plus"></i> Add</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example"  class=" table table-bordered table-striped display"  style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Category Name</th>
                                                <th>Category Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $count = 1;
                                            @endphp
                                            @if (count($categories) > 0)
                                                @foreach ($categories as $category)
                                                    
                                                
                                                <tr>
                                                    <td>{{ $count }}</td>
                                                    <td>{{ $category->name }}</td>
                                                    <td>{{ $category->description }}</td>
                                                    <td class="d-flex gap-2">
                                                        <a class=" btn btn-primary btn-sm" href="{{ route('education-category.edit', $category->id) }}">Edit</a>
                                                        <form action="{{ route('education-category.destroy', $category->id) }}" method="post">
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