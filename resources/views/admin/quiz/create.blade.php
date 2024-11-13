@extends('admin.layouts.app')


@section('content')
    
            


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">

                <div class="bg-light rounded-top p-4">
                    <div class="">
                        <p><span class=" text-muted">Education/Quiz/</span><a class=" text-bold">Add Quiz</a></p>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->
            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">

                <div class="bg-light rounded-top p-4">
                    <div class="">
                        <div class="row">
                            <form action="{{ route('quiz.store') }}" method="post">
                                @csrf
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="Name" value="{{ old('title') }}" name="title">
                                        <label for="floatingInput">Title</label>
                                    </div>
                                   @error('title')
                                       <p class=" text-danger">{{ $message }}</p>
                                   @enderror
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <textarea name="description" class="form-control h-50" placeholder="Description" id="floatingInput" cols="5" rows="5">{{ old('description') }}</textarea>
                                        <!-- <input type="text" class="form-control" id="floatingInput" placeholder="Description" name="description"> -->
                                        <label for="floatingInput">Description</label>
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->


            @endsection