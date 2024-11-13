<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index() {
        return view('main.index');
    }

    public function education() {
        $courses = Course::all();
        return view('main.education', compact('courses'));
    }

    public function employment() {
        return view('main.employment');
    }
    public function register() {
        return view('main.register');
    }
    public function login() {
        return view('main.login');
    }
}
