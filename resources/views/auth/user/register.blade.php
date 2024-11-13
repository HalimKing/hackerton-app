@extends('admin.layouts.guest')

@section('content')
<div class="wrapper">
    <h2>Registration</h2>
    <form action="{{ route('user.auth.store') }}" method="POST">
    @csrf
    <div class="input-box">
        <input type="text" name="name" placeholder="Enter your name" value="{{ old('name') }}">
        @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="input-box">
        <input type="email" name="email" placeholder="Enter your email" value="{{ old('email') }}">
        @error('email')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="input-box">
        <input type="text" name="phone" placeholder="Enter your phone number" value="{{ old('phone') }}">
        @error('phone')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="input-box">
        <input type="password" name="password" placeholder="Create password">
        @error('password')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="input-box">
        <input type="password" name="password_confirmation" placeholder="Confirm password">
        @error('password_confirmation')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="input-box my-3">
        <select name="gender" class="select" id="">
            <option value="">Select Gender</option>
            <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
            <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
        </select>
        @error('gender')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="input-box my-3">
        <select name="region" class="select" id="region">
            <option value="">Select Region</option>
            @if ($regions_districts)
                @foreach ($regions_districts as $regions_district)
                    <option value="{{ $regions_district->region }}" {{ old('region') == $regions_district->region ? 'selected' : '' }}>
                        {{ $regions_district->region }}
                    </option>
                @endforeach
            @endif
        </select>
        @error('region')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="input-box my-3">
        <select name="district" class="select" id="district">
            <option value="">Select District</option>
        </select>
        @error('district')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="input-box my-3">
        <label for="">Date Of Birth</label>
        <input type="date" name="date_of_birth" class="form-control" value="{{ old('date_of_birth') }}">
        @error('date_of_birth')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="input-box button">
        <input type="submit" value="Register Now">
    </div>
    
    <div class="text">
        <h3>Already have an account? <a href="{{ route('user.auth.login') }}">Login now</a></h3>
    </div>
</form>

  </div>

@endsection