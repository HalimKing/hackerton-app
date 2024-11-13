@extends('admin.layouts.app')


@section('content')
    
            


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">

                <div class="bg-light rounded-top p-4">
                    <div class="">
                        <p><span class=" text-muted">Dashboard/Education/</span><a class=" text-bold">Edit Course</a></p>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->
            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">

                <div class="bg-light rounded-top p-4">
                    <div class="">
                        <div class="row">
                            <form action="{{ route('course.update', $course->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="Title" value="{{ old('title', $course->title) }}" name="title">
                                            <label for="floatingInput">Title</label>
                                        </div>
                                    @error('title')
                                        <p class=" text-danger">{{ $message }}</p>
                                    @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <select name="category_id" class="form-select" id="">
                                                <option value="">Select Category</option>
                                                @if ($categories)
                                                    @foreach ($categories as $category)
                                                        <option @if($category->id == old('category_id') || $category->id == $course->category_id) selected @endif value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                    
                                                @endif
                                            </select>
                                            <!-- <input type="text" class="form-control" id="floatingInput" placeholder="Title" name="title"> -->
                                            <label for="floatingInput">Category</label>
                                        </div>
                                    @error('category_id')
                                        <p class=" text-danger">{{ $message }}</p>
                                    @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <textarea name="description" class="form-control h-50" placeholder="Description" id="floatingInput" cols="5" rows="5">{{ old('description', $course->description) }}</textarea>
                                        <!-- <input type="text" class="form-control" id="floatingInput" placeholder="Description" name="description"> -->
                                        <label for="floatingInput">Description</label>
                                    </div>
                                    @error('description')
                                        <p class=" text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">   
                                        <label for="floatingInput">Course Content</label>
                                            <textarea col="5" rows="5" name="content" class="h-100" id="summernote">{{ old('content', $content) }}</textarea>
                                         
                                           
                                        </div>
                                    @error('content')
                                        <p class=" text-danger">{{ $message }}</p>
                                    @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="file" class="form-control" id="floatingInput" placeholder="Image" name="image">
                                            <label for="floatingInput">Image</label>
                                        </div>
                                    @error('image')
                                        <p class=" text-danger">{{ $message }}</p>
                                    @enderror
                                    </div>
                                    
                                </div>
                                <button type="submit" class="btn btn-warning">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->


            @endsection