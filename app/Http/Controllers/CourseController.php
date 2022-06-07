<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CourseController extends Controller
{
    public function index() {
        $courses = Course::all();
        return view('courses.dashboard', ['courses' => $courses]);
    }

    public function create() {
        return view('courses.create');
    }

    public function store(Request $request) {
        $validate = $this->validate($request, [
            'course_name' => 'required',
        ]);
        Course::create([
            'course_name' => $request->course_name
        ]);
        return redirect()->route('courses.index');
    }

    public function show(Course $course)
    {
        //
    }

    public function edit(Course $course, $id){
        $course = Course::find($id);
        return view('courses.edit',compact('course'));
    }

    public function update(Request $request, $id) {
        $request->validate(['course_name' => 'required']);
        $course = Course::find($id);
        $course->update($request->all());
        return redirect()->route('courses.index');
    }

    public function destroy(Course $course, $id){
        $course = Course::find($id);
        $course->delete();
        return redirect()->route('courses.index');
    }
}
