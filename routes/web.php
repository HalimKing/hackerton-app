<?php

use App\Http\Controllers\CourseCategoryController;
use App\Http\Controllers\EducationCategoryController;
use App\Http\Controllers\EducationMainController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\SubCategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/admin', function() {
        return view('admin.home');
    });

    Route::resource('/admin/education-category', EducationCategoryController::class);
    Route::resource('/admin/course', CourseCategoryController::class);
    Route::resource('/admin/jobs', JobsController::class);
    Route::resource('/admin/sub-category', SubCategoryController::class);
    Route::resource('/admin/module', ModuleController::class);
    Route::resource('/admin/quiz', QuizController::class);
    Route::resource('/admin/question', QuestionController::class);

    // Route::get('/education/{id}', [EducationMainController::class, 'show'])->middleware('auth')->name('course-details');

    
});


// Route::get('/districts', [LoginController::class, 'getDistrict'])->name('getDistricts');
Route::get('/user/auth/login', [LoginController::class, 'login'])->name('user.auth.login');
Route::get('/user/auth/register', [LoginController::class, 'register'])->name('user.auth.register');
Route::post('/user/auth/store', [LoginController::class, 'store'])->name('user.auth.store');
Route::post('/user/auth/auth-login', [LoginController::class, 'authLogin'])->name('auth.login');
Route::post('/user/auth/logout', [LoginController::class, 'logout'])->name('logout.user');
// Route::
Route::get('/get-districts', [LocationController::class, 'getDistricts'])->name('getDistricts');

Route::resource('/education', EducationMainController::class);

Route::get('/', [MainController::class, 'index'])->name('/');
Route::get('/employment', [MainController::class, 'employment'])->name('employment');
// Route::get('/education', [MainController::class, 'education'])->name('education');
Route::get('/register', [MainController::class, 'register'])->name('register');
Route::get('/login', [MainController::class, 'login'])->name('login');



require __DIR__.'/auth.php';
