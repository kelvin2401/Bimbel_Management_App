<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index() {
        $courses = Course::all();
        return view('courses.dashboard', ['courses' => $courses]);
    }

    public function create() {
        $ownerId = '110078732340280929515';
        return view('courses.create',['ownerId' => $ownerId]);
    }

    public function store(Request $request) {
        $validate = $this->validate($request, [
            'course_name' => 'required',
        ]);
        Course::create([
            'course_name' => $request->course_name
        ]);
        return redirect()->route('course.index');
    }

    public function show(Course $course)
    {
        //
    }
}
