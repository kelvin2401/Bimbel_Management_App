<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/courses', [CourseController::class,'index']);
Route::get('/courses/create',[CourseController::class,'create'])->name('courses.create');
Route::post('/courses/create', [CourseController::class,'store']);
Route::resource('course', 'App\Http\Controllers\CourseController');

Route::get('/courses/{course_id}', [ClassroomController::class,'create'])->name('classroom.create');

Route::get('/courses/{course_id}/create', [PostController::class,'create'])->name('posts.create');
Route::post('/courses/{course_id}/create', [PostController::class,'store']);
Route::resource('course/{course_id}', 'App\Http\Controllers\PostController');
