@extends('main.layouts.app')


@section('content')
              
            <div class="education-page-heading header-text">
              <div class="container">
                <div class="row">
                  <div class="col-lg-12">
                    <span class="breadcrumb"><a href="#">Home</a> / Education</span>
                    <h3>Education</h3>
                  </div>
                </div>
              </div>
            </div>

            <div class="section properties">
              <div class="container">
                
                <div class="row properties-items">
                <div class="col-lg-4 col-md-6">
                <input type="search" name="search" class="form-control my-5" placeholder="Search" id="searchBox">
                
                <div class="box">
                    <h4><strong>Filter by:</strong> Category</h4>
                    <div class="row mt-3" id="categoryFilter">
                        @if (count($categories) > 0)
                            @foreach ($categories as $category)
                                <div class="form-group py-2">
                                    <input type="checkbox" name="category_id[]" class="category-checkbox" value="{{ $category->id }}">
                                    <label>{{ $category->name }}</label>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-md-6 align-self-center mb-30 properties-items col-md-6 rac str">
              <div id="coursesContent">
                  @include('partials.course')
              </div>
            </div>
               
        </div>

      </div>
      
    </div>
  </div>
@endsection