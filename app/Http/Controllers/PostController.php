<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Http\Requests\StoreFileRequest;
use Illuminate\Support\Facades\Storage;

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
        if ($request->file('file') == null) {
            $file = "";
        }
        else {
            $file = $request->filename . '.' . $request->file->getClientOriginalExtension();
            $path = $request->file('file')->storeAs('files', $file);
        }
        Post::create([
            'description' => $request->description,
            'course_id' => $request->course_id,
            'file' => $file,
            'filename' => $request->filename
        ]);
        return redirect()->route('classroom.create', $course_id)->with('course_id', $course_id);
    }

    public function edit(Post $post, $id){
        $post = Post::find($id);
        return view('posts.edit',compact('post'));
    }

    public function update(Request $request, $id) {
        $request->validate(['description' => 'required']);
        if ($request->file('file') == null) {
            $file = "";
        }
        else {
            $path = $request->file('file')->storeAs('files', $request->filename);
            $file = $request->$filename . '.' . $request->file->extension();
        }
        $post = Post::find($id);
        $post->update($request->all());
        return redirect()->route('courses.index');
    }

    public function destroy(Post $post, $id){
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('courses.index');
    }

    public function download($file) {
        return Storage::download('files/' . $file);
    }
}
