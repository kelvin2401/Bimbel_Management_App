<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Classroom;
use App\Models\Post;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function create($course_id)
    {
        $course = Course::findOrFail($course_id);
        $posts = Post::where('course_id', $course_id)->get();
        return view('classrooms.create', ['course_id' => $course_id, 'posts' => $posts]);
    }
}
