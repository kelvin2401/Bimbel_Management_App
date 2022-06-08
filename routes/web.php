<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AssignmentController;
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
Route::get('/courses', [CourseController::class,'index'])->name('courses.index');

Route::get('/courses-create', [CourseController::class,'create'])->name('courses.create')->middleware('is_admin');
Route::get('/courses-edit/{id}', [CourseController::class,'edit'])->name('courses.edit')->middleware('is_admin');
Route::post('/courses-store', [CourseController::class,'store'])->name('courses.store')->middleware('is_admin');
Route::put('/courses-update/{id}', [CourseController::class,'update'])->name('courses.update')->middleware('is_admin');
Route::delete('/courses-delete/{id}', [CourseController::class,'destroy'])->name('courses.destroy')->middleware('is_admin');

Route::get('/courses/{course_id}', [ClassroomController::class,'create'])->name('classroom.create');

Route::get('/courses/{course_id}/create', [PostController::class,'create'])->name('posts.create');
Route::post('/courses/{course_id}/create', [PostController::class,'store']);

Route::get('/post-edit/{id}', [PostController::class,'edit'])->name('posts.edit')->middleware('is_admin');
Route::put('/post-update/{id}', [PostController::class,'update'])->name('posts.update')->middleware('is_admin');
Route::delete('/post-delete/{id}', [PostController::class,'destroy'])->name('posts.destroy')->middleware('is_admin');
Route::get('/post-download/{id}', [PostController::class,'download'])->name('posts.download');

Route::get('/post-dashboard/{id}', [PostController::class,'index'])->name('posts.index')->middleware('is_admin');;

Route::get('/assignment-create/{post_id}', [AssignmentController::class,'create'])->name('assignments.create');
Route::post('/assignment-store/{post_id}', [AssignmentController::class,'store'])->name('assignments.store');