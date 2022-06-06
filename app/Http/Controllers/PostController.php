<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create($course_id) {
        $course = Course::findOrFail($course_id);
        return view('posts.create',['course_id' => $course_id]);
    }
    public function store(Request $request, $course_id) {
        $validate = $this->validate($request, [
            'description' => 'required',
        ]);
        Post::create([
            'description' => $request->description,
            'course_id' => $request->course_id
        ]);
        return redirect()->route('classroom.create', $course_id)->with('course_id', $course_id);
    }
}
