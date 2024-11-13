@extends('admin.layouts.app')


@section('content')
    
            


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">

                <div class="bg-light rounded-top p-4">
                    <div class="">
                        <p><span class=" text-muted">Education/Quiz/</span><a class=" text-bold">Edit Quiz</a></p>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->
            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">

                <div class="bg-light rounded-top p-4">
                    <div class="">
                        <div class="row">
                            <form action="{{ route('quiz.update', $quiz->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" value="{{ $quiz->title }}" class="form-control" id="floatingInput" placeholder="Title" name="title">
                                        <label for="floatingInput">Name</label>
                                    </div>
                                   @error('name')
                                       <p class=" text-danger">{{ $message }}</p>
                                   @enderror
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <textarea name="description" class="form-control h-50" placeholder="Description" id="floatingInput" cols="5" rows="5">{{ $quiz->description }}</textarea>
                                        <!-- <input type="text" class="form-control" id="floatingInput" placeholder="Description" name="description"> -->
                                        <label for="floatingInput">Description</label>
                                    </div>
                                    @error('description')
                                        <p class=" text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-warning">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->


            @endsection