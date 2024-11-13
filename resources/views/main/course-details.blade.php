@extends('main.layouts.app')
@section('content')


  
  <div class="employment-page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <span class="breadcrumb"><a href="#">Home</a> / Edjcation / Course Details</span>
          <h3>Education</h3>
        </div>
      </div>
    </div>
  </div>
  @if (!auth()->check())
    <script>window.location.href = '/user/auth/login';</script>
  @endif
  <div class="section properties">
    <div class="container">
        <div class="row border-bottom pb-5">
            <div class="col-lg-12">
                <h1>{{ $course->title }}</h1>
                
                <span><strong>Category: </strong> {{ $course->category->name }} </span>
            </div>
        </div>
        <div class="row pt-3 py-5">
            <h2>Job Description</h2>
            <div class="description-container">
                {{ $course->description }}
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12">
                <div class="icon-button">
                    <a href="#"><i class="fa fa-arrow-right"></i>Start</a>
                </div>
            </div>
        </div>
     
    </div>
  </div>

  

  @endsection