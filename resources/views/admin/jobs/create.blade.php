@extends('admin.layouts.app')


@section('content')
    
            


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">

                <div class="bg-light rounded-top p-4">
                    <div class="">
                        <p><span class=" text-muted">Dashboard/Education/</span><a class=" text-bold">Add New Job</a></p>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->
            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">

                <div class="bg-light rounded-top p-4">
                    <div class="">
                        <div class="row">
                            <form action="{{ route('jobs.store') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="Title" value="{{ old('title') }}" name="title">
                                            <label for="floatingInput">Title</label>
                                        </div>
                                    @error('title')
                                        <p class=" text-danger">{{ $message }}</p>
                                    @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="Location" value="{{ old('location') }}" name="location">
                                            <label for="floatingInput">Location</label>
                                        </div>
                                    @error('location')
                                        <p class=" text-danger">{{ $message }}</p>
                                    @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <textarea name="description" class="form-control h-50" placeholder="Description" id="floatingInput" cols="5" rows="5">{{ old('description') }}</textarea>
                                        <!-- <input type="text" class="form-control" id="floatingInput" placeholder="Description" name="description"> -->
                                        <label for="floatingInput">Description</label>
                                    </div>
                                    @error('descripiton')
                                        <p class=" text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="Title" value="{{ old('salary') }}" name="salary">
                                            <label for="floatingInput">Salary(GHS)</label>
                                        </div>
                                    @error('salary')
                                        <p class=" text-danger">{{ $message }}</p>
                                    @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating d-flex gap-2 mb-3">
                                            
                                            <input type="url" class="form-control" id="floatingInput" placeholder="Url" value="{{ old('url') }}" name="url">
                                            
                                            <label for="floatingInput">Link</label>
                                        </div>
                                    @error('url')
                                        <p class=" text-danger">{{ $message }}</p>
                                    @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group d-flex pt-3 gap-2 mb-3">
                                            
                                            <input type="checkbox" class="form-check-input" id="floatingInput" placeholder="" value="true" name="available" @if(old('available')) checked @else '' @endif checked>

                                            <label for="floatingInput">Available</label>
                                        </div>
                                    @error('available')
                                        <p class=" text-danger">{{ $message }}</p>
                                    @enderror
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