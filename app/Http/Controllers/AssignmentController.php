<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Http\Requests\StoreFileRequest;
use Illuminate\Support\Facades\Storage;

class AssignmentController extends Controller
{
    public function create($post_id) {
        $post = Post::findOrFail($post_id);
        return view('assignments.create',['post_id' => $post_id]);
    }
    public function store(Request $request, $post_id) {
        $validate = $this->validate($request, [
            'filename' => 'required',
        ]);
        if ($request->file('file') == null) {
            $file = "";
        }
        else {
            $file = $request->filename . '.' . $request->file->getClientOriginalExtension();
            $path = $request->file('file')->storeAs('files', $file);
        }
        $assignment = Assignment::create([
            'post_id' => $request->post_id,
            'file' => $file,
            'filename' => $request->filename,
        ]);
        return redirect()->route('courses.index');
    }

}
