@extends('admin.layouts.guest')

@section('content')
<div class="wrapper">
    <h2>Login</h2>
   
@if (session()->has('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session()->get('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    
@endif
    
    <!-- <div class="alert alert-danger"> -->

    <form action="{{ route('auth.login') }}" method="post">
      @csrf
      <div class="input-box">
        <input type="email" name="email" placeholder="Enter your email" required>
      </div>
      <div class="input-box">
        <input type="password" name="password" placeholder="Create password" required>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Login">
      </div>
      <div class="text">
        <h3>You don't have an account? <a href="{{ route('user.auth.register') }}">Register</a></h3>
      </div>
    </form>
  </div>

@endsection